<?php
class notes_model extends CI_Model{
	private $content;
	private $notes_name;
	private $user_id;
	private  $id;
	private $table = 'notes';

	public function addTestNote($title,$content) {
		$this->user_id = $this->session->userdata('user_id');
		$this->db->set([
			'notes_name' => $title,
			'content' => $content,
			'user_id'	=> $this->user_id
		]); 	
		$this->db->insert($this->table);
	}

	public function addnotes()
	{
		$this->notes_name = $this->input->post('notes_name');
		$this->content = $this->input->post('content');
		$this->user_id = $this->session->userdata('user_id');
		$this->db->set([
			'notes_name' => $this->notes_name,
			'content' => $this->content,
			'user_id'	=> $this->user_id
		]); 	
		$this->db->insert($this->table);
	}

	public function getNotes()
	{
		$this->db->order_by('id DESC');
		$this->db->where('user_id',$this->session->userdata('user_id'));
		$this->db->where('done', 0);
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function getNotesDone()
	{
		$this->db->order_by('id DESC');
		$this->db->where('user_id',$this->session->userdata('user_id'));
		$this->db->where('done', 1);
		$query = $this->db->get($this->table);
		return $query->result();
	}
	public function GetNoteById($id)
	{
		$this->db->where('id',$id);
		$this->db->limit(1);
		$query = $this->db->get($this->table);
		return $query->row();
	}

	public function delete_note($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('notes');
		
	}
	public function edite_note($id)
	{
		$this->notes_name = $this->input->post('notes_name');
		$this->content = $this->input->post('content');

		$this->db->set([ 'notes_name' => $this->notes_name,
			'content' => $this->content
		]);
		$this->db->where('id',$id);
		$this->db->update('notes');
	}

	public function makeItDone($id)
	{
		$this->db->where('id', $id);
		$this->db->set([
			'done' => 1
		]);
		$this->db->update($this->table);
	}

	public function makeItUnDone($id)
	{
		$this->db->where('id', $id);
		$this->db->set([
			'done' => 0
		]);
		$this->db->update($this->table);
	}
}