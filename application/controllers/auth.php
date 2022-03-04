<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

 function __construct()
 {
  parent::__construct();
  $this->load->model('Model_auth');
 }
 public function index()
 {
   $this->load->view('pages/login');
 }

 public function login()
 {
   $username = $this->input->post('username');
   $password = $this->input->post('password');

   //cek login
   $check_account = $this->Model_auth->login($username, md5($password));

   if ($check_account->num_rows() > 0) {
     $row = $check_account->row();
     $param = array(
         'id_user'  => $row->id_user,
         'username' => $row->username,
         'fullname' => $row->fullname,
     );

     $this->session->set_userdata($param);
     redirect(base_url('panel'));
    }else {
      $this->session->set_flashdata('auth', 'Maaf Login Gagal');
      redirect(base_url('auth'));
    }  
  }

  public function register()
  {
    $this->load->view('pages/register');
  }

  public function registerAction()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $fullname = $this->input->post('fullname');

    $check = $this->Model_auth->cekUsername($username);

    if ($check) {
      $this->session->set_flashdata('auth', 'Username Terpakai');
      redirect(base_url('auth/register'));
    } else {
      $data = array(
        'username' => $username,
        'password' => md5($password),
        'fullname' => $fullname,
      );

      $this->Model_auth->register($data);
      $this->session->set_flashdata('auth', 'Register Suksess');
      redirect(base_url('auth'));
    }
  }
  public function logout()
  {
    $param = array('id_user');
    $this->session->unset_userdata($param);
    $this->session->set_flashdata('auth', 'Anda Telah Keluar');
    redirect(base_url('auth'));
  }
}