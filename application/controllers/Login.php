<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller {	

    public function __construct() {
        parent::__construct();
        $this->load->model('Login_pendaftar_model', 'login');
    }

	public function index() {
        if (!$_POST) {
            $input = (object) $this->login->getDefaultValues();
        } else {
            $input = (object) $this->input->post(null, true);
        }

        if (!$this->login->validate()) {
            $this->load->view('auths/login_pendaftar', compact('input'));
            return;
        }

        if ($this->login->login($input)) {            
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('message', 'Username atau password salah, Coba lagi!');
        }

        redirect('login');
	}

	public function logout() {		
        $this->login->logout();
        redirect('login');
	}
}