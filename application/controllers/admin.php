<?php 
	/**
	* 
	*/
	defined('BASEPATH') OR exit('No direct script access allowed');
	class admin extends CI_Controller
	{
		
		public  function view_login()
		{
			echo $this->session->userdata('username');
			$this->load->view('admin/login');
		}

		public function logout()
		{
			$this->session->sess_destroy();
			$this->load->view('admin/login');
		}

		public function login(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->load->model('mo_user');
			$user = $this->mo_user->login($username, $password);
			if($user)
			{
				$array = array(
					'username' => $username,
					'is_admin' => '1'
				);
				$this->session->set_userdata($array);
				redirect('post');
			}
			else
			{
				$this->session->set_flashdata('msg', 'username or password is incorrect.');
				redirect('admin/view_login');
			}
		}
	}

 ?>