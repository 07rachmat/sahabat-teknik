<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Derek extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        akses_login();
    }

    public function index()
    {
        $data = [
            'title' => 'Derek',
            'data' => $this->db->get('derek')->result()
        ];
        $this->load->view('layouts/v_header', $data);
        $this->load->view('layouts/v_sidebar');
        $this->load->view('backend/v_derek');
        $this->load->view('layouts/v_footer');
    }

    public function create()
    {
        $this->form_validation->set_rules('nama_derek', 'nama', 'required|trim');
        $this->form_validation->set_rules('no_telepon', 'no telepon', 'required|trim');
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim');
        $this->form_validation->set_rules('kategori_unit', 'unit kategori', 'required|trim');
        $this->form_validation->set_message('required', 'Silakan isi %s telebih dahulu!');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Tambah Derek',
            ];
            $this->load->view('layouts/v_header', $data);
            $this->load->view('layouts/v_sidebar');
            $this->load->view('backend/v_derek_create');
            $this->load->view('layouts/v_footer');
        } else {
            $data = [
                'nama_derek' => htmlspecialchars($this->input->post('nama_derek', true)),
                'no_telepon' => htmlspecialchars($this->input->post('no_telepon', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'kategori_unit' => htmlspecialchars($this->input->post('kategori_unit', true)),
                'status' => 'tersedia',
            ];

            $this->db->insert('derek', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            Data <strong>berhasil</strong> ditambahkan!
            </div>');
            redirect('derek');
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('nama_derek', 'nama', 'required|trim');
        $this->form_validation->set_rules('no_telepon', 'no telepon', 'required|trim');
        $this->form_validation->set_rules('alamat', 'alamat', 'required|trim');
        $this->form_validation->set_rules('kategori_unit', 'unit kategori', 'required|trim');
        $this->form_validation->set_message('required', 'Silakan isi %s telebih dahulu!');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Edit Derek',
                'data' => $this->db->get_where('derek', ['id_derek' => $id])->row()
            ];
            $this->load->view('layouts/v_header', $data);
            $this->load->view('layouts/v_sidebar');
            $this->load->view('backend/v_derek_edit');
            $this->load->view('layouts/v_footer');
        } else {
            $id_derek = $this->input->post('id_derek');
            $data = [
                'nama_derek' => htmlspecialchars($this->input->post('nama_derek', true)),
                'no_telepon' => htmlspecialchars($this->input->post('no_telepon', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'kategori_unit' => htmlspecialchars($this->input->post('kategori_unit', true)),
                'status' => htmlspecialchars($this->input->post('status_derek', true)),
            ];

            $this->db->where('id_derek', $id_derek);
            $this->db->update('derek', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            Data <strong>berhasil</strong> diubah!
            </div>');
            redirect('derek');
        }
    }

    public function delete($id)
    {
        $this->db->delete('derek', ['id_derek' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        Data <strong>berhasil</strong> dihapus!
        </div>');
        redirect('derek');
    }
}
