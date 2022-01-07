<?php
    $level = $this->session->userdata('level');
    $username = $this->session->userdata('username');

    if ($level == "admin") {
        $nama = $this->session->userdata('nama_admin');
    } else {
        $nama = $this->session->userdata('nama_pegawai');
    }
?>

<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            
        </div>
        <p>Please wait...</p>
    </div>
</div>

<div class="overlay"></div>

<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="<?= base_url() ?>">SISTEM INFORMASI KEPEGAWAIAN - <b>UNIVERSITAS NEGERI MANADO</b></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
        </div>
    </div>
</nav>