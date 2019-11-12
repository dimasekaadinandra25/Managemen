<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Printpage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
    }
    public function index()
    {
        $this->load->view('header');
        $this->load->view('content/print');
        $this->load->view('footer');
    }
}
