<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Note');
		//$this->output->enable_profiler();
	}
	public function index_json()
	{
		$data['notes'] = $this->Note->all_notes();
		echo json_encode($data);
	}
	public function index_html()
	{
		$data['notes'] = $this->Note->all_notes();
		$this->load->view('partials/notes', $data);
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function create()
	{
		$new_note = $this->input->post();
		$this->Note->create_note($new_note);
		redirect(" ");
		
	// 	$data['notes'] = $this->Note->all_post();
	// 	$this->load->view('partials/notes', $data);
	}
	public function remove($id)
	{
		$this->Note->remove($id);
		redirect(" ");
	}
	public function update($id)
	{
		$this->Note->update($id);
		redirect(" ");
	}
}

//end of main controller