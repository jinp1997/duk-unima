<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller {

	public function __construct() {
		parent::__construct();
		
        $this->halaman = 'dashboard';
        $this->id_admin = $this->session->userdata('id_admin');
	}
	
	public function index() {

      $data = [
         'halaman'    => $this->halaman,
         'main'       => 'admin/home',
      ];
      
      $this->load->view('layouts/template', $data);
  }
}