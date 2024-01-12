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
        $data['user'] = $this->m_model->get_data('user')->result();
        $this->load->view('admin/dashboard', $data);
    }
    public function profilee()
    {
        $data['admin'] = $this->m_model->get_by_id('admin', 'id', $this->session->userdata('id'))->result();
        $this->load->view('admin/profile', $data);
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

    public function aksi_ubah_profile()
    {
        $image = $_FILES['foto']['name'];
        $foto_temp = $_FILES['foto']['tmp_name'];
        $password_baru = $this->input->post('password_baru');
        $konfirmasi_password = $this->input->post('konfirmasi_password');
        $email = $this->input->post('email');
        $nama_panggilan = $this->input->post('nama_panggilan');
        $sekolah = $this->input->post('sekolah');

        // Check if the new password matches the confirmation
        if (!empty($password_baru) && $password_baru !== $konfirmasi_password) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Password baru dan konfirmasi password harus sama
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect(base_url('admin/profilee'));
        }

        // Update other profile information
        $data['email'] = $email;
        $data['nama_panggilan'] = $nama_panggilan;
        $data['sekolah'] = $sekolah;

        // Update profile image if provided
        if ($image) {
            $kode = round(microtime(true) * 100);
            $file_name = $kode . '_' . $image;
            $upload_path = './image/admin/' . $file_name;

            if (move_uploaded_file($foto_temp, $upload_path)) {
                $old_file = $this->m_model->get_foto_by_id($this->session->userdata('id'));
                if ($old_file && file_exists('./image/admin/' . $old_file)) {
                    unlink('./image/admin/' . $old_file);
                }
                $data['image'] = $file_name;
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Gagal mengunggah foto
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>');
                redirect(base_url('admin/profile'));
            }
        }

        // Update user data
        $update_result = $this->m_model->ubah_data('admin', $data, array('id' => $this->session->userdata('id')));

        if ($update_result) {
            $this->session->set_flashdata('sukses', '<div id="alert" class="bg-gray-200 border-l-4 border-blue-500 text-blue-700 p-4" role="alert">
            Berhasil Merubah data
            <button type="button" class="ml-2 mb-1 text-blue-700 font-bold" onclick="closeAlert()">
                &times;
            </button>
        </div>
        <script>
            function closeAlert() {
                document.getElementById("alert").style.display = "none";
            }
        </script>');
            redirect(base_url('admin/profilee'));
        } else {
            $this->session->set_flashdata('message', 'Gagal merubah data');
            redirect(base_url('admin/profile'));
        }
    }

    public function hapus_image()
    {
        $data = array(
            'image' => NULL
        );

        $eksekusi = $this->m_model->ubah_data('user', $data, array('id' => $this->session->userdata('id')));
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

    public function tambah_siswa()
    {
        $data['user'] = $this->m_model->get_data('user')->result();
        $this->load->view('admin/tambah_siswa', $data);
    }
    public function aksi_tambah_siswa()
    {
        $data = [
            'nama_siswa' => $this->input->post( 'nama' ),
            'nisn' => $this->input->post( 'nisn' ),
            'gender' => $this->input->post( 'gender' ),
            'ttl' => $this->input->post( 'ttl' ),
            'nilai_a' => $this->input->post( 'nilai_akhir' ),
            'nama_ayah' => $this->input->post( 'nama_ayah' ),
            'nama_ibu' => $this->input->post( 'nama_ibu' ),
            'alamat' => $this->input->post( 'alamat' ),
        ];
        $this->m_model->tambah_data( 'user', $data );
        redirect( base_url( 'admin/tambah_siswa' ) );
    }

    public function hapus_siswa( $id ) {
        $this->m_model->delete( 'user', 'id', $id );
        redirect( base_url( 'admin/tambah_siswa' ) );
    }
}
