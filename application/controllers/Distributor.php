<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property Distributor_model $Distributor_model
 * @property CI_Session $session
 * @property CI_Input $input
 */
class Distributor extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Distributor_model');
        if(!$this->session->userdata('logged_in')){
            redirect('auth');
        }
    }

    public function index() 
    {
        $data['judul'] = "Data Distributor";
        $data['distributor'] = $this->Distributor_model->get_all();
    
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('distributor/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {
        $data['judul'] = "Tambah Data Distributor";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('distributor/tambah');
        $this->load->view('templates/footer');
    }

    public function proses_tambah() {
        $data = [
            'nama_dist' => $this->input->post('nama_dist'),
            'alamat'    => $this->input->post('alamat'),
            'no_telp'   => $this->input->post('no_telp')
        ];
        
        $this->Distributor_model->tambah($data);
        $this->session->set_flashdata('pesan', 'Data distributor berhasil ditambahkan!');
        redirect('distributor');
    }

    public function edit($id) {
        $data['judul'] = "Edit Data Distributor";
        $data['distributor'] = $this->Distributor_model->get_by_id($id);
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('distributor/edit', $data);
        $this->load->view('templates/footer');
    }

    public function proses_edit() {
        $id = $this->input->post('id_dist');
        $data = [
            'nama_dist' => $this->input->post('nama_dist'),
            'alamat'    => $this->input->post('alamat'),
            'no_telp'   => $this->input->post('no_telp')
        ];
        $this->Distributor_model->update($id, $data);
        $this->session->set_flashdata('pesan', 'Data distributor berhasil diperbarui!');
        redirect('distributor');
    }

    public function hapus($id)
    {
        $this->Distributor_model->hapus($id);
    
        $this->session->set_flashdata('pesan', 'Data distributor berhasil dihapus!');
    
        redirect('distributor');
    }
}