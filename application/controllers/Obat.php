<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * @property Obat_model $Obat_model
 * @property Distributor_model $Distributor_model
 * @property Kategori_model $Kategori_model
 * @property Petugas_model $Petugas_model
 * @property CI_Session $session
 * @property CI_Input $input
 */
class Obat extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(['Obat_model', 'Distributor_model', 'Kategori_model', 'Petugas_model']);
        
        if(!$this->session->userdata('logged_in')){
            redirect('auth');
        }
    }

    public function index() {
        $data['judul'] = "Data Obat";
        $data['obat'] = $this->Obat_model->get_all_obat(); 
    
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('obat/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {
        $data['judul'] = "Tambah Obat";
        $data['distributor'] = $this->Distributor_model->get_all();
        $data['kategori'] = $this->Kategori_model->get_all();
        $data['petugas'] = $this->Petugas_model->get_all();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('obat/tambah', $data);
        $this->load->view('templates/footer');
    }

    public function proses_tambah() {
        $data = 
        [
            'kode_obat'   => $this->input->post('kode_obat'),
            'id_dist'     => $this->input->post('id_dist'),
            'id_kat'      => $this->input->post('id_kat'),
            'id_pet'      => $this->input->post('id_pet'),
            'nama_obat'   => $this->input->post('nama_obat'),
            'masa_expire' => $this->input->post('masa_expire'),
            'harga'       => $this->input->post('harga'),
            'jumlah'      => $this->input->post('jumlah')
        ];
        $this->Obat_model->tambah($data);
        $this->session->set_flashdata('pesan', 'Obat berhasil ditambahkan!');
        redirect('obat');
    }

    public function edit($id) {
        $data['judul'] = "Edit Data Obat";
        $data['obat'] = $this->Obat_model->get_by_id($id);
        $data['distributor'] = $this->Distributor_model->get_all();
        $data['kategori'] = $this->Kategori_model->get_all();
        $data['petugas'] = $this->Petugas_model->get_all();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('obat/edit', $data);
        $this->load->view('templates/footer');
    }

    public function proses_edit() {
        $kode_obat = $this->input->post('kode_obat');
        $data = [
            'id_dist'     => $this->input->post('id_dist'),
            'id_kat'      => $this->input->post('id_kat'),
            'id_pet'      => $this->input->post('id_pet'),
            'nama_obat'   => $this->input->post('nama_obat'),
            'masa_expire' => $this->input->post('masa_expire'),
            'harga'       => $this->input->post('harga'),
            'jumlah'      => $this->input->post('jumlah')
        ];
        
        $this->Obat_model->update($kode_obat, $data);
        $this->session->set_flashdata('pesan', 'Data obat berhasil diperbarui!');
        redirect('obat');
    }

    public function hapus($id) {
        $this->Obat_model->hapus($id);
        $this->session->set_flashdata('pesan', 'Data obat berhasil dihapus!');
        redirect('obat');
    }

}