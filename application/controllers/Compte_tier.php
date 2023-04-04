<?php

class Compte_tier extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Compte_tier_model', 'ct');
		$this->load->model('Type_model', 'tc');
		$data = array();
	}

	function index(){
		$data['content']= 'consultation/compte_tier';
		$data['donnee']['title'] = 'Insertion compte tiers';
		$data['donnee']['type'] = $this->tc->getListType();
		$data['donnee']['lines'] = $this->ct->getListCompteTier();
		$this->load->view('body', $data);
	}

	function insert(){
		$idType = $this->input->post('type');
		$numero = $this->input->post('numero');
		$intitule = $this->input->post('intitule');
		$this->ct->insertCompteTier($idType, $numero, $intitule);
		redirect(base_url('compte_tier/liste'));
	}

	function liste(){
		$compte = $this->ct->getListCompteTier();
		$data['content'] = 'compte_tier/liste';
		$data['donnee']['title'] = 'Liste des comptes tiers';
		$data['donnee']['compte'] = $compte;
		$this->load->view('body', $data);
	}

	function delete($id){
		$this->ct->delete_compte_tier($id);
		redirect('compte_tier');
	}
	function modif($id){
		$compte = $this->ct->getCompteTierById($id);
		$data['content'] = 'compte_tier/modif';
		$data['donnee']['title'] = 'Modification compte tiers';
		$data['donnee']['compte'] = $compte;
		$data['donnee']['type'] = $this->tc->getListType();
		$this->load->view('body', $data);
	}
	function confirm(){
		$id = $this->input->post('id');
		$idType = $this->input->post('form_type');
		$code = $this->input->post('form_numero');
		$intitule = $this->input->post('form_intitule');
		$this->ct->update_compte_tier($id, $idType, $code, $intitule);
		// redirect(base_url('compte_tier/liste'));
		redirect('compte_tier');
	}
}
