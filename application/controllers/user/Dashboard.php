<?php

class Dashboard extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('member_model');
        // $this->load->model('order_model');
        // $this->load->model('OrderD_model', 'orderd_model');
    }

    public function dashboard()
    {
        $this->isMemLogged(false);
        $this->load->view('user/index', $this->data);
    }

    public function profile_settings()
    {
        // $this->isMemLogged($this->session->mem_type, false, $this->uri->segment(1));
        $mem_id = $this->session->mem_id;
        if ($this->input->post()) {
            $res = array();
            $res['hide_msg'] = 0;
            $res['scroll_to_msg'] = 1;
            $res['status'] = 0;
            $res['frm_reset'] = 0;
            $res['redirect_url'] = 0;

            $post = html_escape($this->input->post());
            $this->form_validation->set_message('integer', 'Please select a valid {field}');

            $this->form_validation->set_rules('mem_fname', 'First name', 'trim|required|alpha|min_length[2]|max_length[20]', ['alpha' => 'First Name should contains only letters and avoid space.', 'min_length' => 'First Name should contains atleast 2 letters.', 'max_length' => 'First Name should not be greater than 20 letters.']);
            $this->form_validation->set_rules('mem_lname', 'Last name', 'trim|required|alpha|min_length[2]|max_length[20]', ['alpha' => 'Last Name should contains only letters and avoid space.', 'min_length' => 'Last Name should contains atleast 2 letters.', 'max_length' => 'Last Name should not be greater than 20 letters.']);
            $this->form_validation->set_rules('mem_phone', 'Phone number', 'trim|required');
            $this->form_validation->set_rules('mem_dob', 'Date of birth', 'trim|required');
            $this->form_validation->set_rules('mem_sex', 'Gender', 'trim|required');
            $this->form_validation->set_rules('mem_country', 'Home Address country', 'trim|required');
            $this->form_validation->set_rules('mem_state', 'Home Address state', 'trim|required');
            $this->form_validation->set_rules('mem_city', 'Home Address city', 'trim|required');
            $this->form_validation->set_rules('mem_zip', 'Home Address zip', 'trim|required');
            $this->form_validation->set_rules('mem_address', 'Home Address', 'trim|required');
            // $this->form_validation->set_rules('mem_address_type', 'Home Address Type', 'required');


            if ($this->form_validation->run() === FALSE)
                $res['msg'] = validation_errors();

            if (!empty($res['msg']))
                exit(json_encode($res));

            if (isset($_FILES["dp_image"]["name"]) && $_FILES["dp_image"]["name"] != "") {
                $image = upload_file(UPLOAD_PATH . 'members', 'dp_image');
                if (!empty($image['file_name'])) {
                    $this->remove_file($mem_id, 'image');
                    generate_thumb(UPLOAD_PATH . "members/", UPLOAD_PATH . "members/", $image['file_name'], 100, 'thumb_');
                    generate_thumb(UPLOAD_PATH . "members/", UPLOAD_PATH . "members/", $image['file_name'], 300, '300p_');
                } else {
                    $res['msg'] = '<p> Please upload a valid image file >> ' . strip_tags($image['error']) . '</p>';
                    exit(json_encode($res));
                }
                $post['mem_image'] = $image['file_name'];
                $res['dp_image'] = '<img src="' . get_site_image_src("members", $post['mem_image'], '300p_') . '" alt="">';
            }

            // unset($post['address_type']);
            $post['mem_dob'] = db_format_date($post['mem_dob']);
            $this->member_model->save($post, $mem_id);

            $res['msg'] = showMsg('success', 'Profile update successfully!');
            $res['status'] = 1;
            $res['hide_msg'] = 1;
            $res['name_head'] = '<span class="regular">Welcome,</span> Dear, ' . $post['mem_fname'] . ' ' . $post['mem_lname'] . '!<span class="regular">Nice to see you again.</span>';
            exit(json_encode($res));
        }

        $this->load->view('user/profile-settings', $this->data);
    }

    public function notifications()
    {
        $this->isMemLogged($this->session->mem_type, true, $this->uri->segment(1));
        $clear = $this->member_model->clear_notifs();
        $this->data['notifications'] = $this->master->get_data_rows('notifications', ['mem_id'=> $this->session->mem_id], 'DESC');
        $this->load->view('buyer/notifications', $this->data);
    }

    public function orders()
    {
        $this->isMemLogged($this->session->mem_type, true, $this->uri->segment(1));
        // ALL ORDERS
        $orders = $this->order_model->get_buyer_orders();
        $services = [];
        foreach ($orders as $index => $order) :
            $order_detail = $this->master->getRows('order_detail', array('order_id' => $order->order_id));
            $orders[$index]->services = $order_detail;
        endforeach;
        $this->data['orders'] = $orders;

        // DELIVERED ORDERS
        $delivered_orders = $this->order_model->get_buyer_orders(['order_status'=> 'Delivered']);
        $services = [];
        foreach ($delivered_orders as $index => $order) :
            $order_detail = $this->master->getRows('order_detail', array('order_id' => $order->order_id));
            $delivered_orders[$index]->services = $order_detail;
        endforeach;
        $this->data['delivered_orders'] = $delivered_orders;

        // CANCELED ORDERS
        $canceled_orders = $this->order_model->get_buyer_orders(['order_status'=> 'Cancelled']);
        $services = [];
        foreach ($canceled_orders as $index => $order) :
            $order_detail = $this->master->getRows('order_detail', array('order_id' => $order->order_id));
            $canceled_orders[$index]->services = $order_detail;
        endforeach;
        $this->data['canceled_orders'] = $canceled_orders;

        // pr($this->data);
        $this->load->view('buyer/orders', $this->data);
    }

    public function order_detail($o_id)
    {
        $this->isMemLogged($this->session->mem_type, true, $this->uri->segment(1));
        $o_id = intval(doDecode($o_id));
        $this->master->update('order_logs', ['status' => 'clean'], ['mem_id' => $this->session->mem_id, 'mem_type' => $this->session->mem_type, 'order_id' => $o_id]);
        $this->data['order'] = $this->master->getRow('orders', array('order_id' => $o_id));
        $this->data['order_detail'] = $this->master->getRows('order_detail', array('order_id' => $o_id, 'service_type' => 'basic'));
        $this->data['amended'] = $this->orderd_model->get_rows(['order_id' => $o_id, 'service_type' => 'amended']);
        $this->data['delivery_proof'] = $this->master->getRow('order_delivery_proof', array('order_id' => $o_id, 'status' => 'pending'));
        $this->load->view('buyer/order-detail', $this->data);
    }

    public function transactions()
    {
        $this->isMemLogged($this->session->mem_type, true, $this->uri->segment(1));
        $transactions_details = $this->order_model->buyer_transactions();
        $this->data['transactions'] = $transactions_details['transactions'];
        $this->data['used_balance'] = $transactions_details['total_used_balance'];
        $this->load->view('buyer/transactions', $this->data);
    }

    public function save_address()
    {
        if ($this->input->post()) {
            $post = html_escape($this->input->post());
            $buyer_data = [];
            if ($post['address_type'] == 'home') {
                $buyer_data['mem_country'] = $post['address_country'];
                $buyer_data['mem_state']   = $post['address_state'];
                $buyer_data['mem_city']    = trim($post['address_city']);
                $buyer_data['mem_address'] = trim($post['address_field']);
                $buyer_data['mem_zip']     = trim($post['address_zip']);
                $buyer_data['mem_map_lat'] = $post['mem_map_lat'];
                $buyer_data['mem_map_lng'] = $post['mem_map_lng'];
            } elseif ($post['address_type'] == 'office') {
                $buyer_data['mem_business_country'] = $post['address_country'];
                $buyer_data['mem_business_state']   = $post['address_state'];
                $buyer_data['mem_business_city']    = trim($post['address_city']);
                $buyer_data['mem_business_address'] = trim($post['address_field']);
                $buyer_data['mem_business_zip']     = trim($post['address_zip']);
                $buyer_data['mem_business_map_lat'] = $post['mem_map_lat'];
                $buyer_data['mem_business_map_lng'] = $post['mem_map_lng'];
            } elseif ($post['address_type'] == 'hotel') {
                $buyer_data['mem_hotel_country'] = $post['address_country'];
                $buyer_data['mem_hotel_state']   = $post['address_state'];
                $buyer_data['mem_hotel_city']    = trim($post['address_city']);
                $buyer_data['mem_hotel_address'] = trim($post['address_field']);
                $buyer_data['mem_hotel_zip']     = trim($post['address_zip']);
                $buyer_data['mem_hotel_map_lat'] = $post['mem_map_lat'];
                $buyer_data['mem_hotel_map_lng'] = $post['mem_map_lng'];
            }
            $is_updated = $this->member_model->save($buyer_data, $this->session->mem_id);
            if ($is_updated) {
                $res['mem_data'] = $this->member_model->get_row($this->session->mem_id);
                $res['status'] = 1;
                exit(json_encode($res));
            } else {
                exit(json_encode(['status' => '0']));
            }
        }
    }

    ### REMOVE FILE
    private function remove_file($id, $type = '')
    {
        $obj = $this->member_model->get_row($id);
        $filepath = UPLOAD_PATH . "members/" . $obj->mem_image;
        $filepath_thumb = UPLOAD_PATH . "members/thumb_" . $obj->mem_image;
        $filepath_300p = UPLOAD_PATH . "members/300p_" . $obj->mem_image;
        if (is_file($filepath))
            unlink($filepath);

        if (is_file($filepath_thumb))
            unlink($filepath_thumb);

        if (is_file($filepath_300p))
            unlink($filepath_300p);
        return;
    }
}
