<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Graphic extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mproduct');
        $this->load->model('Mprint');
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
    }

    public function index()
    {
        $prev = prev1_month();
        $data['prev_penjualan'] = $this->Mprint->get_penjualan($prev);
        $data['prev_pembelian'] = $this->Mprint->get_pembelian($prev);
        $data['total_barang'] = $this->Mproduct->getAll();
        $data['month_pembelian'] = $this->bulan_pembelian(month());
        $data['prev1_pembelian'] = $this->bulan_pembelian(prev1_month());
        $data['prev2_pembelian'] = $this->bulan_pembelian(prev2_month());
        $data['prev3_pembelian'] = $this->bulan_pembelian(prev3_month());
        $data['prev4_pembelian'] = $this->bulan_pembelian(prev4_month());
        $data['month_penjualan'] = $this->bulan_penjualan(month());
        $data['prev1_penjualan'] = $this->bulan_penjualan(prev1_month());
        $data['prev2_penjualan'] = $this->bulan_penjualan(prev2_month());
        $data['prev3_penjualan'] = $this->bulan_penjualan(prev3_month());
        $data['prev4_penjualan'] = $this->bulan_penjualan(prev4_month());
        $this->load->view('header');
        $this->load->view('content/grafik', $data);
        $this->load->view('footer');
    }

    public function bulan_penjualan($month)
    {
        $total = 0;
        $total_all = 0;
        $data = $this->Mprint->get_penjualan($month);
        foreach ($data->result() as $data_penjualan) {
            $total = $data_penjualan->stock_penjualan * $data_penjualan->harga_jual_pcs;
            $total_all = $total_all + $total;
        }
        return $total_all;
    }

    public function bulan_pembelian($month)
    {
        $total = 0;
        $total_all = 0;
        $data = $this->Mprint->get_pembelian($month);
        foreach ($data->result() as $data_pembelian) {
            $total = $data_pembelian->stock_pembelian * $data_pembelian->harga_beli_pcs;
            $total_all = $total_all + $total;
        }
        return $total_all;
    }
}
