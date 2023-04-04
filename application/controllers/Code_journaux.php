<?php

class Code_journaux extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Code_journaux_model', 'cj');
		$data = array();
	}
	function index(){
		$data['content']= 'code_journaux/formulaire';
		$data['donnee']['title'] = 'Insertion code journal';
		$this->load->view('body', $data);
	}

	function insert(){
		$code = $this->input->post('code');
		$intitule = $this->input->post('intitule');
		$this->cj->insert_code_journaux($code, $intitule);
		redirect(base_url('code_journaux/liste'));
	}

	function liste(){
		$code = $this->cj->get_all();
		$data['content'] = 'code_journaux/liste';
		$data['donnee']['title'] = 'Liste des codes journaux';
		$data['donnee']['code'] = $code;
		$this->load->view('body', $data);
	}
	function delete($id){
		$this->cj->delete_code_journaux($id);
		redirect(base_url('code_journaux/liste'));
	}
	function modif($id){
		$code = $this->cj->get_code_journaux_by_id($id);
		$data['content'] = 'code_journaux/modif';
		$data['donnee']['title'] = 'Modification code journal';
		$data['donnee']['code'] = $code;
		$this->load->view('body', $data);
	}
	function confirm(){
		$id = $this->input->post('id');
		$code = $this->input->post('code');
		$intitule = $this->input->post('intitule');
		$this->cj->update_code_journaux($id, $code, $intitule);
		redirect(base_url('code_journaux/liste'));
	}
}
