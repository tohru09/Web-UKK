<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Distributor_model extends CI_Model {

    public function get_all() {
        return $this->db->get('tbl_distributor')->result_array();
    }

    public function get_by_id($id) {
        return $this->db->get_where('tbl_distributor', ['id_dist' => $id])->row_array();
    }

    public function tambah($data) {
        return $this->db->insert('tbl_distributor', $data);
    }

    public function update($id, $data) {
        $this->db->where('id_dist', $id);
        return $this->db->update('tbl_distributor', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id_dist', $id);
        return $this->db->delete('tbl_distributor');
    }
}