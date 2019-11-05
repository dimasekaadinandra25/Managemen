<?php
class Profil_admin extends CI_Model
{
    public function gambar($table, $data, $where)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function password($table, $data, $where)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
