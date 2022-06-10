<?php

class Tamu extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Tamu_model', 'tamu');
  }


  public function index()
  {
    $data = [
      'title' => 'Tamu',
      'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
      'tamu' => $this->tamu->getTamu()
    ];
    $this->template->load("templates/templates", 'tamu/index', $data);
  }
  public function aksi_tambah_tamu()
  {
    $nama = $this->input->post('nama');
    $alamat = $this->input->post('alamat');
    $no_ktp = $this->input->post('no_ktp');
    $telp = $this->input->post('telp');

    $data = [
      'nama' => $nama,
      'alamat' => $alamat,
      'no_ktp' => $no_ktp,
      'telp' => $telp,
    ];
    $this->db->insert('tamu', $data);
    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Tamu Berhasil Ditambahkan!</div>');
    redirect('tamu');
  }
  public function tambah_tamu()
  {
    $data = [
      'title' => 'Halaman Tambah Tamu',
      'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
    ];
    $this->template->load("templates/templates", 'tamu/tambah-tamu', $data);
  }
}
