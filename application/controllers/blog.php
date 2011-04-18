<?php

class Blog extends CI_Controller {
	
	// function Blog()
	// {
	// 	parent::constructor();
	// 	
	// }
	function index ()
	{
		$data['title'] = "My Blog Title";
		$data['heading'] = "My Blog Heading";
		$data['query'] = $this->db->get('entries');
		
		$this->load->view('blog_view', $data);
	}
	
}

?>