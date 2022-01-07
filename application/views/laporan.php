<?php  
    $id_user    = $this->session->userdata('id_user');
    $satker     = $this->db->get('satker')->result();
    $user       = $this->db->where('id_user', $id_user)->get('user')->row();
    $registrasi = $this->db->where('no_induk', $user->no_induk)->get('registrasi')->row();
?>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>HOME</h2>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            TAMBAH LAPORAN BULANAN AKTIVITAS PERKULIAHAN
                        </h2>
                    </div>
                    <div class="body">
                        <form class="form-horizontal" action="<?= site_url('home/tambah_laporan') ?>" method="POST" enctype="multipart/form-data">
                            <?php  
                                $mhs = $this->db->where('nrp', $nrp)->get('mahasiswa')->row();
                            ?>
                            <input type="hidden" id="nim" name="nim" value="<?= $mhs->nim ?>">
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="judul_laporan">Judul Laporan</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="judul_laporan" name="judul_laporan" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="file_laporan">File Laporan</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="file" id="file_laporan" name="file_laporan" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-8 p-t-5">
                                    
                                </div>
                                <div class="col-xs-4">
                                    <button class="btn bg-blue waves-effect" type="submit"><i class="material-icons">done</i> SIMPAN DATA</button>
                                    <a href="<?= site_url('home') ?>" class="btn bg-red waves-effect"><i class="material-icons">keyboard_backspace</i> KEMBALI</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
