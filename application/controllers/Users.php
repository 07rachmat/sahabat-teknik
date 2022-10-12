<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
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
            'title' => 'Users',
            'data' => $this->db->get('users')->result()
        ];
        $this->load->view('layouts/v_header', $data);
        $this->load->view('layouts/v_sidebar');
        $this->load->view('backend/v_users');
        $this->load->view('layouts/v_footer');
    }

    public function create()
    {
        $this->form_validation->set_rules('nama_user', 'nama', 'required|trim');
        $this->form_validation->set_rules('username', 'username', 'required|trim');
        $this->form_validation->set_rules('no_telepon', 'no telepon', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'required|trim');
        $this->form_validation->set_rules('level', 'level', 'required|trim');
        $this->form_validation->set_message('required', 'Silakan isi %s telebih dahulu!');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Tambah Users',
            ];
            $this->load->view('layouts/v_header', $data);
            $this->load->view('layouts/v_sidebar');
            $this->load->view('backend/v_users_create');
            $this->load->view('layouts/v_footer');
        } else {
            $config['upload_path'] = './assets/images/users/'; //path folder
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                //mengambil data tentang gambar
                $gambar = $this->upload->data();
                $data = [
                    'nama_user' => htmlspecialchars($this->input->post('nama_user', true)),
                    'username' => htmlspecialchars($this->input->post('username', true)),
                    'password' => password_hash('sahabatteknik', PASSWORD_DEFAULT),
                    'no_telepon' => htmlspecialchars($this->input->post('no_telepon', true)),
                    'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
                    'level' => htmlspecialchars($this->input->post('level', true)),
                    'foto' => $gambar['file_name'],
                    'status' => 'aktif'
                ];

                $this->db->insert('users', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                Data <strong>berhasil</strong> ditambahkan!
                </div>');
                redirect('users');
            } else {
                $data = [
                    'nama_user' => htmlspecialchars($this->input->post('nama_user', true)),
                    'username' => htmlspecialchars($this->input->post('username', true)),
                    'password' => password_hash('sahabatteknik', PASSWORD_DEFAULT),
                    'no_telepon' => htmlspecialchars($this->input->post('no_telepon', true)),
                    'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
                    'level' => htmlspecialchars($this->input->post('level', true)),
                    'status' => 'aktif'
                ];

                $this->db->insert('users', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                Data <strong>berhasil</strong> ditambahkan!
                </div>');
                redirect('users');
            }
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('nama_user', 'nama', 'required|trim');
        $this->form_validation->set_rules('no_telepon', 'no telepon', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'required|trim');
        $this->form_validation->set_rules('level', 'level', 'required|trim');
        $this->form_validation->set_message('required', 'Silakan isi %s telebih dahulu!');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Edit Users',
                'data' => $this->db->get_where('users', ['id_user' => $id])->row()
            ];
            $this->load->view('layouts/v_header', $data);
            $this->load->view('layouts/v_sidebar');
            $this->load->view('backend/v_users_edit');
            $this->load->view('layouts/v_footer');
        } else {
            $config['upload_path'] = './assets/images/users/'; //path folder
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                //mengambil data tentang gambar
                $gambar = $this->upload->data();

                $row = $this->db->get_where('users', ['id_user' => $id])->row();
                if ($row->foto != 'avatar.png') {
                    $target_file = './assets/images/users/' . $row->foto;
                    unlink($target_file);
                }

                $id_user = $this->input->post('id_user');

                $data = [
                    'nama_user' => htmlspecialchars($this->input->post('nama_user', true)),
                    'username' => htmlspecialchars($this->input->post('username', true)),
                    'no_telepon' => htmlspecialchars($this->input->post('no_telepon', true)),
                    'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
                    'foto' => $gambar['file_name'],
                    'level' => htmlspecialchars($this->input->post('level', true)),
                    'status' => htmlspecialchars($this->input->post('status_user', true)),
                ];

                $this->db->where('id_user', $id_user);
                $this->db->update('users', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                Data <strong>berhasil</strong> diubah!
                </div>');
                redirect('users');
            } else {
                $id_user = $this->input->post('id_user');

                $data = [
                    'nama_user' => htmlspecialchars($this->input->post('nama_user', true)),
                    'username' => htmlspecialchars($this->input->post('username', true)),
                    'no_telepon' => htmlspecialchars($this->input->post('no_telepon', true)),
                    'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin', true)),
                    'level' => htmlspecialchars($this->input->post('level', true)),
                    'status' => htmlspecialchars($this->input->post('status_user', true)),
                ];

                $this->db->where('id_user', $id_user);
                $this->db->update('users', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                Data <strong>berhasil</strong> diubah!
                </div>');
                redirect('users');
            }
        }
    }

    public function delete($id)
    {
        $row = $this->db->get_where('users', ['id_user' => $id])->row();
        if ($row->foto != 'avatar.png') {
            $target_file = './assets/images/users/' . $row->foto;
            unlink($target_file);
        }

        $this->db->delete('users', ['id_user' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        Data <strong>berhasil</strong> dihapus!
        </div>');
        redirect('users');
    }
}
