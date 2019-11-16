<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Print_data extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mprint');
        $this->load->library('pdf');
    }

    function index()
    {
        $type = $this->input->post('type');
        $data_bulan = $this->input->post('data_bulan');
        $count = 1;
        $total = 0;
        $total_all = 0;
        $total_all_pembelian = 0;
        $total_all_penjualan = 0;
        $total_laba = 0;
        if ($type == 'penjualan') {
            $pdf = new FPDF('P', 'mm', 'A4');
            $pdf->AddPage();
            $pdf->SetFont('Arial', 'B', 16);
            $image = "pp.png";
            $pdf->Image('assets/img/background/' . $image, 10, 10, -400);
            $pdf->Cell(190, 7, 'DAFTAR PENJUALAN', 0, 1, 'C');
            $pdf->SetFont('Arial', 'B', 11);
            $pdf->Cell(190, 7, 'TOKO BUNGA CENGKEH', 0, 1, 'C');
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(190, 7, date_now(), 0, 0, 'R');
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(20, 6, 'NO', 1, 0);
            $pdf->Cell(40, 6, 'BULAN', 1, 0);
            $pdf->Cell(60, 6, 'PRODUCTS', 1, 0);
            $pdf->Cell(25, 6, 'STOCK', 1, 0);
            $pdf->Cell(45, 6, 'VALUE', 1, 1);
            $pdf->SetFont('Arial', '', 10);
            $data = $this->Mprint->get_penjualan($data_bulan);
            foreach ($data->result() as $data_penjualan) {
                $total = $data_penjualan->stock_penjualan * $data_penjualan->harga;
                $total_all = $total_all + $total;
                $pdf->Cell(20, 6, $count++, 1, 0);
                $pdf->Cell(40, 6, $data_penjualan->date_penjualan, 1, 0);
                $pdf->Cell(60, 6, $data_penjualan->nama_barang, 1, 0);
                $pdf->Cell(25, 6, $data_penjualan->stock_penjualan, 1, 0);
                $pdf->Cell(45, 6, $this->rupiah($total), 1, 1);
            }
            $pdf->Cell(145, 5, 'TOTAL', 1, 0);
            $pdf->Cell(45, 5, $this->rupiah($total_all), 1, 0);
            $pdf->Output();
        } else if ($type == 'pembelian') {
            $pdf = new FPDF('P', 'mm', 'A4');
            $pdf->AddPage();
            $pdf->SetFont('Arial', 'B', 16);
            $image = "pp.png";
            $pdf->Image('assets/img/background/' . $image, 10, 10, -400);
            $pdf->Cell(190, 7, 'DAFTAR PEMBELIAN', 0, 1, 'C');
            $pdf->SetFont('Arial', 'B', 11);
            $pdf->Cell(190, 7, 'TOKO BUNGA CENGKEH', 0, 1, 'C');
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(190, 7, date_now(), 0, 0, 'R');
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(20, 6, 'NO', 1, 0);
            $pdf->Cell(40, 6, 'BULAN', 1, 0);
            $pdf->Cell(60, 6, 'PRODUCTS', 1, 0);
            $pdf->Cell(25, 6, 'STOCK', 1, 0);
            $pdf->Cell(45, 6, 'VALUE', 1, 1);
            $pdf->SetFont('Arial', '', 10);
            $data = $this->Mprint->get_pembelian($data_bulan);
            foreach ($data->result() as $data_pembelian) {
                $total = $data_pembelian->stock_pembelian * $data_pembelian->harga;
                $total_all = $total_all + $total;
                $pdf->Cell(20, 6, $count++, 1, 0);
                $pdf->Cell(40, 6, $data_pembelian->date_pembelian, 1, 0);
                $pdf->Cell(60, 6, $data_pembelian->nama_barang, 1, 0);
                $pdf->Cell(25, 6, $data_pembelian->stock_pembelian, 1, 0);
                $pdf->Cell(45, 6, $this->rupiah($total), 1, 1);
            }
            $pdf->Cell(145, 5, 'TOTAL', 1, 0);
            $pdf->Cell(45, 5, $this->rupiah($total_all), 1, 0);
            $pdf->Output();
        } else if ($type == 'laba') {
            $pdf = new FPDF('P', 'mm', 'A4');
            $pdf->AddPage();
            $pdf->SetFont('Arial', 'B', 16);
            $image = "pp.png";
            $pdf->Image('assets/img/background/' . $image, 10, 10, -400);
            $pdf->Cell(190, 7, 'DAFTAR LABA', 0, 1, 'C');
            $pdf->SetFont('Arial', 'B', 11);
            $pdf->Cell(190, 7, 'TOKO BUNGA CENGKEH', 0, 1, 'C');
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(190, 7, date_now(), 0, 0, 'R');
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->Cell(20, 6, 'NO', 1, 0);
            $pdf->Cell(60, 6, 'PRODUCTS', 1, 0);
            $pdf->Cell(55, 6, 'PENJUALAN', 1, 0);
            $pdf->Cell(55, 6, 'PEMBELIAN', 1, 1);
            $pdf->SetFont('Arial', '', 10);
            $data = $this->Mprint->get_laba($data_bulan);
            foreach ($data->result() as $data_laba) {
                $total_pembelian = $data_laba->st_beli * $data_laba->harga;
                $total_penjualan = $data_laba->st_jual * $data_laba->harga;
                $total_all_pembelian = $total_all_pembelian + $total_pembelian;
                $total_all_penjualan = $total_all_penjualan + $total_penjualan;
                $pdf->Cell(20, 6, $count++, 1, 0);
                $pdf->Cell(60, 6, $data_laba->nama_barang, 1, 0);
                $pdf->Cell(55, 6, $this->rupiah($total_penjualan), 1, 0);
                $pdf->Cell(55, 6, $this->rupiah($total_pembelian), 1, 1);
            }
            $total_laba = $total_all_penjualan - $total_all_pembelian;
            $pdf->Cell(80, 5, 'TOTAL', 1, 0);
            $pdf->Cell(55, 5, $this->rupiah($total_all_penjualan), 1, 0);
            $pdf->Cell(55, 5, $this->rupiah($total_all_pembelian), 1, 1);
            if ($total_all_penjualan > $total_all_pembelian) {
                $pdf->Cell(80, 5, 'HASIL', 1, 0);
                $pdf->Cell(55, 5, 'UNTUNG', 1, 0);
                $pdf->Cell(55, 5, $this->rupiah($total_laba), 1, 1);
            } else {
                $pdf->Cell(80, 5, 'HASIL', 1, 0);
                $pdf->Cell(55, 5, 'RUGI', 1, 0);
                $pdf->Cell(55, 5, $this->rupiah($total_laba), 1, 1);
            }
            $pdf->Output();
        }
    }
    function rupiah($angka)
    {

        $hasil_rupiah = "Rp " . number_format($angka);
        return $hasil_rupiah;
    }
}
