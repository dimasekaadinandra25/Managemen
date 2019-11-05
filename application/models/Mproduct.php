<?php
class Mproduct extends CI_Model
{
    public function addData($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function getData($limit, $start)
    {
        return $this->db->get('barang', $limit, $start);
    }

    public function editData($data, $where)
    {
        $this->db->where($where);
        $this->db->update('barang', $data);
    }
}
