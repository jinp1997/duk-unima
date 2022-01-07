<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_pendaftar_model extends MY_Model {

	protected $table = 'pegawai';

	public function getValidationRules() {
        $validationRules = [
            [
                'field' => 'nip',
                'label' => 'nip',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'password',
                'label' => 'password',
                'rules' => 'trim|required'
            ]
        ];

        return $validationRules;
    }

    public function getDefaultValues() {
        return [
            'nip'      => '',
            'password' => '',
        ];
    }

    public function login($input) {
        $input->password = md5($input->password);

        $pegawai = $this->db->where('nip', $input->nip)
                            ->where('password', $input->password)
                            ->limit(1)
                            ->get($this->table)
                            ->row();

        if (($pegawai)) {
            $data = [
                'nama_pegawai' => $pegawai->nama_pegawai,
                'nip'          => $pegawai->nip,
                'id_pegawai'   => $pegawai->id_pegawai,
                'level'        => 'pendaftar',
                'is_login'     => true
            ];

            $this->session->set_userdata($data);
            return true;
        }

        return false;
    }   

    public function logout() {
        $data = [
            'nama_pegawai' => null,
            'nip'          => null,
            'id_pegawai'   => null,
            'level'        => null,
            'is_login'     => null
        ];
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
    }
}