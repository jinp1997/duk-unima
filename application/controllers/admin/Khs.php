<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Khs extends Admin_Controller {

	public function __construct() {
		parent::__construct();
		
        $this->halaman = 'khs';
        $this->id_admin = $this->session->userdata('id_admin');
	}
	
	public function index() {

      $data = [
         'halaman'    => $this->halaman,
         'main'       => 'admin/khs',
      ];
      
      $this->load->view('layouts/template', $data);
  }

  public function detail() {

      $data = [
         'halaman'    => $this->halaman,
         'main'       => 'admin/detail_khs',
         'jadwal'     => $this->db->get('jadwal')->result()
      ];
      
      $this->load->view('layouts/template', $data);
  }
}