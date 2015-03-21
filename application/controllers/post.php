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

		public function submit(){
			//echo "submit";
			$num1 = $this->input->post('num1');
			$num2 = $this->input->post('num2');
			echo $num1." + ".$num2." = ". ($num1+$num2);
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