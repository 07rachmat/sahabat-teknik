<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        akses_login();
        akses_admin();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'derek' => $this->db->get('derek')->num_rows(),
            'spareparts' => $this->db->get('spareparts')->num_rows(),
            'teknisi' => $this->db->get_where('users', ['level' => 'teknisi'])->num_rows(),
            'members' => $this->db->get('users')->num_rows(),
        ];
        $this->load->view('layouts/v_header', $data);
        $this->load->view('layouts/v_sidebar');
        $this->load->view('backend/v_dashboard');
        $this->load->view('layouts/v_footer');
    }
}
