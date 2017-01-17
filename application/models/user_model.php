<?php
class User_model extends CI_Model {

	private $user_name;
	private $user_pass;
	private $user_fullname;
	private $table = 'users';

	public function insert()
	{
		$this->user_name = $this->input->post('user_name');
		$this->user_fullname = $this->input->post('user_fullname');
		$this->user_pass = md5($this->input->post('user_pass')); 

		$this->db->set([
			'user_name'	=> $this->user_name,
			'user_fullname'	=> $this->user_fullname,
			'user_pass'	=> $this->user_pass
		]);
		$this->db->insert($this->table);
	}

	public function getUserByName($username) {
		$this->db->where('user_name', $username);
		$this->db->limit(1);
		$query = $this->db->get($this->table);
		return $query->row();
	}

	public function getLogin()
	{
		$this->user_name = $this->input->post('username');
		$this->user_pass = md5($this->input->post('password'));
		$this->db->where('user_name', $this->user_name);
		$this->db->where('user_pass', $this->user_pass);
		$this->db->limit(1);
		$query = $this->db->get($this->table);
		return $query->row();
	}

}
?>