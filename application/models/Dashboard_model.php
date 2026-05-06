<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

    public function hitung_jumlah($tabel)
    {
        return $this->db->count_all($tabel);
    }
}