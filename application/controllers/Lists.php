<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lists extends CI_Controller
{

    public function index() 
    {
        $data['title'] = 'List';
        
        $this->load->view('templates/header', $data);
        $this->load->view('list');
        $this->load->view('templates/footer');
    }

}