<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat_cpns extends MY_Controller {

	public function __construct() {
		parent::__construct();
		
        $this->halaman = 'riwayat_cpns';
        $this->nip = $this->session->userdata('nip');
	}
	
	public function index() {
      $data = [
         'halaman'    => $this->halaman,
         'main'       => 'riwayat_cpns',
         'pegawai'    => $this->nip
      ];
      
      $this->load->view('layouts/template', $data);
  }

  public function tambah_data()
  {
      if ( ! empty($_FILES['sk_cpns']['name'])) {
          $upload = $this->file_upload('sk_cpns');
          $sk_cpns = $upload;
      } else {
          $sk_cpns = null;
      } 

      if ( ! empty($_FILES['sk_pns']['name'])) {
          $upload = $this->file_upload('sk_pns');
          $sk_pns = $upload;
      } else {
          $sk_pns = null;
      } 

      $data = array(
         'nip'      => $this->nip,
         'no_cpns'  => $this->input->post('no_cpns'),
         'tgl_cpns' => $this->input->post('tgl_cpns'),
         'no_pns'   => $this->input->post('no_pns'),
         'tgl_pns'  => $this->input->post('tgl_pns'),
         'tmt_cpns' => $this->input->post('tmt_cpns'),
         'tmt_pns'  => $this->input->post('tmt_pns'),
         'sk_cpns'  => $sk_cpns,
         'sk_pns'   => $sk_pns,
      );

      $this->db->insert('riwayat_cpns', $data);
      redirect('riwayat_cpns');
  }

  public function ubah_pagawai()
  {
      $pegawai = $this->db->where('nip', $this->nip)->get('riwayat_cpns')->row();

      if ( ! empty($_FILES['sk_cpns']['name'])) {
          $upload = $this->file_upload('sk_cpns');
          $sk_cpns = $upload;
      } else {
          $sk_cpns = $pegawai->sk_cpns;
      }

      if ( ! empty($_FILES['sk_pns']['name'])) {
          $upload = $this->file_upload('sk_pns');
          $sk_pns = $upload;
      } else {
          $sk_pns = $pegawai->sk_pns;
      }

      $data = array(
         'nip'      => $this->nip,
         'no_cpns'  => $this->input->post('no_cpns'),
         'tgl_cpns' => $this->input->post('tgl_cpns'),
         'no_pns'   => $this->input->post('no_pns'),
         'tgl_pns'  => $this->input->post('tgl_pns'),
         'tmt_cpns' => $this->input->post('tmt_cpns'),
         'tmt_pns'  => $this->input->post('tmt_pns'),
         'sk_cpns'  => $sk_cpns,
         'sk_pns'   => $sk_pns,
      );

      $update = $this->db->where('nip', $this->nip)->update('riwayat_cpns',$data);
      redirect('riwayat_cpns');
  }

  private function file_upload($gambar) {
      $config['upload_path']   = './uploads/riwayat_cpns';
      $config['allowed_types'] = 'pdf';
      $config['max_size']      = 2048;
      //$config['max_width']     = 3920;
      //$config['max_height']    = 7080;
      $config['file_name']     = round(microtime(true) * 1000);

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload($gambar)) {
          $this->session->set_flashdata('error', $this->upload->display_errors('',''));
          $this->session->set_flashdata('penting', true);
          redirect('pegawai/error');
      }

      return $this->upload->data('file_name');
  } 
}