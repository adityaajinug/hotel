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
  public function edit_tamu()
  {
    $id =  $this->uri->segment(3);
    $data = [
      'title' => 'Halaman Edit Tamu',
      'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
      'tamu_id' => $this->tamu->getTamuId($id)
    ];
    $this->template->load("templates/templates", 'tamu/edit-tamu', $data);
  }
  public function aksi_edit_tamu()
  {
    $id = $this->input->post('id_tamu');
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
    $this->db->where('id_tamu', $id);
    $this->db->update('tamu', $data);
    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Tamu Berhasil Diubah!</div>');
    redirect('tamu');
  }
  public function delete_tamu()
  {
    $id =  $this->uri->segment(3);
    $this->tamu->hapus_tamu($id);
    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
      Data telah dihapus
    </div>');
    redirect('tamu');
  }
}
