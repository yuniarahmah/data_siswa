<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_model'); // Sesuaikan dengan nama model yang sebenarnya
    }
    public function login()
    {
        $this->load->view('auth/login');
    }

    public function fungsi_login()
    {
        $email = $this->input->post('email', true);
        $password = $this->input->post('password', true);
        // $sekolah = $this->input->post('sekolah', true);
        $data = ['email' => $email,];
        $query = $this->M_model->getwhere('admin', $data);
        $result = $query->row_array();

        if (!empty($result) && md5($password) === $result['password']) {
            $data = [
                'loged_in' => TRUE,
                'email'    => $result['email'],
                'username' => $result['username'],
                'role'     => $result['role'],
                'id'       => $result['id'],
                'last_activity' => time(), // Menambahkan waktu terakhir akses
            ];
            $this->session->set_userdata($data);
            if ($this->session->userdata('role') == 'admin') { // jika role admin maka yang akan ditampilkan setelah lohin adalah dashboard admin
                redirect(base_url() . 'admin/dashboard');
            }
            if ($this->session->userdata('role') == 'user') { //jika rolenya adalah karyawan maka yang akan ditampilkan setelah login adalah history karyawan
                redirect(base_url() . 'user/dashboard_u');
            } else {
                redirect(base_url() . ' auth/login');
            }
        } else {
            redirect(base_url() . 'auth/login');
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('auth/login'));
    }

    public function register()
    {
        $this->load->view('auth/register');
    }

    public function aksi_register()
    {
        $email = $this->input->post('email', true);
        $data = ['email' => $email];
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $role = $this->input->post('admin');
        // $result = $query->row_array();
        if (empty($result)) {
            if (strlen($password) < 8) { //jika password kurang dari 8 angka maka tidak bisa menjalankan register
                $this->session->set_flashdata('error_password', 'gagal...');
                redirect(base_url('auth/register'));
            } else {
                $data = [
                    'email' => $this->input->post('email'),
                    'username' => $this->input->post('username'),
                    'password' => md5($this->input->post('password')),
                    'nama_lengkap' => $this->input->post('nama_lengkap'),
                    'role' => 'admin',

                ];
                $this->M_model->register($data);
                $this->session->set_flashdata('succsess', 'berhasil...');
                redirect(base_url('auth/login'));
            }
        } else {
            $this->session->set_flashdata('error_email', 'gagal...');
            redirect(base_url('auth/register'));
        }
    }

    // register user
    public function registeru()
    {
        $this->load->view('auth/registeru');
    }

    public function aksi_registeru()
    {
        $email = $this->input->post('email', true);
        $data = ['email' => $email];
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $role = $this->input->post('user');
        // $result = $query->row_array();
        if (empty($result)) {
            if (strlen($password) < 8) { //jika password kurang dari 8 angka maka tidak bisa menjalankan register
                $this->session->set_flashdata('error_password', 'gagal...');
                redirect(base_url('auth/registeru'));
            } else {
                $data = [
                    'email' => $this->input->post('email'),
                    'username' => $this->input->post('username'),
                    'password' => md5($this->input->post('password')),
                    'nama_lengkap' => $this->input->post('nama_lengkap'),
                    'role' => 'user',
                ];
                $this->M_model->register($data);
                $this->session->set_flashdata('succsess', 'berhasil...');
                redirect(base_url('auth/login'));
            }
        } else {
            $this->session->set_flashdata('error_email', 'gagal...');
            redirect(base_url('auth/registeru'));
        }
    }
}
