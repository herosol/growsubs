<?php

class Dashboard extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('member_model');
        $this->load->model('order_model');

        $this->perPage = 8;
    }

    public function dashboard()
    {
        $this->isMemLogged(false);
        $this->data['today_orders'] = $this->order_model->user_today_orders();
        $this->data['total_orders'] = count($this->order_model->get_user_orders());
        $this->data['total_invested'] = $this->order_model->get_user_total_invested();
        $this->load->view('user/index', $this->data);
    }

    public function profile_settings()
    {
        $this->isMemLogged(false);
        $mem_id = $this->session->mem_id;
        if ($this->input->post()) {
            $res = array();
            $res['hide_msg'] = 0;
            $res['scroll_to_msg'] = 1;
            $res['status'] = 0;
            $res['frm_reset'] = 0;
            $res['redirect_url'] = 0;

            $post = html_escape($this->input->post());

            $this->form_validation->set_rules('mem_name', 'First Name', 'trim|required|min_length[2]|max_length[40]', 
                [
                    'min_length' => 'First Name should contains atleast 2 letters.',
                    'max_length' => 'First Name should not be greater than 40 letters.'
                ]);

            $this->form_validation->set_rules('mem_profile_heading', 'Profile Heading', 'trim|required|min_length[5]|max_length[30]',
            [
                'min_length' => 'Profile heading should contains atleast 5 letters.',
                'max_length' => 'Profile heading should not be greater than 30 letters.'
            ]);
            $this->form_validation->set_rules('mem_country', 'Country', 'trim|required');
            $this->form_validation->set_rules('mem_city', 'City', 'trim|required');
            $this->form_validation->set_rules('mem_zip', 'Zip', 'trim|required');
            $this->form_validation->set_rules('mem_address', 'Address', 'trim|required');
            $this->form_validation->set_rules('mem_bio', 'Bio', 'trim|required|min_length[10]|max_length[100]',
            [
                'min_length' => 'Bio should contains atleast 10 letters.',
                'max_length' => 'Bio should not be greater than 100 letters.'
            ]);


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
                $res['dp_image'] = '<img src="' . get_site_image_src("members", $post['mem_image'], 'thumb_') . '" alt="">';
            }

            $mem_name = explode(' ', $post['mem_name']);
            $post['mem_fname'] = ucfirst($mem_name[0]);
            $post['mem_lname'] = ucfirst($mem_name[1]);
            unset($post['mem_name']);
            $this->member_model->save($post, $mem_id);

            $res['msg'] = showMsg('success', 'Profile update successfully!');
            $res['status'] = 1;
            $res['hide_msg'] = 1;
            exit(json_encode($res));
        }

        $this->load->view('user/profile-settings', $this->data);
    }

    public function orders()
    {
        $this->isMemLogged(false);
        // ALL ORDERS
        $data = $conditions = array(); 
        $uriSegment = 3;
         
        // Get record count 
        $conditions['returnType'] = 'count';
        $this->data['totalRec'] = $totalRec = $this->order_model->get_user_orders();
         
        // Pagination configuration 
        $config['base_url']    = base_url().'user/orders'; 
        $config['uri_segment'] = $uriSegment; 
        $config['total_rows']  = count($totalRec); 
        $config['per_page']    = $this->perPage; 
         
        // Initialize pagination library 
        $this->load->library('pagination');
        $this->pagination->initialize($config); 
         
        // Define offset 
        $page = $this->uri->segment($uriSegment); 
        $offset = ! $page ? 0 : $page; 
         
        // Get records 
        $conditions = array( 
            'start' => $offset, 
            'limit' => $this->perPage 
        ); 
        $this->data['records'] = $this->order_model->get_user_order_pagination($conditions);
        foreach($this->data['records'] as $index => $order):
            $order['package'] = $this->master->get_data_row('packages', ['id'=> $order['package_id']]);
            $this->data['orders'][] = $order;
        endforeach;
        $this->load->view('user/order', $this->data);
    }

    public function order_detail($o_id)
    {
        $this->isMemLogged(false);
        $o_id = intval(doDecode($o_id));
        $this->data['order'] = (array)$this->master->get_data_row('orders', array('id' => $o_id));
        $this->load->view('user/order-detail', $this->data);
    }

    public function transactions()
    {
        $this->isMemLogged(false);
        // ALL ORDERS
        $data = $conditions = array(); 
        $uriSegment = 3;
        
        // Get record count 
        $conditions['returnType'] = 'count';
        $this->data['totalRec'] = $totalRec = $this->order_model->get_user_transactions();
        
        // Pagination configuration 
        $config['base_url']    = base_url().'user/transactions'; 
        $config['uri_segment'] = $uriSegment; 
        $config['total_rows']  = count($totalRec); 
        $config['per_page']    = $this->perPage; 
        
        // Initialize pagination library 
        $this->load->library('pagination');
        $this->pagination->initialize($config); 
        
        // Define offset 
        $page = $this->uri->segment($uriSegment); 
        $offset = ! $page ? 0 : $page; 
        
        // Get records 
        $conditions = array( 
            'start' => $offset, 
            'limit' => $this->perPage 
        ); 
        $this->data['transactions'] = $this->order_model->get_user_transaction_pagination($conditions);
        $this->load->view('user/transection', $this->data);
    }

    public function support()
    {
        $this->isMemLogged(false);
        $this->data['faqs'] = $this->master->get_data_rows('faqs', array('status' => '1', 'type' => '1'));
        $this->load->view('user/support', $this->data);
    }

    function change_password()
    {
        $this->isMemLogged(false);
        if ($this->input->post()) {
            $res = array();
            $res['hide_msg'] = 0;
            $res['scroll_to_msg'] = 1;
            $res['redirect_url'] = 0;
            $res['status'] = 0;
            $res['frm_reset'] = 0;

            $this->form_validation->set_rules('pswd', 'Current Password', 'required');
            $this->form_validation->set_rules('npswd', 'New Password', 'required');
            $this->form_validation->set_rules('cpswd', 'Confirm Password', 'required|matches[npswd]');

            if ($this->form_validation->run() === FALSE) {
                $res['msg'] = validation_errors();
            } else {
                $post = html_escape($this->input->post());
                $row = $this->member_model->oldPswdCheck($this->data['mem_data']->mem_id, $post['pswd']);
                if (count($row) > 0) {
                    $ary = array('mem_pswd' => doEncode($post['npswd']));
                    $this->member_model->save($ary, $this->data['mem_data']->mem_id);
                    $res['msg'] = showMsg('success', 'Password successfully updated!');

                    $res['status'] = 1;
                    $res['frm_reset'] = 1;
                    $res['hide_msg'] = 1;
                } else {
                    $res['msg'] = '<p>Old Password Does Not Match.</p>';
                }
            }
            exit(json_encode($res));
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
