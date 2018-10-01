<?php

class Admin extends MX_Controller {

	public function __construct() {

			parent::__construct();
			$this->load->model(array('admin_model'));
			$this->load->helper(array('form', 'html', 'url_helper'));
			$this->load->library(array('auth/ion_auth'));
	}
	
	public function blog() {
			$head['title'] = 'list blogs';

			if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
				redirect('admin', 'refresh');
			}

			$data['blogs'] = $this->admin_model->get_blog();

			$this->load->view('templates/admin_header', $head);
			$this->load->view('admin/blog/index', $data);
			$this->load->view('templates/admin_footer');
	}	

	public function create_blog() {
			$head['title']				= 'create blog';

			if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
				redirect('admin', 'refresh');
			}

			$config['upload_path']      = './uploads/blog/';
			$config['allowed_types']	= 'gif|jpg|jpeg|png';
			$config['max_size']			= 500;

			$this->load->library(array('upload'));
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->upload->initialize($config);

			$this->form_validation->set_rules('blog_title', 'Title', 'required');
			$this->form_validation->set_rules('blog_about', 'About', 'required');

			$this->upload->do_upload('blog_photo');
			$upload_data = $this->upload->data();

			if ($this->form_validation->run() === FALSE) {

	                $this->load->view('templates/admin_header', $head);
	                $this->load->view('admin/blog/create');
	                $this->load->view('templates/admin_footer');

	            } else {
	                $file_name = '';
	                if($upload_data) {
	                    $file_name = $upload_data['file_name'];
	                    $file_type = $upload_data['file_type'];
	                    $file_size = $upload_data['file_size'];
	                }
	                else {
	                   $upload_error = $this->upload->display_errors();
	                }

	                $this->admin_model->set_blog($file_name);
	                redirect('admin/blog');
	        }
	}

	public function members() {
			$head['title']	= 'list members';

			if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
				redirect('admin', 'refresh');
			}

			$data['members'] = $this->admin_model->get_member();

			$this->load->view('templates/admin_header', $head);
			$this->load->view('admin/members/index', $data);
			$this->load->view('templates/admin_footer');
	}

	public function create_member() {
			$head['title']				= 'create member';

			if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
				redirect('admin', 'refresh');
			}

			$config['upload_path']      = './uploads/members/';
			$config['allowed_types']	= 'gif|jpg|jpeg|png';
			$config['max_size']			= 500;

			$this->load->library(array('upload'));
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->upload->initialize($config);

			$this->form_validation->set_rules('member_name', 'Member Name', 'required');
			$this->form_validation->set_rules('phone', 'Phone Number', 'required|is_unique[members.phone_number]');
			$this->form_validation->set_rules('orgn_id', 'Organization ID', 'required|is_unique[members.org_id]');
			$this->form_validation->set_rules('member_email', 'Email', 'required|is_unique[members.email]');
			$this->form_validation->set_rules('member_role', 'Role', 'required');
			$this->form_validation->set_rules('facebook_add', 'Facebook Address', 'required|is_unique[members.facebook]');
			$this->form_validation->set_rules('twitter_add', 'Twitter Address', 'is_unique[members.twitter]');
			$this->form_validation->set_rules('instagram_add', 'Instagram Address', 'is_unique[members.instagram]');
			$this->form_validation->set_rules('linkedin_add', 'LinkedIn Address', 'is_unique[members.linkedin]');

			$this->upload->do_upload('profile_photo');
			$upload_data = $this->upload->data();

			if ($this->form_validation->run() === FALSE) {

	                $this->load->view('templates/admin_header', $head);
	                $this->load->view('admin/members/create');
	                $this->load->view('templates/admin_footer');

	            } else {
	                $file_name = '';
	                if($upload_data) {
	                    $file_name = $upload_data['file_name'];
	                    $file_type = $upload_data['file_type'];
	                    $file_size = $upload_data['file_size'];
	                }
	                else {
	                   $upload_error = $this->upload->display_errors();
	                }

	                $this->admin_model->set_member($file_name);
	                redirect('admin/members');
            }
    }

	public function events() {
			$head['title'] = 'list events';

			if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
				redirect('admin', 'refresh');
			}

			$data['events'] = $this->admin_model->get_event();

			$this->load->view('templates/admin_header', $head);
			$this->load->view('admin/events/index', $data);
			$this->load->view('templates/admin_footer');

	}

	public function create_event() {
			$head['title'] 				= 'create event';

			if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
				redirect('admin', 'refresh');
			}

			$config['allowed_types'] 	= 'gif|png|jpeg|jpg';
			$config['upload_path'] 		= './uploads/events/';
			$config['max_size'] 		= 500;

			$this->load->library(array('upload'));
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->upload->initialize($config);

			//validating form input
			$this->form_validation->set_rules('event_venue', 'Venue', 'required');
			$this->form_validation->set_rules('select_type_of_event', 'Type of Event', 'required');
			$this->form_validation->set_rules('event_start_date', 'Start Date', 'required|is_unique[events.start_date]');
			$this->form_validation->set_rules('event_end_date', 'End Date', 'required|is_unique[events.end_date]');
			$this->form_validation->set_rules('event_gate_pass', 'Gate Pass', 'required');
			$this->form_validation->set_rules('event_meeting_point', 'Meeting Point', 'required'); 

			$this->upload->do_upload('event_photo');
			$upload_data = $this->upload->data();

			if ($this->form_validation->run() === FALSE) {
				$this->load->view('templates/admin_header', $head);
				$this->load->view('admin/events/create');
				$this->load->view('templates/admin_footer');
			} else {
				$file_name = '';
				if ($upload_data) {
					$file_name = $upload_data['file_name'];
					$file_type = $upload_data['file_type'];
					$file_size = $upload_data['file_size'];
				} else {
					$upload_error = $this->upload->display_errors();
				}

				$this->admin_model->set_event($file_name);
				redirect('admin/events');
			}
	}

	public function edit_event($id) {
			$head['title'] = 'Edit Event';

			if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
				redirect('admin', 'refresh');
			}
	}
}