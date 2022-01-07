<?php

if (!defined('BASEPATH'))
   exit('No direct script access allowed');

class Registrasi extends Admin_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('Registrasi_model', 'registrasi');

        $this->halaman = 'registrasi';
    }

    public function index() {
        $data = [
            'halaman'    => $this->halaman,
            'main'       => 'admin/registrasi/list',
            'registrasi' => $this->db->where('status', '1')->get('registrasi')->result()
        ];

        $this->load->view('layouts/template', $data);
    }

    public function detail($id_registrasi) {
        $data = [
            'halaman'    => $this->halaman,
            'main'       => 'admin/registrasi/detail',
            'registrasi' => $this->db->where('id_registrasi', $id_registrasi)->get('registrasi')->row()
        ];

        $this->load->view('layouts/template', $data);
    }

    public function ajax_list() {
        $draw   = $_REQUEST['draw'];
        $length = $_REQUEST['length'];
        $start  = $_REQUEST['start'];
        $search = $_REQUEST['search']["value"];

        $total  = $this->registrasi->get_total();
        $output = array(
            "length"          => $length,
            "draw"            => $draw,
            "recordsTotal"    => $total,
            "recordsFiltered" => $total            
        );

        if ($search !== "") {            
            $list = $this->registrasi->get_datatables_search($search, $start, $length);
        } else {
            $list = $this->registrasi->get_datatables($start, $length);
        }

        if($search !== "") {
            $total_search = $this->registrasi->get_total_search($search);            
            $output = array(                
                "recordsTotal"    => $total_search,
                "recordsFiltered" => $total_search
            );
        }

        $data = array();
        $no = $start + 1;
        foreach ($list->result() as $registrasi) {

            $row = array();
            $row[] = $no;
            $row[] = $registrasi->no_induk;
            $row[] = $registrasi->nama;
            $row[] = $registrasi->nama_satker;
            $row[] = '<img src="'.base_url('uploads/'. $registrasi->pas_foto) .'" width="50%">';
            $row[] = '<a href="javascript:void(0)" onclick="detail('.$registrasi->id_registrasi.')" class="btn btn-primary btn-sm">
                        Detail Data
                      </a>
                      <a href="javascript:void(0)" onclick="terima('.$registrasi->id_registrasi.')" class="btn btn-success btn-sm">
                        Terima
                      </a>
                      <a href="javascript:void(0)" onclick="tolak('.$registrasi->id_registrasi.')" class="btn btn-danger btn-sm">
                        Tolak
                      </a>';

            $data[] = $row;
            $no++;
        }

        $output['data'] = $data;

        echo json_encode($output);
        exit();
    }

    public function terima($id_registrasi) {
        $registrasi = $this->db->where('id_registrasi', $id_registrasi)->get('registrasi')->row();

        $data = [
            'status'         => "2",
            'tgl_verifikasi' => date('Y-m-d'),
        ];
      
      $this->db->where('id_registrasi', $id_registrasi)->update('registrasi', $data);

      echo json_encode(array("status" => TRUE));
    }

    public function tolak($id_registrasi) {
        $registrasi = $this->db->where('id_registrasi', $id_registrasi)->get('registrasi')->row();

        $data = [
            'status'         => "3",
            'tgl_verifikasi' => date('Y-m-d'),
        ];
      
      $this->db->where('id_registrasi', $id_registrasi)->update('registrasi', $data);

      echo json_encode(array("status" => TRUE));
    }

    public function ajax_edit($id_registrasi) {
        $data = $this->db->where('id_registrasi', $id_registrasi)->get('registrasi')->row();
        echo json_encode($data);
    }

    public function ajax_delete($id_registrasi) {
      $delete = $this->db->where('id_registrasi', $id_registrasi)->delete('registrasi');
      
      if ($delete) {
         echo json_encode(array("status" => TRUE));
      } else {
         echo json_encode(array("status" => FALSE));
      }
   } 
}