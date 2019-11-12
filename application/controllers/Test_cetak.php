<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test_cetak extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
    }

    function index()
    {
        $pdf = new FPDF('P', 'mm', 'A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(190, 7, 'DAFTAR TEST BARANG', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(20, 6, 'ID', 1, 0);
        $pdf->Cell(85, 6, 'NAMA BARANG', 1, 0);
        $pdf->Cell(20, 6, 'STOK', 1, 0);
        $pdf->Cell(35, 6, 'HARGA', 1, 0);
        $pdf->Cell(35, 6, 'LAST UPDATE', 1, 1);
        $pdf->SetFont('Arial', '', 10);

        // $product = $this->Mproduct->getAll();
        // foreach ($product->result() as $row) {
        //     $pdf->Cell(20, 6, $row->idbarang, 1, 0);
        //     $pdf->Cell(85, 6, $row->nama_barang, 1, 0);
        //     $pdf->Cell(20, 6, $row->stok, 1, 0);
        //     $pdf->Cell(35, 6, $row->harga, 1, 0);
        //     $pdf->Cell(35, 6, $row->last_update, 1, 1);
        // }
        $pdf->Output();
    }
}
