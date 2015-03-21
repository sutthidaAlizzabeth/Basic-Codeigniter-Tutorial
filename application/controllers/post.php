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
			$query = $this->db->get('posts');
			$result = $query->result();
			$data['result'] = $result;
			$this->load->view('post',$data);

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
			if($id)
			{
				$condition = array('posts.id'=>$id);
				//$this->db->where($condition);
				//$query = $this->db->get('posts');
				$query = $this->db->get_where('posts',$condition);
				$result = $query->result();
				var_dump($result);
			}
			else
			{
				echo "no id";
			}
		}

		public function create()
		{
			$this->load->view('form_post');
		}

		public function  insert()
		{
			$title = $this->input->post('title');
			$content = $this->input->post('content');
			$new_data = array('title'=>$title,'content'=>$content);
			$this->db->insert('posts',$new_data);
			redirect(base_url('post'));
		}

		public function edit($id)
		{
			$condition = array('posts.id'=>$id);
			$query = $this->db->get_where('posts',$condition);
			$result = $query->row();
			$data['row'] = $result;
			$this->load->view('update',$data);
		}

		public function  update()
		{
			$id = $this->input->post('id');
			$title = $this->input->post('title');
			$content = $this->input->post('content');
			$new_data = array('title'=>$title,'content'=>$content);
			$condition = array('posts.id'=>$id);
			$this->db->where($condition);
			$this->db->update('posts',$new_data);
			redirect(base_url('post'));
		}

		public function  delete($id)
		{
			$condition = array('posts.id'=>$id);
			$this->db->where($condition);
			$this->db->delete('posts');
			redirect(base_url('post'));
		}


	}

?>