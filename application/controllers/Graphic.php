<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Graphic extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mproduct');
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
    }
    public function index()
    {
        $data['total_barang'] = $this->Mproduct->getAll();
        $this->load->view('header');
        $this->load->view('content/grafik', $data);
        $this->load->view('footer');
    }
}
