<?php 
/**
* 
*/
class mo_comment extends CI_Model
{
	public $table = 'comments';

	public function get_all()
	{
		$query = $this->db->get($this->table);
		$result = $query->result();
		return $result;
	}

	public function insert($title, $content)
	{
		$new_data = array('title'=>$title,'content'=>$content);
		$result = $this->db->insert($this->table,$new_data);
	}

	public function get($id)
	{	$condition = array('posts.id'=>$id);
		$query = $this->db->get_where($this->table,$condition);
		$result = $query->row();
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
		$condition = array('comments.id'=>$id);
		$this->db->where($condition);
		$this->db->delete($this->table);
	}
}
?>