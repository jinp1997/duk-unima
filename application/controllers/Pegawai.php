<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends MY_Controller {

	public function __construct() {
		parent::__construct();
		
        $this->halaman = 'pegawai';
        $this->nip = $this->session->userdata('nip');
	}
	
	public function index() {
      $data = [
         'halaman'    => $this->halaman,
         'main'       => 'pegawai',
         'pegawai'    => $this->nip
      ];
      
      $this->load->view('layouts/template', $data);
  }

  public function ubah_pagawai()
  {
      $pegawai = $this->db->where('nip', $this->nip)->get('pegawai')->row();

      if ( ! empty($_FILES['pas_foto']['name'])) {
          $upload = $this->file_upload('pas_foto');
          $pas_foto = $upload;
      } else {
          $pas_foto = $pegawai->pas_foto;
      }

      $data = array(
         'nama_pegawai'  => $this->input->post('nama_pegawai'),
         'unit_kerja'    => $this->input->post('unit_kerja'),
         'alamat'        => $this->input->post('alamat'),
         'no_hp'         => $this->input->post('no_hp'),
         'email'         => $this->input->post('email'),
         'nik'           => $this->input->post('nik'),
         'no_kk'           => $this->input->post('no_kk'),
         'agama'         => $this->input->post('agama'),
         'tgl_lahir'     => $this->input->post('tgl_lahir'),
         'pangkat'       => $this->input->post('pangkat'),
         'npwp'          => $this->input->post('npwp'),
         'jenis_kelamin' => $this->input->post('jenis_kelamin'),
         'tempat_lahir'  => $this->input->post('tempat_lahir'),
         'pas_foto'      => $pas_foto,
      );

      $update = $this->db->where('nip', $this->nip)->update('pegawai',$data);
      redirect('pegawai');
  }

  public function ajax_edit() {
      $sql = "SELECT * 
              FROM pegawai p
              WHERE p.nip = '$this->nip'";
      $data = $this->db->query($sql)->row();

      echo json_encode($data);
  }

  public function verifikasi($nip) {
      $pegawai = $this->db->where('nip', $nip)->get('pegawai')->row();

      $data = [
          'status'            => "1",
      ];
    
    $this->db->where('nip', $nip)->update('pegawai',$data);

    redirect('home');
  } 

  private function file_upload($gambar) {
      $config['upload_path']   = './uploads/pas_foto';
      $config['allowed_types'] = 'jpg|jpeg|png';
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