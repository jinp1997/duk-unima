<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>PENERIMAAN MAHASISWA BARU UNIMA</title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/logo.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?= base_url('assets/new-assets/plugins/bootstrap/css/bootstrap.css') ?>" rel="stylesheet" type="text/css">
    <!-- Waves Effect Css -->
    <link href="<?= base_url('assets/new-assets/plugins/node-waves/waves.css') ?>" rel="stylesheet" type="text/css">
    <!-- Animation Css -->
    <link href="<?= base_url('assets/new-assets/plugins/animate-css/animate.css') ?>" rel="stylesheet" type="text/css">
    <!-- Custom Css -->
    <link href="<?= base_url('assets/new-assets/css/style.css') ?>" rel="stylesheet" type="text/css">
</head>

<body class="login-page">
    <div class="login-box" style="margin-top: -10px;">
        <div class="logo" align="center">
            <img src="<?= base_url('assets/img/logo.png') ?>" width="20%" align="center">
            <a href="javascript:void(0);">REGIS<b>TRASI</b></a>
            <small>PENERIMAAN MAHASISWA BARU - POLDA SULUT</small>
        </div>
        <div class="card">
            <div class="body">
                <form action="#" method="POST">
                    <div class="msg">
                        <div class="alert alert-danger">
                            <strong>GAGAL</strong> Nomor Induk yang Anda Masukkan Sudah Terdaftar. Silahkan Masukkan Kembali Data Anda Dengan Benar.
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12" align="center">
                            <a href="<?= base_url('registrasi') ?>" class="btn bg-blue">REGISTRASI</button></a>
                            <a href="<?= base_url('login') ?>" class="btn bg-green">LOGIN</button></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="<?= base_url('assets/new-assets/plugins/jquery/jquery.min.js') ?>"></script>
    <!-- Bootstrap Core Js -->
    <script src="<?= base_url('assets/new-assets/plugins/bootstrap/js/bootstrap.js') ?>"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="<?= base_url('assets/new-assets/plugins/node-waves/waves.js') ?>"></script>
    <!-- Validation Plugin Js -->
    <script src="<?= base_url('assets/new-assets/plugins/jquery-validation/jquery.validate.js') ?>"></script>
    <!-- Custom Js -->
    <script src="<?= base_url('assets/new-assets/js/admin.js') ?>"></script>
    <script src="<?= base_url('assets/new-assets/js/pages/examples/sign-in.js') ?>"></script>
</body>

</html>