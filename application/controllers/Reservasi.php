<?php


class Reservasi extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Reservasi_model', 'reservasi');
  }
  public function index()
  {
    foreach ($this->reservasi->kamar() as $r) {
      $reservasi[] = [
        'no_kamar' => $r['no_kamar'],
        'tipe' => $r['tipe'],
        'data' => $this->reservasi->getReservasiPerTh($r['no_kamar'])
      ];
    }
    $data = [
      'title' => 'Reservasi',
      'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
      'reservasi' => $reservasi
    ];

    // echo json_encode($data['reservasi']);


    $this->template->load('templates/templates', 'reservasi/index', $data);
  }
  public function api()
  {
    foreach ($this->reservasi->kamar() as $r) {
      $reservasi[] = [
        'no_kamar' => $r['no_kamar'],
        'tipe' => $r['tipe'],
        'data' => $this->reservasi->getReservasiPerTh($r['no_kamar'])
      ];
    }
    $data = [
      'reservasi' => $reservasi

    ];

    echo json_encode($data['reservasi']);
  }
}
