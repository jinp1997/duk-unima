<?php
class Pendaftar_Controller extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
        
        $level    = $this->session->userdata('level');
        $is_login = $this->session->userdata('is_login');

        if (!$is_login) {
            redirect('login');
            return;
        }

        if ($level !== 'pendaftar') {
            redirect(site_url('login'));
            return;
        }
    }
}
