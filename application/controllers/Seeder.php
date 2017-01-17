<?php

class Seeder extends CI_Controller
{
	public function notes()
	{
		$title = "Hello note";
		$content = "This is description";
		$this->load->model('notes_model');

		for($i = 0; $i < 10; $i++)
		{
			$this->notes_model->addTestNote($title,$content);
		}
		
	}
}