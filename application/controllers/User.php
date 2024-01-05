<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_model'); // Sesuaikan dengan nama model yang sebenarnya
    }
    public function dashboard_u()
    {
        $this->load->view('user/dashboard_u');
    }
}
?>