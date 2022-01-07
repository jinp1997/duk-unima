<?php  
    $nip = $this->session->userdata('nip');
?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                <b>DATA PEGAWAI UNIMA</b>
                <small>Silahkan Melakukan Pengisian Data Pegawai Universitas Negeri Manado</small>
                <hr>
            </h2>
        </div>
        
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <a href="<?= site_url('pegawai') ?>">
                    <div class="card">
                        <div class="header bg-red" align="center">
                            <h2>
                                <i class="material-icons" style="font-size: 30pt; font-align: center;" align="center">account_circle</i>
                                <br>
                                <b style="font-size: 15pt;">INFORMASI UTAMA</b>
                            </h2>
                        </div>
                        <div class="body" align="center">
                            Berisi tentang Informasi Data Utama dari masing-masing Pegawai Universitas Negeri Manado 
                            <hr>
                            Status : 
                            <?php  
                                $pegawai = $this->db->where('nip', $nip)->get('pegawai')->row();

                                if (empty($pegawai)) {
                                    $status = '<span class="text-danger"><b>BELUM VERIFIKASI</b></span>';
                                } else if (empty($pegawai) || $pegawai->status == '0') {
                                    $status = '<span class="text-danger"><b>BELUM VERIFIKASI</b></span>';
                                } else {
                                    $status = '<span class="text-success"><b>SUDAH VERIFIKASI</b></span>';
                                }
                            ?>
                            <?= $status ?>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <a href="<?= site_url('riwayat_cpns') ?>">
                    <div class="card">
                        <div class="header bg-cyan" align="center">
                            <h2>
                                <i class="material-icons" style="font-size: 30pt; font-align: center;" align="center">account_circle</i>
                                <br>
                                <b style="font-size: 15pt;">DATA CPNS/PNS</b>
                            </h2>
                        </div>
                        <div class="body" align="center">
                            Berisi tentang Informasi Data CPNS dan PNS dari masing-masing Pegawai Universitas Negeri Manado 
                            <hr>
                            Status : 
                            <?php  
                                $riwayat_cpns = $this->db->where('nip', $nip)->get('riwayat_cpns')->row();

                                if (empty($riwayat_cpns)) {
                                    $status = '<span class="text-danger"><b>BELUM VERIFIKASI</b></span>';
                                } else if (empty($riwayat_cpns) || $riwayat_cpns->status == '0') {
                                    $status = '<span class="text-danger"><b>BELUM VERIFIKASI</b></span>';
                                } else {
                                    $status = '<span class="text-success"><b>SUDAH VERIFIKASI</b></span>';
                                }
                            ?>
                            <?= $status ?>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <a href="<?= site_url('riwayat_pangkat') ?>">
                    <div class="card">
                        <div class="header bg-green" align="center">
                            <h2>
                                <i class="material-icons" style="font-size: 30pt; font-align: center;" align="center">account_circle</i>
                                <br>
                                <b style="font-size: 15pt;">DATA KEPANGKATAN</b>
                            </h2>
                        </div>
                        <div class="body" align="center">
                            Berisi tentang Informasi Data Pangkat/Golongann dari Pegawai Universitas Negeri Manado 
                            <hr>
                            Status : 
                            <?php  
                                $riwayat_pangkat = $this->db->where('nip', $nip)->get('riwayat_pangkat')->row();

                                if (empty($riwayat_pangkat)) {
                                    $status = '<span class="text-danger"><b>BELUM VERIFIKASI</b></span>';
                                } else if (empty($riwayat_pangkat) || $riwayat_pangkat->status == '0') {
                                    $status = '<span class="text-danger"><b>BELUM VERIFIKASI</b></span>';
                                } else {
                                    $status = '<span class="text-success"><b>SUDAH VERIFIKASI</b></span>';
                                }
                            ?>
                            <?= $status ?>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <a href="<?= site_url('riwayat_pendidikan') ?>">
                    <div class="card">
                        <div class="header bg-orange" align="center">
                            <h2>
                                <i class="material-icons" style="font-size: 30pt; font-align: center;" align="center">account_circle</i>
                                <br>
                                <b style="font-size: 15pt;">DATA PENDIDIKAN</b>
                            </h2>
                        </div>
                        <div class="body" align="center">
                            Berisi tentang Informasi Data Pendidikan dari masing-masing Pegawai Universitas Negeri Manado 
                            <hr>
                            Status : 
                            <?php  
                                $riwayat_pendidikan = $this->db->where('nip', $nip)->get('riwayat_pendidikan')->row();

                                if (empty($riwayat_pendidikan)) {
                                    $status = '<span class="text-danger"><b>BELUM VERIFIKASI</b></span>';
                                } else if (empty($riwayat_pendidikan) || $riwayat_pendidikan->status == '0') {
                                    $status = '<span class="text-danger"><b>BELUM VERIFIKASI</b></span>';
                                } else {
                                    $status = '<span class="text-success"><b>SUDAH VERIFIKASI</b></span>';
                                }
                            ?>
                            <?= $status ?>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <a href="<?= site_url('riwayat_jabatan') ?>">
                    <div class="card">
                        <div class="header bg-grey" align="center">
                            <h2>
                                <i class="material-icons" style="font-size: 30pt; font-align: center;" align="center">account_circle</i>
                                <br>
                                <b style="font-size: 15pt;">DATA JABATAN</b>
                            </h2>
                        </div>
                        <div class="body" align="center">
                            Berisi tentang Informasi Data Jabatan dari masing-masing Pegawai Universitas Negeri Manado 
                            <hr>
                            Status : 
                            <?php  
                                $riwayat_jabatan = $this->db->where('nip', $nip)->get('riwayat_jabatan')->row();

                                if (empty($riwayat_jabatan)) {
                                    $status = '<span class="text-danger"><b>BELUM VERIFIKASI</b></span>';
                                } else if (empty($riwayat_jabatan) || $riwayat_jabatan->status == '0') {
                                    $status = '<span class="text-danger"><b>BELUM VERIFIKASI</b></span>';
                                } else {
                                    $status = '<span class="text-success"><b>SUDAH VERIFIKASI</b></span>';
                                }
                            ?>
                            <?= $status ?>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>