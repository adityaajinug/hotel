<?php

class Check_in extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Check_model', 'check');
  }
  public function index()
  {
    $data = [
      'title' => 'Check In',
      'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
      'check_in' => $this->check->getCheckIn()
    ];
    $this->template->load('templates/templates', 'check-in/index', $data);
  }
  public function tambah_checkIn()
  {
    $data = [
      'title' => 'Check In',
      'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
      'tamu' => $this->check->getTamu(),
      'kamar' => $this->check->getKamar()
    ];
    $this->template->load('templates/templates', 'check-in/tambah-check-in', $data);
  }
  public function list_kamar()
  {
    $kamar = $this->check->getKamar();
    echo json_encode($kamar);
  }
  public function aksi_tambah_checkIn()
  {
    $no_check_in = $this->input->post('no_check_in');
    $id_tamu = $this->input->post('id_tamu');
    $no_kamar = $this->input->post('no_kamar');
    $tipe = $this->input->post('tipe');
    $tgl_check_in = $this->input->post('tgl_check_in');
    $tgl_check_out = $this->input->post('tgl_check_out');
    $lama_inap = $this->input->post('lama_inap');
    $biaya_kamar = $this->input->post('biaya_kamar');
    $biaya_extrabed = $this->input->post('biaya_extrabed');
    $total_biaya = $this->input->post('total_biaya');
    $status = $this->input->post('status');

    $data = [
      'no_checkin' => $no_check_in,
      'id_tamu' => $id_tamu,
      'no_kamar' => $no_kamar,
      'tipe' => $tipe,
      'tgl_checkin' => $tgl_check_in,
      'tgl_checkout' => $tgl_check_out,
      'lama_inap' => $lama_inap,
      'biaya_kamar' => $biaya_kamar,
      'biaya_extrabed' => $biaya_extrabed,
      'total_bayar' => $total_biaya,
      'status' => $status,
    ];

    $this->db->insert('check_in', $data);
    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Check In Berhasil Ditambahkan!</div>');
    redirect('check_in');
  }
}
