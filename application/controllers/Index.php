<?php

class Index extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('member_model');
        $this->load->model('pages_model', 'page');
    }

    function index()
    {
        $meta = $this->page->getMetaContent('home');
        $this->data['page_title'] = $meta->page_name;
        $this->data['slug'] = $meta->slug;
        $data = $this->page->getPageContent('home');
        if ($data) {
            $this->data['content'] = unserialize($data->code);
            $this->data['meta_desc'] = json_decode($meta->content);
            $this->data['testimonials'] = $this->master->get_data_rows('testimonials', ['status' => '1']);

            $this->load->view('index', $this->data);
        } else {
            show_404();
        }
    }
    
}
