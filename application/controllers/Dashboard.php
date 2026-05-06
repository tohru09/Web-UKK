<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property Dashboard_model $Dashboard_model
 * @property CI_Session $session
 * @property CI_Input $input
 */
class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Pastikan user sudah login
        if($this->session->userdata('logged_in') != TRUE){
            redirect('auth');
        }
        // Load Model
        $this->load->model('Dashboard_model');
    }

    public function index() {
        $data['judul'] = "Dashboard - Apotek Wildan";
    
        $data['total_obat'] = $this->Dashboard_model->hitung_jumlah('tbl_obat');
        $data['total_distributor'] = $this->Dashboard_model->hitung_jumlah('tbl_distributor');
        $data['total_kategori'] = $this->Dashboard_model->hitung_jumlah('tbl_kategori');

        $this->load->view('dashboard/index', $data);
    }
}