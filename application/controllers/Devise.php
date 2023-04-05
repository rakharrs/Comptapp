<?php

class Devise extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Devise_model', 'dv');
		$this->load->model('Societe_model', 'st');
		$data = array();
	}

	function index(){
		$data['content']= 'devise/formulaire';
		$data['donnee']['title'] = 'Insertion devise';
		//$data['donnee']['societe'] = $this->st->get_all();  //session
		$this->load->view('body', $data);
		$this->liste();
	}
	function insert(){
		$idSociete = $this->session->userdata('id_societe'); //session
		$nom = $this->input->post('nom');
		$value = $this->input->post('value');
		$this->dv->save($idSociete, $nom, $value);
		redirect(base_url('devise/liste'));
	}
	function liste(){
		$id_societe = $this->session->userdata('id_societe'); //session
		$devise = $this->dv->get_devise_by_id_societe($id_societe);
		$data['content'] = 'devise/liste';
		$data['donnee']['title'] = 'Liste des devises';
		$data['donnee']['devise'] = $devise;
		$this->load->view('body', $data);
	}
	function delete($id){
		$this->dv->delete_devise($id);
		redirect(base_url('devise/liste'));
	}
	function modif($id){
		$devise = $this->dv->get_devise_by_id($id);
		$data['content'] = 'devise/modif';
		$data['donnee']['title'] = 'Modification devise';
		$data['donnee']['devise'] = $devise;
		$this->load->view('body', $data);
	}
	function confirm(){
		$id = $this->input->post('id');
		$nom = $this->input->post('nom');
		$value = $this->input->post('value');
		$this->dv->update($id, $nom, $value);
		redirect(base_url('devise/liste'));
	}
}
