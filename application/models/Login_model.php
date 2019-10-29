<?php
class Login_model extends CI_Model
{

    function validate($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get('user', 1);
    }
}
