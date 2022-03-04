<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Book extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    check_not_login();
    $this->load->model('Model_book');
    $this->load->model('Model_penerbit');
  }

  // public function test()
  // {
  //   $data = array(
  //     'list' => $this->Model_book->tampilData(),
  //     'nama'  => 'Azzam',
  //     'header'  => 'Tampil Buku',
  //   );
  //   $this->load->view('layout_admin/header');
  //   $this->load->view('layout_admin/nav');
  //   $this->load->view('pages/book/tampil2',$data);
  //   $this->load->view('layout_admin/footer');
  // }

  public function index()
  {

    $data = array(
      'list' => $this->Model_book->tampilData(),
      'nama'  => 'Azzam',
      'header'  => 'Tampil Buku',
    );

    $data_header = array(
      'header' => 'Tampil Buku'
    );

    // load header
    $this->load->view('layout_admin/header',$data_header);
    // load nav
    $this->load->view('layout_admin/nav');
    // load content pages
    $this->load->view('pages/book/tampil2',$data);
    // load footer
    $this->load->view('layout_admin/footer');
  }

  public function insertBook()
  {
    {

      $data = array(
        'list_penerbit' => $this->Model_penerbit->tampilpenerbit(),
        'nama'  => 'Azzam',
        'header'  => 'Tampil Buku',
      );
  
      // load header
      $this->load->view('layout/header');
      // load nav
      $this->load->view('layout/nav');
      // load content pages
      $this->load->view('pages/book/input', $data);
      // load footer
      $this->load->view('layout/footer');
    }
  }
  public function isertaction()
  {
    $judul     = $this->input->post('judul');
    $tahun     = $this->input->post('tahun');
    $penerbit  = $this->input->post('penerbit');

    // call funcion upload data
    $img = $this->uploadFile();

    if ($img['status'] == 'error') {
      $this->session->set_flashdata('error_img', '<span>' . $img['error'] . '</span>');
      $this->insertBook();
    } else {
      $data = array(
        'judul'     => $judul,
        'tahun'     => $tahun,
        'penerbit'  => $penerbit,
        'gambar'    => $img['upload_data']['file_name']
      );
      
    
    $this->Model_book->tambahData($data);
    $this->session->set_flashdata('massage', 'Tambah Data Sukses');
    // if ($simpan) {
      redirect(base_url('book'));
    // } else {
    //   redirect(base_url('book/insertBook'));
    }
  }

  public function updateBook($id)
  {
    $id_buku = $id;
    $data_buku = $this->Model_book->tampilDataID($id);

    $data = array(
      'row' => $data_buku,
      'list_penerbit' => $this->Model_penerbit->tampilpenerbit(),
    );
    // load header
    $this->load->view('layout/header');
    // load nav
    $this->load->view('layout/nav');
    // load content pages
    $this->load->view('pages/book/edit', $data);
    // load footer
    $this->load->view('layout/footer');
  }

  public function updateAction()
  {
    $judul     = $this->input->post('judul');
    $tahun     = $this->input->post('tahun');
    $penerbit  = $this->input->post('penerbit');
    $id_buku   = $this->input->post('id_buku');

    // call funcion upload data
    $img = $this->uploadFile();

    if ($_FILES['file']['name'] != '' and $img['status'] == 'Error') {
      $this->session->set_flashdata('error_img', '<span>' . $img['error'] . '</span>');
      $this->updateBook($id_buku);
    } else {

      $row = $this->Model_book->tampilDataID($id_buku);
      if ($row->gambar != null and $_FILES['file']['name'] != ''){
        unlink("./uploads/$row->gambar");
      }
      $data = array(
      'judul'     => $judul,
      'tahun'     => $tahun,
      'penerbit'  => $penerbit,
    );      

    if ($_FILES['file']['name'] != '') $data['gambar'] = $img['upload_data']['file_name'];

    $this->Model_book->ubahData($data, $id_buku);
    $this->session->set_flashdata('massage', 'Ubah Data Sukses');
    // if ($simpan) {
      redirect(base_url('book'));
    // } else {
    //   redirect(base_url('book/insertBook'));
    // }
    }
  }

  public function deleteBook($id)
  {
    $row = $this->Model_book->tampilDataID($id);
    if ($row->gambar != null){
      unlink("./uploads/$row->gambar");
    }

    $this->Model_book->hapusData($id);
    $this->session->set_flashdata('massage', 'Hapus Data Sukses');
    redirect(base_url('book'));
  }

  public function uploadFile()
  {
    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $config['max_size']  = '1024';
    // $config['max_width']  = '1024';
    // $config['max_height']  = '768';
    
    $this->load->library('upload', $config);
    
    if (!$this->upload->do_upload('file')) {
      return array('error' => $this->upload->display_errors(), 'status' => 'error');
    } else{
      return array('upload_data' => $this->upload->data(), 'status' => 'success');
    }
  } 
}
