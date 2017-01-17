<?php

class Notes extends CI_Controller
{
	public function __construct() {
		parent::__construct();
	}

	public function index($n = 0)
	{

		$this->load->model('notes_model');
		
		$this->load->library('pagination');
		$config['base_url'] = base_url('notes/index');
		$config['total_rows'] = 200;
		$config['per_page'] = 10;
		$this->pagination->initialize($config);

		$start = $this->uri->segment(3) != 0 ? $this->uri->segment(3) : 0;
		$notes = $this->notes_model->getNotes($start);

		$this->load->view('layouts/header');
		$this->load->view('notes/dashboard', ['notes' => $notes]);
		$this->load->view('layouts/footer');
	}

	public function postnotes()
	{
		/*load model*/
		$this->load->model('notes_model');

		/*validation*/
		$this->load->library('form_validation');
		$this->form_validation->set_rules('notes_name','note name','required|min_length[5]|max_length[25]');
		$this->form_validation->set_rules('content','content','required|min_length[15]|max_length[60]');
		
		$this->notes_model->addnotes();
		$this->session->set_flashdata('alert','Note added successfully');
		redirect('notes');
		
	}

	public function addnotes() 
	{
		$this->load->view('layouts/header');
		$this->load->view('notes/addnotes'); 
		$this->load->view('layouts/footer');
	}

	public function deletenote($id)
	{
		$this->load->model('notes_model');
		$this->notes_model->delete_note($id);
		$this->session->set_flashdata('error','your notes has been deleted');
		redirect('notes');
	}

	public function editnote($id)
	{
		$this->load->model('notes_model');
		$this->notes_model->edite_note($id);
		$this->session->set_flashdata('alert','Accept change');
		redirect('notes');


	}

	public function edite($id)
	{
		$this->load->model('notes_model');
		$note = $this->notes_model->GetNoteById($id);

		$this->load->view('layouts/header');
		$this->load->view('notes/changenote', ['note' => $note]);
		$this->load->view('layouts/footer');
	}

	public function completed()
	{
		$this->load->model('notes_model');

		$notes = $this->notes_model->getNotesDone();
		$this->load->view('layouts/header');
		$this->load->view('notes/completenote', ['notes' => $notes]);
		$this->load->view('layouts/footer');
	}
	// make the note done
	public function done($id)
	{
		$this->load->model('notes_model');

		$this->notes_model->makeItDone($id);
		redirect('notes/completed');
	}

	public function undone($id)
	{
		$this->load->model('notes_model');

		$this->notes_model->makeItUnDone($id);
		redirect('notes');
	}

}