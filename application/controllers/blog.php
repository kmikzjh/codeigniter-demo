<?php

class Blog extends CI_Controller {
	
	function Blog()
	{
		parent::__construct();
		
		$this->load->helper('url');
		$this->load->helper('form');
		
	}
	
	function index()
	{
		$data['title'] = "Pagoda Rocks";
		$data['heading'] = "My CodeIgnitor Blog on Pagoda";
		$data['query'] = $this->db->get('entries');
		
		$this->load->view('blog_view', $data);
	}
	
	function comments()
	{
		$data['title'] = "My Comment Title";
		$data['heading'] = "My Comment Heading";
		$this->db->where('entry_id', $this->uri->segment(3));
		$data['query'] = $this->db->get('comments');
		
		$this->load->view('comment_view', $data);
	}
	
	function comment_insert()
	{
		$this->db->insert('comments', $_POST);
		
		redirect('blog/comments/'.$_POST['entry_id']);
	}
}
?>