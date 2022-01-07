<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Pendaftar_Controller {

	public function __construct() {
		parent::__construct();
		
        $this->halaman  = 'home';
        $this->id_user  = $this->session->userdata('id_user');
        $this->no_induk = $this->session->userdata('no_induk');
	}
	
	public function index() {
      $data = [
         'halaman'    => $this->halaman,
         'main'       => 'home',
      ];
      
      $this->load->view('layouts/template', $data);
  }

  public function info_ukt() {
      $data = [
         'halaman'    => $this->halaman,
         'main'       => 'home_info',
         'registrasi' => $this->db->where('no_induk', $this->no_induk)->get('registrasi')->row()
      ];
      
      $this->load->view('layouts/template', $data);
  }

  public function registrasi()
  {
      if ( ! empty($_FILES['ijazah_umum']['name'])) {
          $upload = $this->file_upload('ijazah_umum');
          $ijazah_umum = $upload;
      } else {
          $ijazah_umum = null;
      } 

      if ( ! empty($_FILES['ijazah_polisi']['name'])) {
          $upload = $this->file_upload('ijazah_polisi');
          $ijazah_polisi = $upload;
      } else {
          $ijazah_polisi = null;
      } 

      if ( ! empty($_FILES['rekomendasi']['name'])) {
          $upload = $this->file_upload('rekomendasi');
          $rekomendasi = $upload;
      } else {
          $rekomendasi = null;
      } 

      if ( ! empty($_FILES['pas_foto']['name'])) {
          $upload = $this->file_upload('pas_foto');
          $pas_foto = $upload;
      } else {
          $pas_foto = null;
      } 

      $data = array(
         'nama'           => $this->session->userdata('nama_user'),
         'no_induk'       => $this->session->userdata('no_induk'),
         'email'          => $this->session->userdata('email'),
         'id_satker'      => $this->input->post('id_satker'),
         'jk'             => $this->input->post('jk'),
         'gol_darah'      => $this->input->post('gol_darah'),
         'tempat_lahir'   => $this->input->post('tempat_lahir'),
         'tgl_lahir'      => $this->input->post('tgl_lahir'),
         'no_hp'          => $this->input->post('no_hp'),
         'agama'          => $this->input->post('agama'),
         'negara'         => 'INDONESIA',
         'alamat'         => $this->input->post('alamat'),
         'kecamatan'      => $this->input->post('kecamatan'),
         'kode_pos'       => $this->input->post('kode_pos'),
         'status_menikah' => $this->input->post('status_menikah'),
         'asal_sekolah'   => $this->input->post('asal_sekolah'),
         'jurusan'        => $this->input->post('jurusan'),
         'tahun_lulus'    => $this->input->post('tahun_lulus'),
         'alamat_sekolah' => $this->input->post('alamat_sekolah'),
         'pilihan_1'      => 'TRANSFORMASI DIGITAL LAYANAN PUBLIC',
         'pilihan_2'      => 'TRANSFORMASI DIGITAL LAYANAN PUBLIC',
         'ijazah_umum'    => $ijazah_umum,
         'ijazah_polisi'  => $ijazah_polisi,
         'rekomendasi'    => $rekomendasi,
         'pas_foto'       => $pas_foto,
         'tgl_registrasi' => date('Y-m-d')
      );

      $this->db->insert('registrasi', $data);
      redirect('home');
  }

  public function update_registrasi() {
      $registrasi = $this->db->where('no_induk', $this->no_induk)->get('registrasi')->row();

      if ( ! empty($_FILES['ijazah_umum']['name'])) {
          $upload = $this->file_upload('ijazah_umum');
          $ijazah_umum = $upload;
      } else {
          $ijazah_umum = $registrasi->ijazah_umum;
      }

      if ( ! empty($_FILES['ijazah_polisi']['name'])) {
          $upload = $this->file_upload('ijazah_polisi');
          $ijazah_polisi = $upload;
      } else {
          $ijazah_polisi = $registrasi->ijazah_polisi;
      }

      if ( ! empty($_FILES['rekomendasi']['name'])) {
          $upload = $this->file_upload('rekomendasi');
          $rekomendasi = $upload;
      } else {
          $rekomendasi = $registrasi->rekomendasi;
      }

      if ( ! empty($_FILES['pas_foto']['name'])) {
          $upload = $this->file_upload('pas_foto');
          $pas_foto = $upload;
      } else {
          $pas_foto = $registrasi->pas_foto;
      }

      if (empty($this->input->post('id_satker'))) {
        $id_satker = $registrasi->id_satker;
      } else {
        $id_satker = $this->input->post('id_satker');
      }

      if (empty($this->input->post('pilihan_1'))) {
        $pilihan_1 = $registrasi->pilihan_1;
      } else {
        $pilihan_1 = $this->input->post('pilihan_1');
      }

      if (empty($this->input->post('pilihan_2'))) {
        $pilihan_2 = $registrasi->pilihan_2;
      } else {
        $pilihan_2 = $this->input->post('pilihan_2');
      }

      if (empty($this->input->post('status_menikah'))) {
        $status_menikah = $registrasi->status_menikah;
      } else {
        $status_menikah = $this->input->post('status_menikah');
      }

      if (empty($this->input->post('agama'))) {
        $agama = $registrasi->agama;
      } else {
        $agama = $this->input->post('agama');
      }

      if (empty($this->input->post('jk'))) {
        $jk = $registrasi->jk;
      } else {
        $jk = $this->input->post('jk');
      }

      $data = [            
          'nama'           => $this->session->userdata('nama_user'),
          'no_induk'       => $this->session->userdata('no_induk'),
          'email'          => $this->session->userdata('email'),
          'id_satker'      => $id_satker,
          'jk'             => $jk,
          'gol_darah'      => $this->input->post('gol_darah'),
          'tempat_lahir'   => $this->input->post('tempat_lahir'),
          'tgl_lahir'      => $this->input->post('tgl_lahir'),
          'no_hp'          => $this->input->post('no_hp'),
          'agama'          => $agama,
          'negara'         => 'INDONESIA',
          'alamat'         => $this->input->post('alamat'),
          'kecamatan'      => $this->input->post('kecamatan'),
          'kode_pos'       => $this->input->post('kode_pos'),
          'status_menikah' => $status_menikah,
          'asal_sekolah'   => $this->input->post('asal_sekolah'),
          'jurusan'        => $this->input->post('jurusan'),
          'tahun_lulus'    => $this->input->post('tahun_lulus'),
          'alamat_sekolah' => $this->input->post('alamat_sekolah'),
          'pilihan_1'      => 'TRANSFORMASI DIGITAL LAYANAN PUBLIC',
          'pilihan_2'      => 'TRANSFORMASI DIGITAL LAYANAN PUBLIC',
          'ijazah_umum'    => $ijazah_umum,
          'ijazah_polisi'  => $ijazah_polisi,
          'rekomendasi'    => $rekomendasi,
          'pas_foto'       => $pas_foto,
          'tgl_registrasi' => date('Y-m-d')
      ];

      $update = $this->db->where('no_induk', $this->no_induk)->update('registrasi',$data);
      
      redirect('home');
  }

  public function admisi()
  {

      $data = array(
         'propinsi_lahir'    => $this->input->post('propinsi_lahir'),
         'kota_lahir'        => $this->input->post('kota_lahir'),
         'propinsi_tinggal'  => $this->input->post('propinsi_tinggal'),
         'kota_tinggal'      => $this->input->post('kota_tinggal'),
         'kecamatan_tinggal' => $this->input->post('kecamatan_tinggal'),
         'kelurahan_tinggal' => $this->input->post('kelurahan_tinggal'),
         'alamat_tinggal'    => $this->input->post('alamat_tinggal'),
         'rt'                => $this->input->post('rt'),
         'rw'                => $this->input->post('rw'),
         'dusun'             => $this->input->post('dusun'),
         'tinggi_badan'      => $this->input->post('tinggi_badan'),
         'berat_badan'       => $this->input->post('berat_badan'),
         'nik'               => $this->input->post('nik'),
         'npwp'              => $this->input->post('npwp'),
         'jurusan_smta'      => $this->input->post('jurusan_smta'),
         'jenis_smta'        => $this->input->post('jenis_smta'),
         'no_ijazah'         => $this->input->post('no_ijazah'),         
         'uan_matematika'    => $this->input->post('uan_matematika'),
         'uan_inggris'       => $this->input->post('uan_inggris'),
         'uan_indonesia'     => $this->input->post('uan_indonesia'),
         'rapor_matematika'  => $this->input->post('rapor_matematika'),
         'rapor_inggris'     => $this->input->post('rapor_inggris'),
         'rapor_indonesia'   => $this->input->post('rapor_indonesia'),
         'nik_ayah'          => $this->input->post('nik_ayah'),
         'nama_ayah'         => $this->input->post('nama_ayah'),
         'pendidikan_ayah'   => $this->input->post('pendidikan_ayah'),
         'pekerjaan_ayah'    => $this->input->post('pekerjaan_ayah'),
         'nik_ibu'           => $this->input->post('nik_ibu'),
         'nama_ibu'          => $this->input->post('nama_ibu'),
         'pendidikan_ibu'    => $this->input->post('pendidikan_ibu'),
         'pekerjaan_ibu'     => $this->input->post('pekerjaan_ibu'),
         'alamat_ortu'       => $this->input->post('alamat_ortu'),
         'propinsi_ortu'     => $this->input->post('propinsi_ortu'),
         'kota_ortu'         => $this->input->post('kota_ortu'),         
         'no_ortu'           => $this->input->post('no_ortu'),
         'nama_wali'         => $this->input->post('nama_wali'),
         'pekerjaan_wali'    => $this->input->post('pekerjaan_wali'),
         'alamat_wali'       => $this->input->post('alamat_wali'),
         'status'            => '1',
         'tgl_registrasi'    => date('Y-m-d'),
      );

      $this->db->where('nrp', $this->no_induk)->update('admisi',$data);
      redirect('home');
  }

  public function verifikasi($no_induk) {
        $registrasi = $this->db->where('no_induk', $no_induk)->get('registrasi')->row();

        $data = [
            'status'            => "1",
        ];
      
      $this->db->where('no_induk', $no_induk)->update('registrasi',$data);

      redirect('home');
    }  

  private function file_upload($gambar) {
      $config['upload_path']   = './uploads/';
      $config['allowed_types'] = 'jpg|jpeg|png';
      $config['max_size']      = 2048;
      //$config['max_width']     = 3920;
      //$config['max_height']    = 7080;
      $config['file_name']     = round(microtime(true) * 1000);

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload($gambar)) {
          $this->session->set_flashdata('error', $this->upload->display_errors('',''));
          $this->session->set_flashdata('penting', true);
          redirect('home/error');
      }

      return $this->upload->data('file_name');
  } 

  public function laporan() {
      $data = [
         'halaman' => $this->halaman,
         'main'    => 'laporan',
         'nrp'     => $this->no_induk
      ];
      
      $this->load->view('layouts/template', $data);
  }

  public function tambah_laporan()
  {
      if ( ! empty($_FILES['file_laporan']['name'])) {
          $upload = $this->file_upload_laporan('file_laporan');
          $file_laporan = $upload;
      } else {
          $file_laporan = null;
      } 

      $data = array(
         'nim'           => $this->input->post('nim'),
         'judul_laporan' => $this->input->post('judul_laporan'),
         'status'        => '0',
         'file_laporan'  => $file_laporan,
         'tgl_laporan'   => date('Y-m-d')
      );

      $this->db->insert('laporan', $data);
      redirect('home');
  }

  public function hapus_laporan($id_laporan) {
      $delete = $this->db->where('id_laporan', $id_laporan)->delete('laporan');
      
      if ($delete) {
         echo json_encode(array("status" => TRUE));
      } else {
         echo json_encode(array("status" => FALSE));
      }
  } 

  private function file_upload_laporan($gambar) {
      $config['upload_path']   = './uploads/laporan';
      $config['allowed_types'] = 'pdf|docx|doc';
      $config['max_size']      = 2048;
      //$config['max_width']     = 3920;
      //$config['max_height']    = 7080;
      $config['file_name']     = round(microtime(true) * 1000);

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload($gambar)) {
          $this->session->set_flashdata('error', $this->upload->display_errors('',''));
          $this->session->set_flashdata('penting', true);
          redirect('home/error');
      }

      return $this->upload->data('file_name');
  } 
}