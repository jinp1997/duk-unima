<?php
    $level = $this->session->userdata('level');
    if ($level == 'admin') {
        $nama = $this->session->userdata('nama_admin');
        $no_induk = '-';
    } else {
        $nama = $this->session->userdata('nama_pegawai');
        $no_induk = $this->session->userdata('nip');
    }
?>

<section>
    <aside id="leftsidebar" class="sidebar">
        <div class="user-info">
            <div class="image">
                <img src="<?= base_url('assets/new-assets/images/user.png') ?>" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $nama ?></div>
                <div class="email"><?= $no_induk ?></div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <!-- <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li> -->
                        <li><a href="#" data-toggle="modal" data-target="#logoutModal"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="menu">
            <ul class="list">
                <li class="header">MAIN MENU</li>

                <?php if ($level == 'admin') { ?>

                    <li class="<?= ($halaman == 'dashboard') ? 'active' : ''; ?>">
                        <a href="<?= site_url('admin/dashboard') ?>">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="<?= ($halaman == 'pangkat') ? 'active' : ''; ?>">
                        <a href="<?= site_url('admin/pangkat') ?>">
                            <i class="material-icons">list</i>
                            <span>Data Pangkat</span>
                        </a>
                    </li>

                    <li class="<?= ($halaman == 'agama') ? 'active' : ''; ?>">
                        <a href="<?= site_url('admin/agama') ?>">
                            <i class="material-icons">list</i>
                            <span>Data Agama</span>
                        </a>
                    </li>

                    <li class="<?= ($halaman == 'unit') ? 'active' : ''; ?>">
                        <a href="<?= site_url('admin/unit') ?>">
                            <i class="material-icons">list</i>
                            <span>Data Unit Kerja</span>
                        </a>
                    </li>

                    <li class="<?= ($halaman == 'pegawai') ? 'active' : ''; ?>">
                        <a href="<?= site_url('admin/pegawai') ?>">
                            <i class="material-icons">person</i>
                            <span>Data Pegawai (TENDIK)</span>
                        </a>
                    </li>

                    <li class="<?= ($halaman == 'pegawai_dosen') ? 'active' : ''; ?>">
                        <a href="<?= site_url('admin/pegawai_dosen') ?>">
                            <i class="material-icons">people</i>
                            <span>Data Pegawai (DOSEN)</span>
                        </a>
                    </li>

                <?php } else { ?>

                    <li class="<?= ($halaman == 'dashboard') ? 'active' : ''; ?>">
                        <a href="<?= site_url('dashboard') ?>">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>

                <?php } ?>
            </ul>
        </div>

        <div class="legal">
            <div class="copyright">
                &copy; <?= date('Y') ?> UNIVERSITAS NEGERI MANADO
            </div>
            <div class="version">
                Design By : <b>TIM PENGEMBANG SI UNIMA</b>
            </div>
        </div>
    </aside>
</section>

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Konfirmasi
                </h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Apakah anda ingin keluar?</div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Tidak</button>
                <?php if ($level == 'admin') { ?>
                    <a class="btn btn-primary" href="<?= site_url('admin/login/logout') ?>">Ya</a>  
                <?php } else { ?>
                    <a class="btn btn-primary" href="<?= site_url('login/logout') ?>">Ya</a>  
                <?php } ?>              
            </div>
        </div>
    </div>
</div>