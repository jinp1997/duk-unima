<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends Admin_Controller {

	public function __construct() {
		parent::__construct();
		
        $this->halaman = 'jadwal';
        $this->id_admin = $this->session->userdata('id_admin');
	}
	
	public function index() {

      $data = [
         'halaman'    => $this->halaman,
         'main'       => 'admin/jadwal',
      ];
      
      $this->load->view('layouts/template', $data);
  }

  public function detail() {

      $data = [
         'halaman'    => $this->halaman,
         'main'       => 'admin/detail_jadwal',
         'jadwal'    => $this->db->get('jadwal')->result()
      ];
      
      $this->load->view('layouts/template', $data);
  }
}