<?php

class Model_book extends CI_Model
{
  public function tampilData()
  {
    $tampil = $this->db->query("SELECT * FROM buku LEFT JOIN penerbit ON penerbit.nama_penerbit = buku.penerbit ORDER BY id_buku DESC");

    return $tampil->result();
    // return $tampil->result_array();
  }

  public function tampilDataID($id)
  {
    $this->db->where('id_buku', $id);
    return $this->db->get('buku')->row();
  }
  public function tambahData($data)
  {
    $this->db->insert('buku',$data);
  }

  public function ubahData($data, $id)
  {
    $this->db->where('id_buku',$id);
    $this->db->update('buku',$data);
  }

  public function hapusData($id)
  {
    $this->db->where('id_buku', $id)->delete('buku');
    return true;
  }
}
