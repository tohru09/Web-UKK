<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas_model extends CI_Model {

    public function get_all() {
        return $this->db->get('tbl_petugas')->result_array();
    }

    public function get_by_id($id) {
        return $this->db->get_where('tbl_petugas', ['id_pet' => $id])->row_array();
    }

    public function tambah($data) {
        return $this->db->insert('tbl_petugas', $data);
    }

    public function update($id, $data) {
        $this->db->where('id_pet', $id);
        return $this->db->update('tbl_petugas', $data);
    }

    public function hapus($id) {
        $this->db->where('id_pet', $id);
        return $this->db->delete('tbl_petugas');
    }
}