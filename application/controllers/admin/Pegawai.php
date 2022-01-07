<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends Admin_Controller {

	public function __construct() {
		parent::__construct();
		
        $this->halaman = 'pegawai';
        $this->id_admin = $this->session->userdata('id_admin');
	}
	
	public function index() {

      $data = [
         'halaman' => $this->halaman,
         'main'    => 'admin/pegawai',
         'pegawai'    => $this->db->get('pegawai')->result()
      ];
      
      $this->load->view('layouts/template', $data);
  }

  public function hapus_pegawai($id_pegawai) {
      $delete = $this->db->where('id_pegawai', $id_pegawai)->delete('pegawai');
      
      if ($delete) {
         echo json_encode(array("status" => TRUE));
      } else {
         echo json_encode(array("status" => FALSE));
      }
  } 
}