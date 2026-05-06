<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat_model extends CI_Model {

    public function get_all_obat() {
        $this->db->select('tbl_obat.*, tbl_distributor.nama_dist, tbl_kategori.nama_kat, tbl_petugas.username');
        $this->db->from('tbl_obat');
        $this->db->join('tbl_distributor', 'tbl_distributor.id_dist = tbl_obat.id_dist', 'left');
        $this->db->join('tbl_kategori', 'tbl_kategori.id_kat = tbl_obat.id_kat', 'left');
        $this->db->join('tbl_petugas', 'tbl_petugas.id_pet = tbl_obat.id_pet', 'left');
        return $this->db->get()->result_array();
    }

    public function tambah($data) {
        return $this->db->insert('tbl_obat', $data);
    }

    public function get_by_id($id) {
        return $this->db->get_where('tbl_obat', ['kode_obat' => $id])->row_array();
    }

    public function update($id, $data) {
        $this->db->where('kode_obat', $id);
        return $this->db->update('tbl_obat', $data);
    }

    public function hapus($id) {
        $this->db->where('kode_obat', $id);
        return $this->db->delete('tbl_obat');
    }
}