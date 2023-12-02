<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
     }
    function save ($Nama,$Email,$Password,$IsActive) {
        $data = array (
            'Nama'=>$Nama,
            'Email'=>$Email,
            'Password'=>$Password,
            'IsActive'=>$IsActive
        );
        $this->db->insert('user',$data);
    }

   public function login($Nama, $password) {
      $this->db->where('Nama', $Nama);
      $this->db->where('password', $password);
      $query = $this->db->get('user');
      return $query->row();
   }
}