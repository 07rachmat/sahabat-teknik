<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('status') == 'login') {
            if ($this->session->userdata('level') == 'admin') {
                redirect('dashboard');
            } else {
                redirect('pengajuan');
            }
        }

        $data = ['title' => 'Login'];
        $this->load->view('layouts/auth_header', $data);
        $this->load->view('auth/v_login');
        $this->load->view('layouts/auth_footer');
    }

    public function login_proses()
    {
        if ($this->session->userdata('status') == 'login') {
            if ($this->session->userdata('level') == 'admin') {
                redirect('dashboard');
            } else {
                redirect('pengajuan');
            }
        }

        $username = htmlspecialchars($this->input->post('username', true));
        $password = htmlspecialchars($this->input->post('password', true));

        $users = $this->db->get_where('users', ['username' => $username])->row();

        if ($username && $password != '') {
            if ($users == true) {
                if ($users->status == 'aktif') {
                    if (password_verify($password, $users->password)) {
                        if ($users->level == 'admin') {
                            $data = [
                                'id_user' => $users->id_user,
                                'username' => $users->username,
                                'level' => $users->level,
                                'status' => 'login'
                            ];
                            $this->session->set_userdata($data);

                            redirect('dashboard');
                        } else {
                            $data = [
                                'id_user' => $users->id_user,
                                'username' => $users->username,
                                'level' => $users->level,
                                'status' => 'login'
                            ];
                            $this->session->set_userdata($data);

                            redirect('pengajuan');
                        }
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <strong>Password</strong> yang anda masukan salah!
                        </div>');
                        redirect('login');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong>Akun</strong> tersebut telah tidak aktif!
                    </div>');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>Username </strong>tidak tersedia!
                </div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            Silakan isi <strong>username</strong> & <strong>password</strong> terlebih dahulu!
            </div>');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
