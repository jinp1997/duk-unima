<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat_pangkat extends Pendaftar_Controller {

	public function __construct() {
		parent::__construct();
		
        $this->halaman = 'riwayat_pangkat';
        $this->nip = $this->session->userdata('nip');
	}
	
	public function index() {
      $data = [
         'halaman'    => $this->halaman,
         'main'       => 'riwayat_pangkat',
         'pegawai'    => $this->nip,
         'pangkat'    => $this->db->where('nip', $this->nip)->get('riwayat_pangkat')->result()
      ];
      
      $this->load->view('layouts/template', $data);
  }

  public function add_data() {
      $data = [
         'halaman'    => $this->halaman,
         'main'       => 'tambah_pangkat',
         'pegawai'    => $this->nip,
      ];
      
      $this->load->view('layouts/template', $data);
  }

  public function tambah_data()
  {
      if ( ! empty($_FILES['sk_pangkat']['name'])) {
          $upload = $this->file_upload('sk_pangkat');
          $sk_pangkat = $upload;
      } else {
          $sk_pangkat = null;
      } 

      $data = array(
         'nip'        => $this->nip,
         'golongan'   => $this->input->post('golongan'),
         'masa_tahun' => $this->input->post('masa_tahun'),
         'masa_bulan' => $this->input->post('masa_bulan'),
         'no_sk'      => $this->input->post('no_sk'),
         'tgl_sk'     => $this->input->post('tgl_sk'),
         'sk_pangkat' => $sk_pangkat,
      );

      $this->db->insert('riwayat_pangkat', $data);
      redirect('riwayat_pangkat');
  }

  public function ubah_pagawai()
  {
      $pegawai = $this->db->where('nip', $this->nip)->get('riwayat_pangkat')->row();

      if ( ! empty($_FILES['sk_pangkat']['name'])) {
          $upload = $this->file_upload('sk_pangkat');
          $sk_pangkat = $upload;
      } else {
          $sk_pangkat = $pegawai->sk_pangkat;
      }

      $data = array(
         'nip'        => $this->nip,
         'golongan'   => $this->input->post('golongan'),
         'masa_tahun' => $this->input->post('masa_tahun'),
         'masa_bulan' => $this->input->post('masa_bulan'),
         'no_sk'      => $this->input->post('no_sk'),
         'tgl_sk'     => $this->input->post('tgl_sk'),
         'sk_pangkat' => $sk_pangkat,
      );

      $update = $this->db->where('nip', $this->nip)->update('riwayat_pangkat',$data);
      redirect('riwayat_pangkat');
  }

  private function file_upload($gambar) {
      $config['upload_path']   = './uploads/riwayat_pangkat';
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