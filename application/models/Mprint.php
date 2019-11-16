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

    function get_laba($date)
    {
        $sql = 'SELECT barang.idbarang, barang.nama_barang, barang.harga, jual.id_barang, jual.date_penjualan, jual.st_jual, beli.id_barang, beli.date_pembelian, beli.st_beli FROM barang
        LEFT JOIN (SELECT id_barang, date_penjualan, SUM(stock_penjualan) as st_jual from penjualan where date_penjualan like ? group by id_barang) jual on barang.idbarang=jual.id_barang
        LEFT JOIN (SELECT id_barang, date_pembelian, SUM(stock_pembelian) as st_beli from pembelian where date_pembelian like ? group by id_barang) beli on barang.idbarang=beli.id_barang';
        return $this->db->query($sql, array($date . '%', $date . '%'));
    }
}
