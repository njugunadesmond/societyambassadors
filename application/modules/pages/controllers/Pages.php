<?php

class Pages extends MX_Controller {

    public function __construct() {
            parent::__construct();
            $this->load->model(array('admin/admin_model'));
            $this->load->helper(array('html', 'url_helper', 'form'));
    }

	public function view($page = 'home') {

		if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['blogs'] = $this->admin_model->get_blog();
        $data['events'] = $this->admin_model->get_event();
        $data['title'] = ucwords($page); 

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
	}
}