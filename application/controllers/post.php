<?php 
	/**
	* controller of web blog post
	*/
	defined('BASEPATH') OR exit('No direct script access allowed');

	class post extends CI_Controller
	{		
		public function  index()
		{	/**
			* for normally
			*/
			// $sql = "select * from posts";
			// $query = $this->db->query($sql);
			// $result = $query->result();
			if ($this->session->userdata('is_admin') == 1) 
			{
				$this->load->model('mo_post');
				$data['result'] = $this->mo_post->get();
				$this->load->view('post',$data);
			}
			else
			{
				redirect('admin/view_login');
			}
			

			// $data['post_id'] = '1';
			// $data['title'] = 'Good Memory';
			// $this->load->view('main',$data);
			// $num1 = $this->input->post('num1');
			// $num2 = $this->input->post('num2');
			// if ($num1 != null && $num2 != null) {
				// $this->load->model('math');
				// echo $num1." + ".$num2." = ".$this->math->sum($num1,$num2)."<br/>";
				// echo $num1." x ".$num2." = ".$this->math->subtract($num1,$num2)."<br/>";
				// echo $num1." * ".$num2." = ".$this->math->multiple($num1,$num2)."<br/>";
				// echo $num1." / ".$num2." = ".$this->math->divide($num1,$num2);
			// }
			

		}

		public function get($id=FALSE)
		{
			if ($this->session->userdata('is_admin') == 1)
			{
				if($id)
				{
					$this->load->model('mo_post');
					$result = $this->mo_post->get($id);
					var_dump($result);
				}
				else
				{
					echo "no id";
				}
			}
			else
			{
				redirect('admin/view_login');
			}
			
		}

		public function create()
		{
			if ($this->session->userdata('is_admin') == 1)
			{
				$this->load->view('form_post');
			}
			else
			{
				redirect('admin/view_login');
			}
			
		}

		public function  insert()
		{
			if ($this->session->userdata('is_admin') == 1)
			{
				$title = $this->input->post('title');
				$content = $this->input->post('content');
				$this->load->model('mo_post');
				$this->mo_post->insert($title,$content);
				redirect(base_url('post'));	
			}
			else
			{
				redirect('admin/view_login');
			}
		}

		public function edit($id)
		{
			if ($this->session->userdata('is_admin') == 1)
			{
				$this->load->model('mo_post');
				$data['row'] = $this->mo_post->get($id);
				$this->load->view('update',$data);		}
			else
			{
				redirect('admin/view_login');
			}
		}

		public function  update()
		{
			if ($this->session->userdata('is_admin') == 1)
			{
				$id = $this->input->post('id');
				$title = $this->input->post('title');
				$content = $this->input->post('content');
				$this->load->model('mo_post');
				$this->mo_post->update($id, $title, $content);
				redirect(base_url('post'));
			}
			else
			{
				redirect('admin/view_login');
			}
		}

		public function  delete($id)
		{
			if ($this->session->userdata('is_admin') == 1)
			{
				$this->load->model('mo_post');
				$this->mo_post->delete($id);
				redirect(base_url('post'));
			}
			else
			{
				redirect('admin/view_login');
			}
			
		}


	}

?>