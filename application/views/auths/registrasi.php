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

<body class="login-page" style="background-image: url(assets/img/bg.jpg); background-repeat: no-repeat; background-attachment: fixed; background-position: center top;">
    <div class="login-box" style="margin-top: 0px;">
        <div class="logo" align="center">
            <img src="<?= base_url('assets/img/logo.png') ?>" width="20%" align="center">
            <img width="20%" src="<?= base_url('assets/img/logo_polda.png'); ?>" alt="Logo">
            <a href="javascript:void(0);">REGIS<b>TRASI</b></a>
            <small>PENERIMAAN MAHASISWA BARU - POLDA SULUT</small>
        </div>
        <div class="card">
            <div class="body">
                <form action="<?= site_url('registrasi/registrasi_user') ?>" method="POST">
                    <div class="msg">Silahkan Isi Data Dibawah ini dengan Benar</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="nama_user" placeholder="Nama" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">input</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="no_induk" placeholder="NRP" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-blue waves-effect" type="submit">REGISTRASI</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-12">
                            Sudah Punya Akun ? Silahkan <b><u><a href="<?= base_url('login') ?>">MASUK</a></u></b>
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