<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    public function cek_petugas($username)
    {
        return $this->db->get_where('tbl_petugas', ['username' => $username]);
    }

}