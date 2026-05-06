<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property Auth_model $Auth_model
 * @property CI_Session $session
 * @property CI_Input $input
 */
class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Auth_model');
    }

    public function index()
    {
        if($this->session->userdata('logged_in')){
            redirect('dashboard');
        }
        $this->load->view('auth/login');
    }

    public function proses_login()
    {
        $user = $this->input->post('username', TRUE);
        $pass = $this->input->post('password', TRUE);

        $ceki_db = $this->Auth_model->cek_petugas($user);

        if($ceki_db->num_rows() > 0){
            $user_data = $ceki_db->row_array();

            if(password_verify($pass, $user_data['password'])){

                $data_session = [
                    'id_petugas' => $user_data['id_pet'],
                    'username'   => $user_data['username'],
                    'level'      => $user_data['level'],
                    'logged_in'  => TRUE
                ];
        
                $this->session->set_userdata($data_session);
                redirect('dashboard'); 

            } else {
                $this->session->set_flashdata('gagal', 'Password salah!');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('gagal', 'Username tidak terdaftar!');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}