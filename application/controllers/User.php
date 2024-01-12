<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_model'); // Sesuaikan dengan nama model yang sebenarnya
        $this->load->helper('my_helper');
        if ($this->session->userdata('loged_in') != true || $this->session->userdata('role') != 'user') {
            redirect(base_url() . 'auth/login');
        }
    }
    public function dashboard_u()
    {
        $data['admin'] = $this->m_model->get_data('admin')->num_rows();
        $data['user'] = $this->m_model->get_data('user')->result();
        $this->load->view('user/dashboard_u', $data);
    }

    
    public function tabel_siswa()
    {
        $data['user'] = $this->m_model->get_data('user')->result();
        $this->load->view('user/tabel_siswa', $data);
    }
    public function data_lengkap($id)
    {
        $data['user'] = $this->m_model->get_by_id('user', 'id', $id)->row_array();
        $this->load->view('user/data_lengkap', $data);
    }

    public function aksi_data_lengkap()
    {
        $data = array(
            'nama_siswa' => $this->input->post('nama'),
            'nisn' => $this->input->post('nisn'),
            'gender' => $this->input->post('gender'),
            'ttl' => $this->input->post('ttl'),
            'nilai_akhir' => $this->input->post('nilai'),
        );

        $eksekusi = $this->m_model->ubah_data('user', $data, array('id' => $this->input->post('id')));
        if ($eksekusi) {
            $this->session->set_flashdata('sukses', 'berhasil');
            redirect(base_url('user/data_lengkap'));
        } else {
            $this->session->set_flashdata('error', 'gagal..');
            redirect(base_url('user/data_lengkap/' . $this->input->post('id')));
        }
    }

    public function edit_data($id)
    {
        $data['user'] = $this->m_model->get_by_id('user', 'id', $id)->result();
        $this->load->view('user/edit_data', $data);
    }
}
