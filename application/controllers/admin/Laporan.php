<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends Admin_Controller {

	public function __construct() {
		parent::__construct();
		
        $this->halaman = 'laporan';
        $this->id_admin = $this->session->userdata('id_admin');
	}
	
	public function index() {

      $data = [
         'halaman'    => $this->halaman,
         'main'       => 'admin/laporan',
         'laporan'    => $this->db->get('laporan')->result()
      ];
      
      $this->load->view('layouts/template', $data);
  }
}