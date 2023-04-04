<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('utils');
	}

	public function index()
	{
		$ext = get_file_extension('test.csv');
		$data['ext'] = $ext;

		$this->load->view('welcome_message', $data);
	}

	/**
	 * @throws Exception
	 */
	public function ok(){
		$this->load->view('test');
	}

	public function display_cg(){
		$this->load->model('Compte_general_model');
		$data['lines'] = $this->Compte_general_model->get_all();
		$data['content'] = 'consultation/compte_general';
		$this->load->view('template', $data);
	}

	public function insert_cg(){
		$this->load->model('Compte_general_model');
		if(isset($_POST['numero'], $_POST['intitule']))
			$this->Compte_general_model->save($_POST['numero'], $_POST['intitule']);
		redirect('welcome/display_cg');
	}

	public function update_cg(){
		$this->load->model('Compte_general_model');
		if(isset($_POST['id_cg'],$_POST['numero'], $_POST['intitule']))
			$this->Compte_general_model->update($_POST['id_cg'],$_POST['numero'], $_POST['intitule']);
		redirect('welcome/display_cg');
	}

	public function delete_cg(){
		$this->load->model('Compte_general_model');
		if(isset($_GET['id_cg']))
			if($this->Compte_general_model->delete($_GET['id_cg']))
				redirect('welcome/display_cg?deleted');
		else redirect('welcome/display_cg?undeleted');
	}

	public function import_cg(){
		$this->load->model('Compte_general_model');
		$this->Compte_general_model->upload_insert($_FILES['file']);
		redirect('welcome/display_cg');
	}
}
