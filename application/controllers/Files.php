<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Files extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('download');
        $this->load->library('upload');
    }
    public function download(){
        echo $_GET['path'];
        $path = FCPATH . 'assets/data/' . $_GET['path']; // Get the actual file path on the server
        $name = 'my-file.pdf';
        echo force_download($path, NULL, $name);
    }

    public function upload(){
        $config['upload_path'] = 'assets/data';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['max_size'] = 1000;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        $this->upload->initialize($config);
        if ($this->upload->do_upload('test')) {
            $data = $this->upload->data();
            echo "nety";
        } else {
            $error = $this->upload->display_errors();
            echo $error;
        }
    }
}