<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('societe');
        $this->load->library('form_validation');
        $this->load->library('upload');
    }

	public function index()
	{
		$this->load->view('formulaire/inserting');
	}

    public function redirect_login(){
        $this->load->view('login');
    }
    public function insert(){
        #$this->form_validation->set_rules('name','','required');
        #if ($this->form_validation->run() == FALSE) {
        #   echo "tatu";
        #}
        $this->initConfig();
        $name = $_POST['name'];$email = $_POST['email'];$password = $_POST['pwd'];
        $creation =$_POST['creationDate'];$founder=$_POST['founder'];$headquarter = $_POST['headquarters'];
        $nif=$_POST['nif'];$stat_num=$_POST['stat_num'];$fax = $_POST['fax'];
        $phone=$_POST['phone'];$status=$_FILES['status'];$nif_path = $_FILES['nif_path'];
        $description=$_POST['description'];
        $this->upload('status');
        if(!strcmp($nif_path['name'],'')==0){
            $this->upload('nif_path');
            $nif_path = realpath($nif_path['name']['tmp_name']);
        }else{
            $nif_path = null;
        }
        $this->societe->insert($name,$email,$password,$creation,$founder,$headquarter,
            $nif,$stat_num,$fax,$phone,$status['name'],$nif_path,$description);
        redirect('index.php/sign/login');
    }


    private function initConfig(){
        $config['upload_path'] = 'assets/data';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['max_size'] = 1000;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        $this->upload->initialize($config);
    }

    public function upload($config){
        if ($this->upload->do_upload($config)) {
            $data = $this->upload->data();
            echo "nety";
        } else {
            $error = $this->upload->display_errors();
            echo $error;
        }
    }

}