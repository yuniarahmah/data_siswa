<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_model'); // Sesuaikan dengan nama model yang sebenarnya
        $this->load->helper('my_helper');
    }
    public function dashboard_u()
    {
        $data['user'] = $this->M_model->get_data('user')->num_rows();
        $data['admin'] = $this->M_model->get_data('admin')->num_rows();
        $data['guru'] = $this->M_model->get_data('guru')->num_rows();
        $data['ekstra'] = $this->M_model->get_data('ekstra')->num_rows();
        $data['orangtua'] = $this->M_model->get_data('orangtua')->result();
        $this->load->view('user/dashboard_u', $data);
    }

    public function profile()
    {
        $this->load->view('user/profile');
    }
    

    public function tambah_siswa_baru()
    {
        $data['orangtua'] = $this->M_model->get_data('orangtua')->result();
        $this->load->view('user/tambah_siswa_baru', $data);
    }
    
}
