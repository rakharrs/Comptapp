<?php

class Operation extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Code_journaux_model', 'cj');
		$this->load->model('Compte_tier_model', 'ct');
		$this->load->model('Operation_model', 'op');
		$this->load->model('Compte_general_model', 'cg');
		$data = array();
	}
	public function index(){
		$data['content'] = 'operation/formulaire';
		$data['donnee']['title'] = 'Insertion operation';
		$data['donnee']['code'] = $this->cj->get_all();
		$data['donnee']['compte_general'] = $this->cg->get_all();
		$data['donnee']['compte_tier'] = $this->ct->getListCompteTier();
		$this->load->view('body', $data);
	}
	public function insert(){
		$date = $this->input->post('date');
		$libelle = $this->input->post('libelle');
		$numero_piece = $this->input->post('numero_piece');
		$compte_tiere = $this->input->post('compte_tiere');
		$numero_compte = $this->input->post('numero_compte');
		$code_journal = $this->input->post('code_journal');
		$debit = $this->input->post('debit');
		$credit = $this->input->post('credit');
		$this->op->insert_operation($libelle, $numero_piece, $compte_tiere, $numero_compte,$code_journal,$debit, $credit, $date);
		redirect(base_url('operation/liste'));
	}
	public function liste(){
		$data = array();
		$data['lines'] = $this->op->get_all();
		$data['donnee']['title'] = 'Insertion operation';
		$data['donnee']['code'] = $this->cj->get_all();
		$data['donnee']['compte_general'] = $this->cg->get_all();
		$data['donnee']['compte_tier'] = $this->ct->getListCompteTier();
		$data['content'] = 'consultation/operation';
		$this->load->view('body', $data);
	}
}
