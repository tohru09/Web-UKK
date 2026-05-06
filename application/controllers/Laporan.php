<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * @property CI_Session $session
 * @property CI_Input $input
 * @property CI_Db $db
 */
class Laporan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){
            redirect('auth');
        }
    }

    public function index() 
    {
        $data['judul'] = "Laporan Stok Obat";
    
        $tgl_mulai = $this->input->get('tgl_mulai');
        $tgl_selesai = $this->input->get('tgl_selesai');

        if (!empty($tgl_mulai) && !empty($tgl_selesai)) {
            $sql = "SELECT o.*, k.nama_kat, d.nama_dist 
                    FROM tbl_obat o
                    JOIN tbl_kategori k ON o.id_kat = k.id_kat
                    JOIN tbl_distributor d ON o.id_dist = d.id_dist
                    WHERE o.masa_expire BETWEEN '$tgl_mulai' AND '$tgl_selesai'";
        
            $data['obat'] = $this->db->query($sql)->result_array();
            $data['status_laporan'] = "Menampilkan Data Kadaluarsa: " . date('d/m/Y', strtotime($tgl_mulai)) . " s/d " . date('d/m/Y', strtotime($tgl_selesai));
        } else {
            $data['obat'] = []; 
            $data['status_laporan'] = "Silakan pilih rentang tanggal kadaluarsa untuk menampilkan data.";
        }

        $data['tgl_mulai'] = $tgl_mulai;
        $data['tgl_selesai'] = $tgl_selesai;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('laporan/index', $data);
        $this->load->view('templates/footer');
    }

    public function obat() {
        $data['judul'] = "Laporan Stok Obat";
        $data['obat'] = $this->db->query("SELECT tbl_obat.*, tbl_kategori.nama_kat, tbl_distributor.nama_dist 
                                        FROM tbl_obat 
                                        JOIN tbl_kategori ON tbl_obat.id_kat = tbl_kategori.id_kat
                                        JOIN tbl_distributor ON tbl_obat.id_dist = tbl_distributor.id_dist")->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('laporan/obat', $data);
        $this->load->view('templates/footer');
    }

    public function cetak_obat() 
    {
        $tgl_mulai = $this->input->get('tgl_mulai');
        $tgl_selesai = $this->input->get('tgl_selesai');

        $sql = "SELECT o.*, k.nama_kat, d.nama_dist 
                FROM tbl_obat o
                JOIN tbl_kategori k ON o.id_kat = k.id_kat
                JOIN tbl_distributor d ON o.id_dist = d.id_dist";

        if (!empty($tgl_mulai) && !empty($tgl_selesai)) {
            $sql .= " WHERE o.masa_expire BETWEEN '$tgl_mulai' AND '$tgl_selesai'";
        }
    
        $data['obat'] = $this->db->query($sql)->result_array();
        $this->load->view('laporan/cetak_obat', $data);
    }
}