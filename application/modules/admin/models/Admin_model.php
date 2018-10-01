<?php

class Admin_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function get_blog($slug = FALSE) {
			if ($slug === FALSE) {
				$query = $this->db->get('blog');
				return $query->result_array();
			}

			$query = $this->db->get_where('blog', array('slug' => $slug));
            return $query->row_array();
	}

	public function get_event($slug = FALSE) {
			if($slug === FALSE) {
				$event = $this->db->get('events');
				return $event->result_array();
			}

			$event = $this->db->get_where('events', array('slug' => $slug));
			return $event->row_array();
	}

	public function get_member($slug = FALSE) {
			if ($slug === FALSE) {
				$query = $this->db->get('members');
				return $query->result_array();
			}

			$query = $this->db->get_where('members', array('slug' => $slug));
            return $query->row_array();		
	}

	public function member_number() {
			$num = $this->db->query('SELECT * FROM members');

			echo $num;
	}

	public function get_leader($slug = FALSE) {
			if ($slug === FALSE) {
				$query = $this->db->get('leaders');
				return $query->result_array();
			}

			$query = $this->db->get_where('leaders', array('slug' => $slug));
            return $query->row_array();
	}

	public function set_blog($filename = "") {
			$this->load->helper(array('url', 'date'));

			$slug = url_title($this->input->post('blog_title'), 'dash', TRUE);

			$data = array(
				'img' => $filename,
				'title' => $this->input->post('blog_title'),
				'date' => mdate('%Y-%m-%d', now()),
				'about' => $this->input->post('blog_about'),
				'snippet' => $this->input->post('blog_about'),
				'slug' => $slug
			);

			return $this->db->insert('blog', $data);
	}

	public function set_member($filename = "") {
			$this->load->helper('url');

			$slug = url_title($this->input->post('member_name'), 'dash', TRUE);

			$data = array(
				'img' => $filename,
				'name' => $this->input->post('member_name'),
				'phone_number' => $this->input->post('phone'),
				'org_id' => $this->input->post('orgn_id'),
				'role' => $this->input->post('member_role'),
				'email' => $this->input->post('member_email'),
				'slug' => $slug,
				'facebook' => $this->input->post('facebook_add'),
				'twitter' => $this->input->post('twitter_add'),
				'linkedin' => $this->input->post('linkedin_add'),
				'instagram' => $this->input->post('instagram_add')
			);

			return $this->db->insert('members', $data);
	}

	public function set_event($filename = "") {
			$this->load->helper('url', 'date');

			$slug = url_title($this->input->post('event_venue'), 'dash', TRUE);

			$data = array(
				'img' => $filename,
				'venue' => $this->input->post('event_venue'),
				'type_of_event' => $this->input->post('select_type_of_event'),
				'start_date' => date('Y-m-d H:i:s ', strtotime($this->input->post('event_start_date'))),
				'end_date' => date('Y-m-d H:i:s ', strtotime($this->input->post('event_end_date'))),
				'gate_pass' => $this->input->post('event_gate_pass'),
				'meeting_point' => $this->input->post('event_meeting_point'),
				'slug' => $slug
			);

			return $this->db->insert('events', $data);
	}
}