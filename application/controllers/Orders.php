<?php

class Orders extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('member_model');
        $this->load->model('pages_model', 'page');
    }

    function index($packageId)
    {
        $this->data['package_id'] = $packageId = doDecode($packageId);
        $this->data['package'] = $package = $this->master->get_data_row('packages', ['id'=> $packageId]);

        $this->load->view('order/order-form', $this->data);
    }

	function pay_now()
	{
		$res=array();
		$res['scroll_top']=0;
		// pr($this->input->post());
		$post = html_escape($this->input->post());
		$this->form_validation->set_message('integer', 'Please select a valid {field}');
		$this->form_validation->set_rules('payment_type', 'Payment', 'required|in_list[paypal]', array('in_list' => '{field} should be valid'));
        if(empty($this->session->mem_id))
        {
            $this->form_validation->set_rules('fname', 'First Name', 'required');
            $this->form_validation->set_rules('lname', 'Last Name', 'required');
            $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
            $this->form_validation->set_rules('phone', 'Phone Number', 'required');
            $this->form_validation->set_rules('country', 'Country/Region', 'required');
            $this->form_validation->set_rules('city', 'City', 'required');
            // $this->form_validation->set_rules('state', 'State', 'required');
            $this->form_validation->set_rules('postal_code', 'Postal Code', 'required');
            $this->form_validation->set_rules('address', 'Address', 'required');
        }
        
        $this->form_validation->set_rules('channel_name', 'channel_name', 'required');
        $this->form_validation->set_rules('channel_url', 'channel_url', 'required');
		
		if($this->form_validation->run()===FALSE)
		{
			$res['msg'] = validation_errors();
			$res['status'] = 0;
			$res['scroll_top']= 1;
		}
        else
        {
			$vals = html_escape($this->input->post());
            $vals['package_id'] = doDecode($vals['package_id']);
            if(empty($this->session->mem_id))
            {

                $rando = doEncode(rand(99, 999) . '-' . $post['email']);
                $rando = strlen($rando) > 225 ? substr($rando, 0, 225) : $rando;

                $member['mem_fname'] = ucfirst($vals['fname']);
                $member['mem_lname'] = ucfirst($vals['lname']);
                $member['mem_email'] = $vals['email'];
                $member['mem_pswd']  = doEncode('12345678');
                $member['mem_phone'] = $vals['phone'];
                $member['mem_country'] = $vals['country'];
                $member['mem_city']  = $vals['city'];
                $member['mem_zip']   = $vals['postal_code'];
                $member['mem_address'] = $vals['address'];

                $member['mem_code']   = $rando;
                $member['mem_status'] = 1;
                $member['mem_last_login'] = date('Y-m-d h:i:s');

                $mem_id = $this->member_model->save($member);
                $this->session->set_userdata('mem_id', $mem_id);
                $this->session->set_userdata('mem_type', $as);

                $verify_link = site_url('verification/' . $rando);
                $mem_data = array('name' => ucfirst($vals['fname']) . ' ' . ucfirst($vals['lname']), "email" => ucfirst($vals['email']), "link" => $verify_link);
                $this->send_site_email($mem_data, 'signup');

                $vals['mem_id'] = $mem_id;
            }
            else
            {
                $member = $this->member_model->get_row($this->session->mem_id);
                $vals['fname'] = $member->mem_fname;
                $vals['lname'] = $member->mem_lname;
                $vals['email'] = $member->mem_email;
                $vals['phone'] = $member->mem_phone;
                $vals['country'] = $member->mem_country;
                $vals['city'] = $member->mem_city;
                $vals['postal_code'] = $member->mem_zip;
                $vals['address'] = $member->mem_address;

                $vals['mem_id'] = $member->mem_id;
            }
            
			if ($vals['payment_type']=='credit-card') {
				include_once APPPATH . "libraries/stripe/init.php";
				\Stripe\Stripe::setApiKey(API_SECRET_KEY);
				try {
					if (!isset($vals['nonce']))
					throw new Exception("The Stripe Token was not generated correctly");
					$cents = $total*100;
					 $customer = \Stripe\Charge::create([
						"amount" => $cents,
						"currency" => "usd",
						"source" => $vals['nonce'],
						"description" => "Customer Charge",
						"statement_descriptor" => "Paid successfully"
					]);
				}catch (Exception $e) {
					$res['msg'] = $e->getMessage();
					$res['status']=0;
					exit(json_encode($res)) ;
				}
				$vals['txt_id'] = $customer['id'];
				$vals['status'] = 1;
				$o_id = $this->save_order($vals);
			}
            else
            {
				$o_id = $this->save_order($vals);
			}
			if ($o_id>0) {
				// $this->send_admin_email();
				if ($vals['payment_type'] == 'credit-card') {
					$res['msg'] = 'Your order has been completed successfully. We will contact you shortly.';
					$res['status'] = 1;
					$res['redirect_url'] = base_url('order-success');
				}else{
					$res['msg'] = 'Your order has been completed successfully. Your are reditect to paypal for payment';
					$res['status'] = 1;
					$res['redirect_url'] = base_url('paypal/'.doEncode($o_id));
				}
			}else{
				$res['status'] = 0;
				$res['msg'] = 'Your order has not been completed successfully. Please try again';
			}
		}
		
		exit(json_encode($res));
	}

	private function save_order($arr) :int 
	{
		
		$order_data = array(
			'fname'=>$arr['fname'],
			'phone'=>$arr['phone'],
			'lname'=>$arr['lname'],
			'email'=>$arr['email'],
			'city'=>$arr['city'],
			'country'=>$arr['country'],
			'address'=>$arr['address'],
			'postal_code'=>$arr['postal_code'],
			'payment_type'=>$arr['payment_type'],
			'package_id'=>$arr['package_id'],
			'mem_id'=>$arr['mem_id'],
			'txt_id'=>$arr['txt_id'],

		);
		$order_id = $this->master->save('orders',$order_data);
		return $order_id; 
	}
    
}
