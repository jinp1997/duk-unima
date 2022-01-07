<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_dosen extends Admin_Controller {

	public function __construct() {
		parent::__construct();
    $this->load->model('Pegawai_dosen_model', 'pegawai_dosen');
		
    $this->halaman = 'pegawai_dosen';
    $this->id_admin = $this->session->userdata('id_admin');
	}
	
	public function index() {

      $data = [
         'halaman' => $this->halaman,
         'main'    => 'admin/pegawai_dosen',
         'pegawai'    => $this->db->get('pegawai_dosen')->result()
      ];
      
      $this->load->view('layouts/template', $data);
  }

  public function hapus_pegawai($id_dosen) {
      $delete = $this->db->where('id_dosen', $id_dosen)->delete('pegawai_dosen');
      
      if ($delete) {
         echo json_encode(array("status" => TRUE));
      } else {
         echo json_encode(array("status" => FALSE));
      }
  } 

  public function ajax_add()
  {
    $data = array(
       'nama'             => $this->input->post('nama'),
       'nip'              => $this->input->post('nip'),
       'tgl_lahir'        => $this->input->post('tgl_lahir'),
       'gelar_depan'      => $this->input->post('gelar_depan'),
       'gelar_belakang'   => $this->input->post('gelar_belakang'),
       'jabatan_akademik' => $this->input->post('jabatan_akademik'),
       'tmt_jabatan'      => $this->input->post('tmt_jabatan'),
       'nidn'             => $this->input->post('nidn'),
       'no_serdos'        => $this->input->post('no_serdos'),
       'tgl_serdos'       => $this->input->post('tgl_serdos'),
       'kum_terakhir'     => $this->input->post('kum_terakhir'),
       'prodi'            => $this->input->post('prodi'),
       'status'           => $this->input->post('status'),
    );

    $insert = $this->pegawai_dosen->save($data);

    echo json_encode(array("status" => TRUE));
  }

  public function ajax_edit($nip)
  {
    $data = $this->pegawai_dosen->get_by_id($nip);      
    echo json_encode($data);
  }

  public function ajax_update()
  {
    $data = array(
       'nama'             => $this->input->post('nama'),
       'nip'              => $this->input->post('nip'),
       'tgl_lahir'        => $this->input->post('tgl_lahir'),
       'gelar_depan'      => $this->input->post('gelar_depan'),
       'gelar_belakang'   => $this->input->post('gelar_belakang'),
       'jabatan_akademik' => $this->input->post('jabatan_akademik'),
       'tmt_jabatan'      => $this->input->post('tmt_jabatan'),
       'nidn'             => $this->input->post('nidn'),
       'no_serdos'        => $this->input->post('no_serdos'),
       'tgl_serdos'       => $this->input->post('tgl_serdos'),
       'kum_terakhir'     => $this->input->post('kum_terakhir'),
       'prodi'            => $this->input->post('prodi'),
       'status'           => $this->input->post('status'),
    );
    $this->pegawai_dosen->ubah(array('nip' => $this->input->post('nip')), $data);
    echo json_encode(array("status" => TRUE));
  }

  public function detail($nip) {
    $pegawai_dosen = $this->db->where('nip', $nip)->get('pegawai_dosen')->row();
    $prodi         = $this->db->where('id_prodi', $pegawai_dosen->prodi)->get('prodi')->row();
    $fakultas      = $this->db->where('id_fakultas', $prodi->id_fakultas)->get('fakultas')->row();

    $data = [
        'nip'              => $barang->nip,
        'nama'             => $barang->nama,
        'tgl_lahir'        => $barang->tgl_lahir,
        'gelar_depan'      => $barang->gelar_depan,
        'gelar_belakang'   => $barang->gelar_belakang,
        'jabatan_akademik' => $barang->jabatan_akademik,
        'nidn'             => $barang->nidn,
        'no_serdos'        => $barang->no_serdos,
        'prodi'            => $prodi->nama_prodi,
        'fakultas'         => $fakultas->nama_fakultas,
    ];

    echo json_encode($data);
  }
}