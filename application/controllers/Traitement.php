<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Traitement extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('societe');
    }

    public function login(){
        if(isset($_POST['email'], $_POST['password'])){
            $email = $_POST['email']; $password = $_POST['password'];
            $login = $this->utilisateur_model->checkLogin($email, $password);
            if($login != false){
                $_SESSION['utilisateur'] = $login;
                echo json_encode(0);
            }else echo json_encode(1);
        }else {
            echo "misy blem";
            echo json_encode(1);
        }
    }

    public function log_in(){
        if(isset($_POST['email'], $_POST['password'])){
            $email = $_POST['email']; $password = $_POST['password'];
            $login = $this->societe->login($email,$password);
            if($login!=false){
                $_SESSION['societe'] = $login;
                echo json_encode($login);
                redirect('home');
            }else{
                redirect('index.php/sign/');
            }
        }

    }

}