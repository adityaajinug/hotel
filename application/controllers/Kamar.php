<?php

class Kamar extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Kamar_model', 'kamar');
  }
  public function index()
  {
    $data = [
      'title' => 'Kamar',
      'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
      'kamar' => $this->kamar->getKamar()

    ];

    $this->template->load('templates/templates', 'kamar/index', $data);
  }
}
