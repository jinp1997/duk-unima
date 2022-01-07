<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Pendaftar_Controller {

	public function __construct() {
		parent::__construct();
		
        $this->halaman  = 'dashboard';
        $this->nip = $this->session->userdata('nip');
	}
	
	public function index() {
      $data = [
         'halaman'    => $this->halaman,
         'main'       => 'home',
         'nip'        => $this->nip
      ];
      
      $this->load->view('layouts/template', $data);
  	}
}