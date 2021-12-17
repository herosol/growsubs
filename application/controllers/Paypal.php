<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paypal extends MY_Controller {
    
    function  __construct(){
        parent::__construct();
        $this->load->library('paypal_lib');
    }
    
    function success($encoded_id){
        redirect(base_url('order-success/'.$encoded_id));
        exit;
    }
    
    function order_notify(){
        $raw_post_data = file_get_contents('php://input');
        // pr($raw_post_data );
        $raw_post_array = explode('&', $raw_post_data);
        $myPost = array();
        foreach ($raw_post_array as $keyval) {
            $keyval = explode ('=', $keyval);
            if (count($keyval) == 2)
             $myPost[$keyval[0]] = urldecode($keyval[1]);
        }
        $req = 'cmd=_notify-validate';
        
        if (function_exists('get_magic_quotes_gpc')) {
                $get_magic_quotes_exists = true;
        }
        foreach ($myPost as $key => $value) {
            if ($get_magic_quotes_exists == true && get_magic_quotes_gpc() == 1) {
                $value = urlencode(stripslashes($value));
            } else {
                $value = urlencode($value);
            }
            $req .= "&$key=$value";
        }
        if($this->data['settings']->site_paypal_environment):
            $ppurl = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
        else:
            $ppurl = 'https://www.paypal.com/cgi-bin/webscr';
        endif;
        $ch = curl_init($ppurl);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));
        if ( !($res = curl_exec($ch)) ) {
            error_log("Got " . curl_error($ch) . " when processing IPN data");
            curl_close($ch);
            exit;
        }
        curl_close($ch);
        $resArray = $_POST;
        if (strcmp ($res, "VERIFIED") == 0)
        {
            $filename = 'order-('.date('Y-m-d-His').')';
            $resArray['Status'] = 'VERIFIED';
            $custom = $resArray['custom'];
            $txn_id = $resArray['txn_id'];
            $row = $this->master->getRow('orders', array('id'=>$custom));
            if ($row) {
                $this->master->save('orders', ['payment_status'=>1, 'txt_id'=> $txn_id], 'id', $custom);
            }
        }
        elseif (strcmp ($res, "INVALID") == 0)
        {
            $filename = 'INVALID ('.date('Y-m-d-His').')';
            $resArray['Status'] = 'INVALID';
        }
        $content = '';
        foreach($resArray as $key => $val):
            $content .= "\r\n";
            $content .= $key." = ".$val;
        endforeach;
        $filecontent = $content;
        $fp = fopen('./paypal/'.$filename.".txt","wb");
        fwrite($fp,$filecontent);
        fclose($fp);
    }
    function cancel($encoded_id) {
        setMsg('error','Payment has not been processed successfully');
        redirect(base_url('order-cancel/'.$encoded_id),'refresh');
        exit;
    }
}