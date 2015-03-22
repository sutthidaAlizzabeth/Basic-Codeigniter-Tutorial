<?php 
/**
* 
*/
class comment extends CI_Controller
{
	
	public function index()
	{
		$this->load->model('mo_comment');
		$data = $this->mo_comment->get_all();
		$this->load->veiw('', $data);
	}

	public function insert()
	{
		
	}

	public function delete()
	{
		# code...
	}
}
 ?>