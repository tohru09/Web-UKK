<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property Petugas_model $Petugas_model
 * @property CI_Session $session
 * @property CI_Input $input
 */
class Petugas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Petugas_model');
        if(!$this->session->userdata('logged_in')){
            redirect('auth');
        }
    }

    public function index() {
        $data['judul'] = "Data Petugas";
        $data['petugas'] =$this->Petugas_model->get_all();
    
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('petugas/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {
        $data['judul'] = "Tambah Data Petugas";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('petugas/tambah');
        $this->load->view('templates/footer');
    }

    public function proses_tambah() {
        $data = [
            'username' => $this->input->post('username'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT), 
            'level'    => $this->input->post('level')
        ];
        
        $this->Petugas_model->tambah($data);
        $this->session->set_flashdata('pesan', 'Data petugas berhasil ditambahkan!');
        redirect('petugas');
    }

    public function edit($id) {
        $data['judul'] = "Edit Data Petugas";
        $data['petugas'] = $this->Petugas_model->get_by_id($id);
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('petugas/edit', $data);
        $this->load->view('templates/footer');
    }

    public function proses_edit() {
        $id = $this->input->post('id_pet');
        $password = $this->input->post('password');

        $data = [
            'username' => $this->input->post('username'),
            'level'    => $this->input->post('level')
        ];

        if (!empty($password)) {
            $data['password'] = password_hash($password, PASSWORD_DEFAULT);
        }

        $this->Petugas_model->update($id, $data);
        $this->session->set_flashdata('pesan', 'Data petugas berhasil diperbarui!');
        redirect('petugas');
    }

    public function hapus($id) {
        $this->Petugas_model->hapus($id);
        $this->session->set_flashdata('pesan', 'Data petugas berhasil dihapus!');
        redirect('petugas');
    }

    public function profil() {
        $data['judul'] = "Profil Saya";
        $id = $this->session->userdata('id_petugas');
        $data['user'] =$this->Petugas_model->get_by_id($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('petugas/profil', $data);
        $this->load->view('templates/footer');
    }
}