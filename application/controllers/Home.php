<?php
// Controller
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('home');
    }

    public function tampil()
    {
        return $this->load->view('v_tampil');
    }
    
    public function coba()
    {
        return $this->load->view('test');
        
    }

    public function testing()
    {
        echo 'testing';
        
    }
}

/* End of file Home.php */
