<?php  
	$keseluruhan  = $this->db->get('pegawai_dosen')->num_rows();
	$terdaftar  = $this->db->where('status', 'AKTIF')->get('pegawai_dosen')->num_rows();
	$tidak_aktif  = $this->db->where('status', 'TIDAK AKTIF')->get('pegawai_dosen')->num_rows();
	$tugas  = $this->db->where('status', 'TUGAS BELAJAR')->get('pegawai_dosen')->num_rows();
	$fakultas   = $this->db->group_by('fakultas')->get('pegawai_dosen')->result();
	$pendidikan = $this->db->group_by('pendidikan')->get('pegawai_dosen')->result();
	$jabatan_akademik = $this->db->group_by('jabatan_akademik')->get('pegawai_dosen')->result();

    $total_realisasi = 10;
    $penetapan = 100;
?>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>

        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>REKAPITULASI TENAGA PENDIDIK (DOSEN)</b>
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
                                <div class="info-box bg-cyan hover-expand-effect">
                                    <div class="icon">
                                        <i class="material-icons">account_circle</i>
                                    </div>
                                    <div class="content">
                                        <div class="text">DATA JUMLAH DOSEN KESELURUHAN</div>
                                        <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><b><?= $keseluruhan ?></b></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
                                <div class="info-box bg-green hover-expand-effect">
                                    <div class="icon">
                                        <i class="material-icons">account_circle</i>
                                    </div>
                                    <div class="content">
                                        <div class="text">DATA JUMLAH DOSEN AKTIF</div>
                                        <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><b><?= $terdaftar ?></b></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
                                <div class="info-box bg-red hover-expand-effect">
                                    <div class="icon">
                                        <i class="material-icons">account_circle</i>
                                    </div>
                                    <div class="content">
                                        <div class="text">DATA JUMLAH DOSEN TIDAK AKTIF</div>
                                        <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><b><?= $tidak_aktif ?></b></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
                                <div class="info-box bg-orange hover-expand-effect">
                                    <div class="icon">
                                        <i class="material-icons">account_circle</i>
                                    </div>
                                    <div class="content">
                                        <div class="text">DATA JUMLAH DOSEN TUGAS BELAJAR</div>
                                        <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><b><?= $tugas ?></b></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>REKAPITULASI TENAGA PENDIDIK (PER FAKULTAS)</b>
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <?php foreach ($fakultas as $rows) { ?>
                            	<?php
                            		$jlh_fakultas = $this->db->where('fakultas', $rows->fakultas)->get('pegawai_dosen')->num_rows();
                            	?>
	                            <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
	                                <div class="info-box bg-green hover-expand-effect">
	                                    <div class="icon">
	                                        <i class="material-icons">people</i>
	                                    </div>
	                                    <div class="content">
	                                        <div class="text"><?= $rows->fakultas ?></div>
	                                        <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><b><?= $jlh_fakultas ?></b></div>
	                                    </div>
	                                </div>
	                            </div>
	                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>REKAPITULASI TENAGA PENDIDIK (PENDIDIKAN TERAKHIR)</b>
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <?php foreach ($pendidikan as $rows) { ?>
                            	<?php
                            		$jlh_pendidikan = $this->db->where('pendidikan', $rows->pendidikan)->get('pegawai_dosen')->num_rows();
                            	?>
	                            <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
	                                <div class="info-box bg-cyan hover-expand-effect">
	                                    <div class="icon">
	                                        <i class="material-icons">people</i>
	                                    </div>
	                                    <div class="content">
	                                        <div class="text"><?= $rows->pendidikan ?></div>
	                                        <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><b><?= $jlh_pendidikan ?></b></div>
	                                    </div>
	                                </div>
	                            </div>
	                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>REKAPITULASI TENAGA PENDIDIK (JABATAN AKADEMIK)</b>
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <?php foreach ($jabatan_akademik as $rows) { ?>
                            	<?php
                            		$jlh_jabatan_akademik = $this->db->where('jabatan_akademik', $rows->jabatan_akademik)->get('pegawai_dosen')->num_rows();
                            	?>
	                            <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
	                                <div class="info-box bg-red hover-expand-effect">
	                                    <div class="icon">
	                                        <i class="material-icons">people</i>
	                                    </div>
	                                    <div class="content">
	                                        <div class="text"><?= $rows->jabatan_akademik ?></div>
	                                        <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><b><?= $jlh_jabatan_akademik ?></b></div>
	                                    </div>
	                                </div>
	                            </div>
	                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
