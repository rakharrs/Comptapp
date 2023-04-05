<?php
class Balance extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('balancem');
    }

    public function index(){
        $data['content'] = 'operation/balance';
        $data['balance'] = $this->balancem->getBalance();
        $data['status'] = $this->balancem->getStatus();
        $this->load->view('template', $data);
    }
}