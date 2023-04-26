<?php
class Journal extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('journalm');
    }
    
    public function index(){
        $data['content'] = 'operation/journal';
        $this->load->view('template',$data);
    }

    public function getJournal()
    {
        $test = $this->journalm->getJournal(2023,3);
        print_r($test);
    }
}
