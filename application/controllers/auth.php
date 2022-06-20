<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['nama'] = '0';
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('layouts/header', $data);
            $this->load->view('login', $data);
            $this->load->view('layouts/footer');
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $nama=$this->input->post('nama');
        $password=$this->input->post('password');
        $user = $this->db->get_where('user', ['nama'=>$nama])->row_array();
        if ($user) {
            if (password_verify($password, $user['password']) or $user['password']==$password) {
                $data = [
                        'nama' => $user['nama'],
                        'user_id' => $user['user_id'],
                    ];
                $this->session->set_userdata($data);
                $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert" style="text-align:center">
            Berhasil Login </div>');
                redirect('home');
            } else {
                $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert" style="text-align:center">
                Password Salah </div>');
                redirect('http://localhost/tarewis1/auth');
            }
        } else {
            $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert" style="text-align:center">
            Email/Password Anda Salah </div>');
            redirect('http://localhost/tarewis1/auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('user_id');
        $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert" style="text-align:center">
            Berhasil Sign Out </div>');
        redirect('http://localhost/tarewis1/auth');
    }
}