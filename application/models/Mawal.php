<?php
class Mawal extends CI_Model
{
    public function getData($limit, $start)
    {
        return $this->db->get('barang', $limit, $start);
    }

    public function getAll()
    {
        return $this->db->get('barang');
    }
}
