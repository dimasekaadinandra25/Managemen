<?php
class Mawal extends CI_Model
{
    public function getData($limit, $start)
    {
        return $this->db->get('barang', $limit, $start);
    }

    public function get_search($keyword, $limit, $start)
    {
        $this->db->like('nama_barang', $keyword);
        return $this->db->get('barang', $limit, $start);
    }

    public function get_search_count($keyword)
    {
        $this->db->like('nama_barang', $keyword);
        return $this->db->get('barang');
    }
}
