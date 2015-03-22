<?php 
	/**
	* controller of web blog post
	*/
	defined('BASEPATH') OR exit('No direct script access allowed');

	class main extends CI_Controller
	{
		public function index()
		{
			$this->load->model('mo_post');
			$data['result'] = $this->mo_post->get();
			$this->load->view('blog_ci/index',$data);
		}

		public function get_post($id)
		{
			$this->load->model('mo_post');
			$data['result'] = $this->mo_post->get($id);
			$this->load->view('blog_ci/single',$data);

		}
		
	}

?>