<?php

if (!defined('BASEPATH'))
   exit('No direct script access allowed');

class Satker extends Admin_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('Satker_model', 'satker');

        $this->halaman = 'satker';
    }

    public function index() {
        $data = [
            'halaman' => $this->halaman,
            'main'    => 'admin/satker/list',
            'satker'  => $this->db->get('satker')->result()
        ];

        $this->load->view('layouts/template', $data);
    }

    public function ajax_add() {  

        $data = [    
            'nama_satker' => $this->input->post('nama_satker'),
        ];

        $insert = $this->satker->insert($data);

        if ($insert) {
            echo json_encode(array("status" => TRUE));
        } else {
            echo json_encode(array("status" => FALSE));
        }
   }

    public function ajax_edit($id_satker) {
        $data = $this->db->where('id_satker', $id_satker)->get('satker')->row();
        echo json_encode($data);
    }

    public function ajax_update() {
        $id_satker = $this->input->post('id_satker');

        $data = [            
            'nama_satker' => $this->input->post('nama_satker'),
        ];

        $update = $this->satker->where('id_satker', $id_satker)->update($data);
        
        if ($update) {
            echo json_encode(array("status" => TRUE));
        } else {
            echo json_encode(array("status" => FALSE));
        }
   }

    public function ajax_delete($id_satker) {
      $delete = $this->db->where('id_satker', $id_satker)->delete('satker');
      
      if ($delete) {
         echo json_encode(array("status" => TRUE));
      } else {
         echo json_encode(array("status" => FALSE));
      }
   } 
}