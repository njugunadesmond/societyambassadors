<?php

class Blog_model extends CI_Model {
	
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
}