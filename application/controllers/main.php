<?php 
	/**
	* controller of web blog post
	*/
	defined('BASEPATH') OR exit('No direct script access allowed');

	class main extends CI_Controller
	{
		public function index()
		{
			$this->page();
		}

		public function get_post($id)
		{
			$this->load->model('mo_post');
			$data['result'] = $this->mo_post->get($id);
			$this->load->view('blog_ci/single',$data);

		}

		public function page($page=FALSE)
		{
			$per_page = 5;
			$this->load->library('pagination');
			$this->load->model('mo_post');
			$config['base_url'] = base_url('main/page');
			$config['total_rows'] = $this->mo_post->get_num_row();
			$config['per_page'] = $per_page;
			$this->pagination->initialize($config);

			echo $this->pagination->create_links();

			$this->load->model('mo_post');
			$data['result'] = $this->mo_post->get(FALSE,$per_page,$page);
			$this->load->view('blog_ci/index',$data);

		}
		
	}

?>