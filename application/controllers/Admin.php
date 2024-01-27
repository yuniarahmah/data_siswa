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
        $nama_siswa = $this->input->post('nama_siswa');
        $nisn = $this->input->post('nisn');
        $gender = $this->input->post('gender');
        $ttl = $this->input->post('ttl');
        $nilai_a = $this->input->post('nilai_a');
        $nama_ayah = $this->input->post('nama_ayah');
        $nama_ibu = $this->input->post('nama_ibu');
        $alamat = $this->input->post('alamat');
        $image = $_FILES['foto']['name'];

        $errors = [];

        // Validasi nama ruangan tidak boleh sama
        $nisn_exists = $this->m_model->cek_data_exists('user', ['nisn' => $nisn]);
        if ($nisn_exists) {
            $errors[] = 'Nisn tidak boleh sama silahkan dipastikan lagi.';
        }

        // Validasi foto
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
        $file_info = pathinfo($image);
        $extension = isset($file_info['extension']) ? strtolower($file_info['extension']) : null;

        if (empty($image) || !in_array($extension, $allowed_extensions)) {
            $errors[] = 'Foto harus diunggah dengan format JPG, JPEG, PNG, atau GIF.';
        }

        if (count($errors) > 0) {
            $response = [
                'status' => 'error',
                'message' => implode(' ', $errors),
            ];
        } else {
            $image_temp = $_FILES['foto']['tmp_name'];
            $kode = round(microtime(true) * 100);
            $file_name = $kode . '_' . $image;
            $upload_path = './image/' . $file_name;

            if (move_uploaded_file($image_temp, $upload_path)) {
                $data = [
                    'image' => $file_name,
                    'nama_siswa' => $nama_siswa,
                    'nisn' => $nisn,
                    'gender' => $gender,
                    'ttl' => $ttl,
                    'nilai_a' => $nilai_a,
                    'nama_ayah' => $nama_ayah,
                    'nama_ibu' => $nama_ibu,
                    'alamat' => $alamat,
                ];

                $inserted = $this->m_model->tambah_data('user', $data);

                if ($inserted) {
                    $response = [
                        'status' => 'success',
                        'message' => 'Data berhasil ditambahkan.',
                        'redirect' => base_url('admin/tabel_data_lengkap'),
                    ];
                } else {
                    $response = [
                        'status' => 'error',
                        'message' => 'Gagal menambahkan data. Silakan coba lagi.',
                    ];
                    unlink($upload_path);
                }
            } else {
                $response = [
                    'status' => 'error',
                    'message' => 'Gagal mengunggah foto. Silakan coba lagi.',
                ];
            }
        }

        // Menggunakan echo json_encode untuk response AJAX
        echo json_encode($response);
    }

    public function tambah_ekstra()
    {
        $data['ekstra'] = $this->m_model->get_data('ekstra', 'id')->result();
        $this->load->view('admin/tambah_ekstra', $data);
    }
    public function aksi_tambah_ekstra()
    {
        $data = [
            'nama_ekstra' => $this->input->post('nama_ekstra'),
            'pembimbing' => $this->input->post('pembimbing'),
            'waktu' => $this->input->post('waktu'),
        ];
        $this->m_model->tambah_data('ekstra', $data);
        redirect(base_url('admin/tambah_ekstra'));
    }

    public function hapus_siswa($id)
    {
        $this->m_model->delete('user', 'id', $id);
        redirect(base_url('admin/tabel_data_lengkap'));
    }

    public function tambah_guru()
    {
        $data['guru'] = $this->m_model->get_data('guru', 'id')->result();
        $this->load->view('admin/tambah_guru', $data);
    }
    public function aksi_tambah_guru()
    {
        $data = [
            'nama_guru' => $this->input->post('nama_guru'),
            'nik' => $this->input->post('nik'),
            'gender' => $this->input->post('gender'),
            'no_hp' => $this->input->post('no_hp'),
        ];
        $this->m_model->tambah_data('guru', $data);
        redirect(base_url('admin/tambah_guru'));
    }
    public function tambah_akademik()
    {
        $data['akademik'] = $this->m_model->get_data('akademik', 'id')->result();
        $this->load->view('admin/tambah_akademik', $data);
    }
    public function aksi_tambah_akademik()
    {
        $data = [
            'id_nama_guru' => $this->input->post('id_nama_guru'),
            'nama_mapel' => $this->input->post('nama_mapel'),
        ];
        $this->m_model->tambah_data('akademik', $data);
        redirect(base_url('admin/tambah_akademik'));
    }

    public function tabel_data_lengkap()
    {
        $data['user'] = $this->m_model->get_data('user')->result();
        $data['guru'] = $this->m_model->get_data('guru')->result();
        $data['ekstra'] = $this->m_model->get_data('ekstra')->result();
        $data['akademik'] = $this->m_model->get_data('akademik')->result();
        $this->load->view('admin/tabel_data_lengkap', $data);
    }

    public function edit_ekstra($id)
    {
        $data['ekstra'] = $this->m_model->get_by_id('ekstra', 'id', $id)->result();
        $this->load->view('admin/edit_ekstra', $data);
    }

    public function aksi_edit_ekstra($id)
    {
        $data = array(
            'nama_ekstra' => $this->input->post('nama_ekstra'),
            'pembimbing' => $this->input->post('pembimbing'),
            'waktu' => $this->input->post('waktu'),
        );

        $eksekusi = $this->m_model->ubah_data('ekstra', $data, array('id' => $id)); // Gunakan $id dari parameter
        if ($eksekusi) {
            $this->session->set_flashdata('sukses', 'Berhasil mengubah data');
            redirect(base_url('admin/tabel_data_lengkap'));
        } else {
            $this->session->set_flashdata('error', 'Gagal mengubah data');
            redirect(base_url('admin/edit_ekstra/' . $id)); // Gunakan $id dari parameter
        }
    }

    public function hapus_ekstra($id)
    {
        $this->m_model->delete('ekstra', 'id', $id);
        redirect(base_url('admin/tabel_data_lengkap'));
    }
    public function edit_guru($id)
    {
        $data['guru'] = $this->m_model->get_by_id('guru', 'id', $id)->result();
        $this->load->view('admin/edit_guru', $data);
    }

    public function aksi_edit_guru($id)
    {
        $data = array(
            'nama_guru' => $this->input->post('nama_guru'),
            'nik' => $this->input->post('nik'),
            'gender' => $this->input->post('gender'),
            'no_hp' => $this->input->post('no_hp'),
        );

        $eksekusi = $this->m_model->ubah_data('guru', $data, array('id' => $id)); // Gunakan $id dari parameter
        if ($eksekusi) {
            $this->session->set_flashdata('sukses', 'Berhasil mengubah data');
            redirect(base_url('admin/tabel_data_lengkap'));
        } else {
            $this->session->set_flashdata('error', 'Gagal mengubah data');
            redirect(base_url('admin/edit_guru/' . $id)); // Gunakan $id dari parameter
        }
    }

    public function hapus_guru($id)
    {
        $this->m_model->delete('akademik', 'id', $id);
        redirect(base_url('admin/tabel_data_lengkap'));
    }
    public function edit_akademik($id)
    {
        $data['akademik'] = $this->m_model->get_by_id('akademik', 'id', $id)->result();
        $this->load->view('admin/edit_akademik', $data);
    }

    public function aksi_edit_akademik($id)
    {
        $data = array(
            'nama_mapel' => $this->input->post('nama_mapel'),
            'id_nama_guru' => $this->input->post('id_nama_guru'),
        );

        $eksekusi = $this->m_model->ubah_data('akademik', $data, array('id' => $id)); // Gunakan $id dari parameter
        if ($eksekusi) {
            $this->session->set_flashdata('sukses', 'Berhasil mengubah data');
            redirect(base_url('admin/tabel_data_lengkap'));
        } else {
            $this->session->set_flashdata('error', 'Gagal mengubah data');
            redirect(base_url('admin/edit_akademik/' . $id)); // Gunakan $id dari parameter
        }
    }

    public function hapus_akademik($id)
    {
        $this->m_model->delete('akademik', 'id', $id);
        redirect(base_url('admin/tabel_data_lengkap'));
    }

    public function pembayaran()
    {
        $data['pembayaran'] = $this->m_model->get_pembayaran();
        $this->load->view('admin/pembayaran', $data);
    }

    public function tambah_pembayaran()
    {
        $data['pembayaran'] = $this->m_model->get_data('pembayaran')->result();
        $data['user'] = $this->m_model->get_data('user')->result();
        $this->load->view('admin/tambah_pembayaran', $data);
    }

    public function aksi_tambah_pembayaran()
    {
        $data = [
            'id_nama_siswa' => $this->input->post('nama_siswa'),
            'jenis_pembayaran' => $this->input->post('jenis_pembayaran'),
            'total_pembayaran' => $this->input->post('total_pembayaran'),
            'status' => $this->input->post('status'),
        ];
        $this->m_model->tambah_data('pembayaran', $data);
        redirect(base_url('admin/pembayaran'));
    }

    public function edit_pembayaran($id)
    {
        $data['pembayaran'] = $this->m_model->get_by_id('pembayaran', 'id', $id)->result();
        $data['user'] = $this->m_model->get_data('user')->result();
        $this->load->view('admin/edit_pembayaran', $data);
    }

    public function aksi_edit_pembayaran($id)
    {
        $data = [
            'id_nama_siswa' => $this->input->post('nama_siswa'),
            'jenis_pembayaran' => $this->input->post('jenis_pembayaran'),
            'total_pembayaran' => $this->input->post('total_pembayaran'),
            'status' => $this->input->post('status'),
        ];
        $eksekusi = $this->m_model->ubah_data('pembayaran', $data, array('id' => $id)); // Gunakan $id dari parameter
        if ($eksekusi) {
            $this->session->set_flashdata('sukses', 'berhasil');
            redirect(base_url('admin/pembayaran'));
        } else {
            $this->session->set_flashdata('sukses', 'berhasil');
            redirect(base_url('admin/edit_pembayaran/' . $this->input->post('id')));
        }
    }

    public function hapus_pembayaran($id)
    {
        $this->m_model->delete('pembayaran', 'id', $id);
        redirect(base_url('admin/pembayaran'));
    }
}
