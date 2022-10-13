<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Spareparts extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        akses_login();
    }

    //menampilkan halaman utama spareparts
    public function index()
    {
        $data = [
            'title' => 'Spareparts',
            'data' => $this->db->get('spareparts')->result()
        ];
        $this->load->view('layouts/v_header', $data);
        $this->load->view('layouts/v_sidebar');
        $this->load->view('backend/v_spareparts');
        $this->load->view('layouts/v_footer');
    }

    //menampilkan halaman tambah & proses tambah data spareparts
    public function create()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required|trim');
        $this->form_validation->set_message('required', 'Silakan isi %s telebih dahulu!');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Tambah Spareparts',
            ];
            $this->load->view('layouts/v_header', $data);
            $this->load->view('layouts/v_sidebar');
            $this->load->view('backend/v_spareparts_create');
            $this->load->view('layouts/v_footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
                'status' => 'tersedia',
            ];

            $this->db->insert('spareparts', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            Data <strong>berhasil</strong> ditambahkan!
            </div>');
            redirect('spareparts');
        }
    }

    //menampilkan halaman edit & proses edit data spareparts
    public function edit($id)
    {
        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required|trim');
        $this->form_validation->set_message('required', 'Silakan isi %s telebih dahulu!');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Edit Spareparts',
                'data' => $this->db->get_where('spareparts', ['id_spareparts' => $id])->row()
            ];
            $this->load->view('layouts/v_header', $data);
            $this->load->view('layouts/v_sidebar');
            $this->load->view('backend/v_spareparts_edit');
            $this->load->view('layouts/v_footer');
        } else {
            $id_spareparts = $this->input->post('id_spareparts');
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
                'status' => htmlspecialchars($this->input->post('status_spareparts', true)),
            ];

            $this->db->where('id_spareparts', $id_spareparts);
            $this->db->update('spareparts', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            Data <strong>berhasil</strong> ditambahkan!
            </div>');
            redirect('spareparts');
        }
    }

    //menghapus data spareparts
    public function delete($id)
    {
        $this->db->delete('spareparts', ['id_spareparts' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        Data <strong>berhasil</strong> dihapus!
        </div>');
        redirect('spareparts');
    }
}
