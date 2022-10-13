<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        akses_login();
    }


    //Menampilkan data pengajuan
    public function index()
    {
        $data = [
            'title' => 'Pengajuan',
            'data' => $this->db->get('pengajuan')->result()
        ];
        $this->load->view('layouts/v_header', $data);
        $this->load->view('layouts/v_sidebar');
        $this->load->view('backend/v_pengajuan');
        $this->load->view('layouts/v_footer');
    }

    //Menampilkan detail pengajuan 
    public function detail($id)
    {
        $data = [
            'title' => 'Detail Pengajuan',
            'data' => $this->db->get_where('pengajuan', ['id_pengajuan' => $id])->row()
        ];
        $this->load->view('layouts/v_header', $data);
        $this->load->view('layouts/v_sidebar');
        $this->load->view('backend/v_pengajuan_detail');
        $this->load->view('layouts/v_footer');
    }

    //Menampilkan proses ubah status pengajuan 
    public function edit($id)
    {
        $this->form_validation->set_rules('status_pengajuan', 'status pengajuan', 'required|trim');
        $this->form_validation->set_message('required', 'Silakan isi %s telebih dahulu!');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Edit Pengajuan',
                'data' => $this->db->get_where('pengajuan', ['id_pengajuan' => $id])->row()
            ];
            $this->load->view('layouts/v_header', $data);
            $this->load->view('layouts/v_sidebar');
            $this->load->view('backend/v_pengajuan_edit');
            $this->load->view('layouts/v_footer');
        } else {
            $id_pengajuan = $this->input->post('id_pengajuan');

            $data = [
                'status' => htmlspecialchars($this->input->post('status_pengajuan', true)),
            ];

            $this->db->where('id_pengajuan', $id_pengajuan);
            $this->db->update('pengajuan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            Data <strong>berhasil</strong> diubah!
            </div>');
            redirect('pengajuan');
        }
    }

    //hapus data pengajuan
    public function delete($id)
    {
        $this->db->delete('pengajuan', ['id_pengajuan' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        Data <strong>berhasil</strong> dihapus!
        </div>');
        redirect('pengajuan');
    }
}
