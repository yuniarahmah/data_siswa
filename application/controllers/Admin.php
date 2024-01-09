<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_model'); // Pastikan model dimuat di sini
        $this->load->helper('my_helper');
    }
    public function dashboard()
    {
        $data['user'] = $this->M_model->get_data('user')->num_rows();
        $data['admin'] = $this->M_model->get_data('admin')->num_rows();
        $data['guru'] = $this->M_model->get_data('guru')->num_rows();
        $data['ekstra'] = $this->M_model->get_data('ekstra')->num_rows();
        $data['orangtua'] = $this->M_model->get_data('orangtua')->result();
        $this->load->view('admin/dashboard', $data);
    }
    public function profile()
    {
        // $data['admin'] = $this->M_model->get_by_id('admin', 'id', $this->session->userdata('id'))->result();
        // $this->load->view('admin/profile', $data); // Mengirimkan variabel $data ke tampilan
        $this->load->view('admin/profile');
    }

    public function upload_img($value)
    {
        $kode = round(microtime(true) * 1000);
        $config['upload_path'] = '../../image/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '30000';
        $config['file_name'] = $kode;

        $this->load->library('upload', $config); // Load library 'upload' with config

        if (!$this->upload->do_upload($value)) {
            return array(false, '');
        } else {
            $fn = $this->upload->data();
            $nama = $fn['file_name'];
            return array(true, $nama);
        }
    }

    public function aksi_ubah_profilee()
    {
        $image = $_FILES['foto']['name'];
        $foto_temp = $_FILES['foto']['tmp_name'];
        $password_baru = $this->input->post('password_baru');
        $konfirmasi_password = $this->input->post('konfirmasi_password');
        $email = $this->input->post('email');
        $username = $this->input->post('username');

        // Jika ada foto yang diunggah
        if ($image) {
            $kode = round(microtime(true) * 100);
            $file_name = $kode . '_' . $image;
            $upload_path = './image/admin/' . $file_name;

            if (move_uploaded_file($foto_temp, $upload_path)) {
                // Hapus image lama jika ada
                $old_file = $this->M_model->get_foto_by_id($this->session->userdata('id'));
                if ($old_file && file_exists('./image/admin/' . $old_file)) {
                    unlink('./image/admin/' . $old_file);
                }

                $data = [
                    'image' => $file_name,
                    'email' => $email,
                    'username' => $username,
                ];
            } else {
                // Gagal mengunggah image baru
                redirect(base_url('admin/profile'));
            }
        } else {
            // Jika tidak ada image yang diunggah
            $data = [
                'email' => $email,
                'username' => $username,
            ];
        }

        // Kondisi jika ada password baru
        if (!empty($password_baru)) {
            // Pastikan password baru dan konfirmasi password sama
            if ($password_baru === $konfirmasi_password) {
                // Wadah password baru
                $data['password'] = md5($password_baru);
            } else {
                $this->session->set_flashdata('message', 'Password baru dan konfirmasi password harus sama');
                redirect(base_url('admin/profile'));
            }
        }

        // Eksekusi dengan model ubah_data
        $update_result = $this->M_model->ubah_data('user', $data, array('id' => $this->session->userdata('id')));

        if ($update_result) {
            $this->session->set_flashdata('sukses', '<div class="alert alert-success alert-dismissible fade show" role="alert">
     Berhasil Merubah data
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>');
            redirect(base_url('admin/profile'));
        } else {
            redirect(base_url('admin/profile'));
        }
    }
    public function hapus_image()
    {
        $data = array(
            'image' => NULL
        );

        $eksekusi = $this->M_model->ubah_data('user', $data, array('id' => $this->session->userdata('id')));
        if ($eksekusi) {

            $this->session->set_flashdata('sukses', '<div class="alert alert-dark alert-dismissible fade show" role="alert">
        Berhasil Menghapus Profile
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect(base_url('admin/profile'));
        } else {
            $this->session->set_flashdata('error', 'gagal...');
            redirect(base_url('admin/profile'));
        }
    }

    public function tabel_siswa()
    {
        $data['orangtua'] = $this->M_model->get_data('orangtua')->result();
        $this->load->view('admin/tabel_siswa', $data);
    }
    public function data_lengkap()
    {
        $data['orangtua'] = $this->M_model->get_data('orangtua')->result();
        $this->load->view('admin/data_lengkap', $data);
    }
}
