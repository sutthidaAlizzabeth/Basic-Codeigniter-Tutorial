<?php 
/**
* 
*/
class mo_post extends CI_Model
{
	public $table = 'posts';

	public function insert($title, $content)
	{
		$new_data = array('title'=>$title,'content'=>$content);
		$this->db->insert($this->table,$new_data);
	}

	public function get($id = FALSE)
	{
		if($id)
		{
			$condition = array('posts.id'=>$id);
			$query = $this->db->get_where($this->table,$condition);
			$result = $query->row();
		}
		else
		{
			$query = $this->db->get($this->table);
			$result = $query->result();
		}
		
		return $result;
	}

	public function update($id, $title, $content)
	{
		$new_data = array('title'=>$title,'content'=>$content);
		$condition = array('posts.id'=>$id);
		$this->db->where($condition);
		$this->db->update($this->table,$new_data);

	}

	public function delete($id)
	{
		$condition = array('posts.id'=>$id);
		$this->db->where($condition);
		$this->db->delete($this->table);
	}
}
?>