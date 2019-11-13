<?php
class Mprint extends CI_Model
{
    function get_penjualan($date)
    {
        $this->db->select('*');
        $this->db->from('penjualan');
        $this->db->join('barang', 'barang.idbarang=penjualan.id_barang');
        $this->db->like('date_penjualan', $date);
        $this->db->order_by('date_penjualan', 'ASC');
        return $this->db->get();
    }

    function get_pembelian($date)
    {
        $this->db->select('*');
        $this->db->from('pembelian');
        $this->db->join('barang', 'barang.idbarang=pembelian.id_barang');
        $this->db->like('date_pembelian', $date);
        $this->db->order_by('date_pembelian', 'ASC');
        return $this->db->get();
    }
}
