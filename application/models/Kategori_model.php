<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

    public function get_all() {
        return $this->db->get('tbl_kategori')->result_array();
    }

    public function get_by_id($id) {
        return $this->db->get_where('tbl_kategori', ['id_kat' => $id])->row_array();
    }

    public function tambah($data) {
        return $this->db->insert('tbl_kategori', $data);
    }

    public function update($id, $data) {
        $this->db->where('id_kat', $id);
        return $this->db->update('tbl_kategori', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id_kat', $id);
        return $this->db->delete('tbl_kategori');
    }
}