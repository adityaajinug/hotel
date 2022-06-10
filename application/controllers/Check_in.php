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
      'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array()
    ];
    $this->template->load('templates/templates', 'check-in/index', $data);
  }
  public function tambah_checkIn()
  {
    $data = [
      'title' => 'Check In',
      'user' => $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array(),
      'tamu' => $this->check->getTamu()
    ];
    $this->template->load('templates/templates', 'check-in/tambah-check-in', $data);
  }
}
