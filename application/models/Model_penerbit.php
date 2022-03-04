<?php

class Model_penerbit extends CI_Model
{
  public function tampilpenerbit()
  {
    $tampil = $this->db->query("SELECT * FROM penerbit");

    // $tampil = $this->db->get('penerbit');

    return $tampil->result();
    // return $tampil->result_array();
  }

  public function tambahData()
  {
  }

  public function ubahData()
  {
  }

  public function hapusData()
  {
  }
}