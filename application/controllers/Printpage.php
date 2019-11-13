<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Printpage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mprint');
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

    function data_penjualan()
    {
        $data_jual = $this->input->post('id');
        $data = $this->Mprint->get_penjualan($data_jual)->result();
        echo json_encode($data);
    }

    function data_pembelian()
    {
        $data_beli = $this->input->post('id');
        $data = $this->Mprint->get_pembelian($data_beli)->result();
        echo json_encode($data);
    }
}
