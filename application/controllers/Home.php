<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    //Menampilkan halaman home
    public function index()
    {
        $this->load->view('frontend/v_home');
    }

    //Menampilkan halaman service
    public function service()
    {
        $this->load->view('frontend/v_service');
    }

    //proses input form service
    public function proses_service()
    {
        $data = [
            'nama_pelanggan' => htmlspecialchars($this->input->post('nama_pelanggan', true)),
            'no_telepon' => htmlspecialchars($this->input->post('no_telepon', true)),
            'merk_kendaraan' => htmlspecialchars($this->input->post('merk_kendaraan', true)),
            'tipe_unit' => htmlspecialchars($this->input->post('tipe_unit', true)),
            'deskripsi_kerusakan' => htmlspecialchars($this->input->post('deskripsi_kerusakan', true)),
            'no_plat' => htmlspecialchars($this->input->post('no_plat', true)),
            'alamat_lokasi' => htmlspecialchars($this->input->post('alamat_lokasi', true)),
            'jenis_service' => htmlspecialchars($this->input->post('jenis_service', true)),
            'status' => 'pending',
        ];

        $this->db->insert('pengajuan', $data);
        $this->session->set_flashdata('message', '<p><strong>Data berhasil dikirim, pihak kami akan menghubungi anda kembali!</strong></p>');
        redirect('service');
    }
}
