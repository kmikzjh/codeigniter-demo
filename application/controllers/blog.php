<?php

class Blog extends CI_Controller {
	
	function Blog()
	{
		parent::__construct();
		
		$this->load->helper('url');
		$this->load->helper('form');
		
	}
	
	function index ()
	{
		$data['title'] = "My Blog Title";
		$data['heading'] = "My Blog Heading";
		$data['query'] = $this->db->get('entries');
		
		$this->load->view('blog_view', $data);
	}
	
	function comments()
	{
		$data['title'] = "My Comment Title";
		$data['heading'] = "My Comment Heading";
		$data['query'] = $this->db->get('entries');
		
		$this->load->view('comment_view', $data);
	}
	
}

?>