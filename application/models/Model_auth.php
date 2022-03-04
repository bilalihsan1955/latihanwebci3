<?php

class Model_auth extends CI_Model
{
 public function login($username, $password)
 {
   $this->db->where('username', $username) ->where('password', $password);

   return $this->db->get('user');
 }
 public function register($data)
 {
  $this->db->insert('user', $data);
 }
 public function cekUsername($username)
 {
   $this->db->where('username', $username);
 }
}