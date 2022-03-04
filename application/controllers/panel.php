<?php
defined('BASEPATH') or exit('No direct script access allowed');

class panel extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    check_not_login();
    $this->load->model('Model_book');
    $this->load->model('Model_penerbit');
  }

  public function index()
  {

    // load header
    $this->load->view('layout_admin/header');
    // load nav
    $this->load->view('layout_admin/nav');
    // load content pages
    $this->load->view('pages/panel');
    // load footer
    $this->load->view('layout_admin/footer');
  }
}