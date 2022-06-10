<?php

class Login extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }
  public function index()
  {

    $this->template->load('templates/login-templates', 'login/index');
  }
  public function reg()
  {

    $this->template->load('templates/login-templates', 'registrasi/index');
  }
  public function aksi_reg()
  {
    $username =  $this->input->post('username');
    $password = $this->input->post('password');

    $data = [
      'username' => $username,
      'password' => password_hash($password, PASSWORD_DEFAULT)
    ];
    $this->db->insert('user', $data);
    redirect('login');
  }
  public function aksi_login()
  {
    $username =  $this->input->post('username');
    $password = $this->input->post('password');

    $user = $this->db->get_where('user', ['username' => $username])->row_array();

    if ($user) {
      if (password_verify($password, $user['password'])) {
        $data = [
          'username' => $user['username'],
          'password' => $user['password'],
        ];
        $this->session->set_userdata($data);
        if ($user['username'] == 'admin') {
          redirect('welcome');
        } else {
          $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Username/Password Tidak Ditemukan!</div>');
          redirect('login');
        }
      }
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Username/Password Tidak Ditemukan!</div>');
      redirect('login');
    }
  }
  public function logout()
  {
    $this->session->unset_userdata('username');


    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Kamu telah logout!</div>');
    redirect('login');
  }
}
