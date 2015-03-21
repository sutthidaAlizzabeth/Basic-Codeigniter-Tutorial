<?php 
	/**
	* controller of web blog post
	*/
	defined('BASEPATH') OR exit('No direct script access allowed');

	class post extends CI_Controller
	{		
		public function  index()
		{
			$data['post_id'] = '1';
			$data['title'] = 'Good Memory';
			$this->load->view('main',$data);
			
		}

		public function  insert()
		{

		}

		public function  update()
		{

		}

		public function  delete()
		{

		}


	}

?>