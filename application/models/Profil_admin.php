<?php
class Profil_admin extends CI_Model
{
    public function update_data($table, $data, $where)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
