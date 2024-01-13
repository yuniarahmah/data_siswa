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
        $data['user'] = $this->m_model->get_by_id('user', 'id', $id)->result();
        $this->load->view('user/data_lengkap', $data);
    }

    public function aksi_data_lengkap($id)
    {
        $data = array(
            'nama_siswa' => $this->input->post('nama'),
            'nisn' => $this->input->post('nisn'),
            'gender' => $this->input->post('gender'),
            'ttl' => $this->input->post('ttl'),
            'nilai_a' => $this->input->post('nilai_a'),
        );

        $eksekusi = $this->m_model->ubah_data('user', $data, array('id' => $id));

        if ($eksekusi) {
            // Setelah berhasil mengubah data, ambil data yang baru dari database
            $updated_data = $this->m_model->get_by_id('user', 'id', $id)->row();

            // Kirim data yang baru ke view
            $data['user'] = $updated_data;

            $this->session->set_flashdata('sukses', 'Berhasil mengubah data');
            $this->load->view('user/data_lengkap/', $data);
        } else {
            $this->session->set_flashdata('error', 'Gagal mengubah data');
            redirect(base_url('user/data_lengkap/' . $id));
        }
    }

    public function edit_data($id)
    {
        $data['user'] = $this->m_model->get_by_id('user', 'id', $id)->result();
        $this->load->view('user/edit_data', $data);
    }

    public function aksi_edit_data($id)
    {
        $data = array(
            'nama_siswa' => $this->input->post('nama_siswa'),
            'nisn' => $this->input->post('nisn'),
            'gender' => $this->input->post('gender'),
            'ttl' => $this->input->post('ttl'),
            'nilai_a' => $this->input->post('nilai_a'),
            'nama_ayah' => $this->input->post('nama_ayah'),
            'nama_ibu' => $this->input->post('nama_ibu'),
            'alamat' => $this->input->post('alamat'),
        );

        $eksekusi = $this->m_model->ubah_data('user', $data, array('id' => $id)); // Gunakan $id dari parameter
        if ($eksekusi) {
            $this->session->set_flashdata('sukses', 'Berhasil mengubah data');
            redirect(base_url('user/tabel_siswa'));
        } else {
            $this->session->set_flashdata('error', 'Gagal mengubah data');
            redirect(base_url('user/edit_data/' . $id)); // Gunakan $id dari parameter
        }
    }

    public function hapus_data($id)
    {
        $this->m_model->delete('user', 'id', $id);
        redirect(base_url('user/tabel_siswa'));
    }
}
