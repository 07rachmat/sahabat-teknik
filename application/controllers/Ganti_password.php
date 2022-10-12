<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ganti_password extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        akses_login();
    }

    public function index()
    {
        $this->form_validation->set_rules('password_lama', 'password lama', 'required');
        $this->form_validation->set_rules('password_baru', 'password baru', 'required');
        $this->form_validation->set_rules('konfirmasi_password', 'konfirmasi password', 'required|matches[password_baru]', ['matches' => 'Password tidak sama!']);
        $this->form_validation->set_message('required', 'Silakan isi %s telebih dahulu!');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Ganti Password',
            ];
            $this->load->view('layouts/v_header', $data);
            $this->load->view('layouts/v_sidebar');
            $this->load->view('backend/v_ganti_password');
            $this->load->view('layouts/v_footer');
        } else {
            $password_lama = $this->input->post('password_lama');
            $password_baru = $this->input->post('password_baru');
            $id_user = $this->session->userdata('id_user');

            $row = $this->db->get_where('users', ['id_user' => $id_user])->row();

            if (password_verify($password_lama, $row->password)) {
                if ($password_lama != $password_baru) {
                    $id_user = $this->session->userdata('id_user');
                    $data = [
                        'password' => password_hash($password_baru, PASSWORD_DEFAULT)
                    ];

                    $this->db->where('id_user', $id_user);
                    $this->db->update('users', $data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong>Password</strong> berhasil diubah!
                    </div>');
                    redirect('ganti_password');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong>Password baru</strong> tidak boleh sama dengan password lama!
                    </div>');
                    redirect('ganti_password');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>Password</strong> lama yang anda masukan salah!
                </div>');
                redirect('ganti_password');
            }
        }
    }
}
