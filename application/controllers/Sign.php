<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sign extends CI_Controller
{
    public function index(){
        $this->load->view('login');
    }

    public function signup(){
        $this->load->view('/sign/signup');
    }

    public function logout(){
        $this->session->unset_userdata("utilisateur");
        redirect("sign/login");
    }


}