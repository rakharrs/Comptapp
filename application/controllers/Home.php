<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class  Home extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('societe');
        $this->load->library('form_validation');
        $this->load->library('upload');
        $data = array();
    }
    public function index(){
        $data['societe'] = $_SESSION['societe'];
        $data['content'] = 'home/home';
        $this->load->view('template', $data);
    }

}