<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_model'); // Pastikan model dimuat di sini
        $this->load->helper('my_helper');
        if ($this->session->userdata('loged_in') != true || $this->session->userdata('role') != 'admin') {
            redirect(base_url() . 'auth/login');
        }
    }

    public function dashboard()
    {
        $data['admin'] = $this->m_model->get_data('admin')->num_rows();
        $data['user'] = $this->m_model->get_data('user')->num_rows();
        $data['guru'] = $this->m_model->get_data('guru')->num_rows();
        $data['akademik'] = $this->m_model->get_data('akademik')->num_rows();
        $data['ekstra'] = $this->m_model->get_data('ekstra')->result();
        $this->load->view('admin/dashboard', $data);
    }

    public function tambah_siswa()
    {
        $data['user'] = $this->m_model->get_data('user', 'id')->result();
        $this->load->view('admin/tambah_siswa', $data);
    }
    public function aksi_tambah_siswa()
    {
        $data = [
            'nama_siswa' => $this->input->post('nama_siswa'),
            'nisn' => $this->input->post('nisn'),
            'gender' => $this->input->post('gender'),
            'ttl' => $this->input->post('ttl'),
            'nilai_a' => $this->input->post('nilai_a'),
            'nama_ayah' => $this->input->post('nama_ayah'),
            'nama_ibu' => $this->input->post('nama_ibu'),
            'alamat' => $this->input->post('alamat'),
        ];
        $this->m_model->tambah_data('user', $data);
        redirect(base_url('admin/tambah_siswa'));
    }

    public function hapus_siswa($id)
    {
        $this->m_model->delete('user', 'id', $id);
        redirect(base_url('admin/tambah_siswa'));
    }

    public function isi_ekstra()
    {
        $data['ekstra'] = $this->m_model->get_data('ekstra', 'id')->result();
        $this->load->view('admin/isi_ekstra', $data);
    }
    public function aksi_isi_ekstra()
    {
        $data = [
            'nama_siswa' => $this->input->post('nama_siswa'),
            'nisn' => $this->input->post('nisn'),
            'gender' => $this->input->post('gender'),
            'ttl' => $this->input->post('ttl'),
            'nilai_a' => $this->input->post('nilai_a'),
            'nama_ayah' => $this->input->post('nama_ayah'),
            'nama_ibu' => $this->input->post('nama_ibu'),
            'alamat' => $this->input->post('alamat'),
        ];
        $this->m_model->tambah_data('ekstra', $data);
        redirect(base_url('admin/isi_ekstra'));
    }

    public function tabel_data_lengkap()
    {
        $data['user'] = $this->m_model->get_data('user')->result();
        $data['guru'] = $this->m_model->get_data('guru')->result();
        $data['ekstra'] = $this->m_model->get_data('ekstra')->result();
        $data['akademik'] = $this->m_model->get_data('akademik')->result();
        $this->load->view('admin/tabel_data_lengkap', $data);
    }
}
