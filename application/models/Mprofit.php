<?php
class Mprofit extends CI_Model
{
    public function addDataPenjualan($data)
    {
        $this->db->insert('penjualan', $data);
    }

    public function addDataPembelian($data)
    {
        $this->db->insert('pembelian', $data);
    }
}
