<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kehadiran extends Admin_Controller {

	public function __construct() {
		parent::__construct();
		
        $this->halaman = 'kehadiran';
        $this->id_admin = $this->session->userdata('id_admin');
	}
	
	public function index() {

      $data = [
         'halaman'    => $this->halaman,
         'main'       => 'admin/kehadiran',
      ];
      
      $this->load->view('layouts/template', $data);
  }

  public function detail() {

      $data = [
         'halaman'    => $this->halaman,
         'main'       => 'admin/kehadiran_jadwal',
         'jadwal'    => $this->db->get('jadwal')->result()
      ];
      
      $this->load->view('layouts/template', $data);
  }

  public function detail_kehadiran() {

      $data = [
         'halaman'    => $this->halaman,
         'main'       => 'admin/detail_kehadiran',
      ];
      
      $this->load->view('layouts/template', $data);
  }
}