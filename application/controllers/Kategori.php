<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property Kategori_model $Kategori_model
 * @property CI_Session $session
 * @property CI_Input $input
 */
class Kategori extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Kategori_model');
        if(!$this->session->userdata('logged_in')){
            redirect('auth');
        }
    }

    public function index() 
    {
        $data['judul'] = "Data Kategori";
        $data['kategori'] = $this->Kategori_model->get_all();
    
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('kategori/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {
        $data['judul'] = "Tambah Data Kategori";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('kategori/tambah');
        $this->load->view('templates/footer');
    }

    public function proses_tambah() {
        $data = [
            'id_kat' => $this->input->post('id_kat'),
            'nama_kat'    => $this->input->post('nama_kat')
        ];
        
        $this->Kategori_model->tambah($data);
        $this->session->set_flashdata('pesan', 'Data kategori berhasil ditambahkan!');
        redirect('kategori');
    }

    public function edit($id) {
        $data['judul'] = "Edit Data Kategori";
        $data['kategori'] = $this->Kategori_model->get_by_id($id);
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('kategori/edit', $data);
        $this->load->view('templates/footer');
    }

    public function proses_edit() {
        $id = $this->input->post('id_kat');
        $data = [
            'id_kat' => $this->input->post('id_kat'),
            'nama_kat'    => $this->input->post('nama_kat')
        ];
        $this->Kategori_model->update($id, $data);
        $this->session->set_flashdata('pesan', 'Data kategori berhasil diperbarui!');
        redirect('kategori');
    }

    public function hapus($id)
    {
        $this->Kategori_model->hapus($id);
    
        $this->session->set_flashdata('pesan', 'Data kategori berhasil dihapus!');
    
        redirect('kategori');
    }
}