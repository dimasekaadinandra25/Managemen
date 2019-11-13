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
}
