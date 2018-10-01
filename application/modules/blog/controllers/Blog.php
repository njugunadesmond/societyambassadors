<?php

class Blog extends MX_Controller {
	
	public function __construct() {
			parent::__construct();
			//$this->load->library(array('url'));
			$this->load->helper(array('url_helper', 'form', 'html'));
			$this->load->model(array('admin/admin_model'));
	}

	public function view($slug = NULL) {
			$data['blog'] = $this->admin_model->get_blog($slug);

			$head['title'] = ucwords($data['blog']['title']);

			$this->load->view('templates/header', $head);
			$this->load->view('blog/index', $data);
			$this->load->view('templates/footer');
	}
}