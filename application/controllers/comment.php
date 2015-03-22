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

	public function delete($id)
	{
		$this->load->model('mo_comment');
		$this->mo_comment->delete($id);
		redirect(base_url('post'));
	}
}
 ?>