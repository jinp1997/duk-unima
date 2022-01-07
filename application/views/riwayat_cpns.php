<script>
    var ajax_edit = "<?= site_url('pegawai/ajax_edit/'); ?>";
</script>


<?php  
    $pegawai = $this->db->where('nip', $pegawai)->get('riwayat_cpns')->row();
?>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>RIWAYAT CPNS/PNS</h2>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            INFORMASI DATA RIWAYAT CPNS/PNS
                        </h2>
                        <small>
                            Catatan : <br>
                            File SK CPNS dan PNS diupload dengan <b>Format PDF</b>
                        </small>
                        <hr>
                        <a href="<?= site_url('dashboard') ?>" class="btn bg-red waves-effect"><i class="material-icons">keyboard_backspace</i> KEMBALI</a>
                    </div>
                    <div class="body">
                        <?php if (empty($pegawai)) { ?>
                            <form class="form-horizontal" action="<?= site_url('riwayat_cpns/tambah_data') ?>" method="POST" enctype="multipart/form-data">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="no_cpns">Nomor Surat Keputusan CPNS</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="no_cpns" name="no_cpns" class="form-control">
                                                <span class="help-block pull-left"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="tgl_cpns">Tanggal Surat Keputusan CPNS</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="date" id="tgl_cpns" name="tgl_cpns" class="form-control">
                                                <span class="help-block pull-left"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="no_pns">Nomor Surat Keputusan PNS</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="no_pns" name="no_pns" class="form-control">
                                                <span class="help-block pull-left"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="tgl_pns">Tanggal Surat Keputusan PNS</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="date" id="tgl_pns" name="tgl_pns" class="form-control">
                                                <span class="help-block pull-left"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="tmt_cpns">TMT CPNS</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="date" id="tmt_cpns" name="tmt_cpns" class="form-control">
                                                <span class="help-block pull-left"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="tmt_pns">TMT PNS</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="date" id="tmt_pns" name="tmt_pns" class="form-control">
                                                <span class="help-block pull-left"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="sk_cpns">SK CPNS</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" id="sk_cpns" name="sk_cpns" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="sk_pns">SK PNS</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" id="sk_pns" name="sk_pns" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-10 p-t-5">
                                        
                                    </div>
                                    <div class="col-xs-2">
                                        <button class="btn bg-blue waves-effect" type="submit"><i class="material-icons">done</i> SIMPAN DATA</button>
                                    </div>
                                </div>
                            </form>
                        <?php } else { ?>
                            <form class="form-horizontal" action="<?= site_url('riwayat_cpns/ubah_pagawai') ?>" method="POST" enctype="multipart/form-data">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="no_cpns">Nomor Surat Keputusan CPNS</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="no_cpns" name="no_cpns" class="form-control" value="<?= $pegawai->no_cpns ?>">
                                                <span class="help-block pull-left"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="tgl_cpns">Tanggal Surat Keputusan CPNS</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="date" id="tgl_cpns" name="tgl_cpns" class="form-control" value="<?= $pegawai->tgl_cpns ?>">
                                                <span class="help-block pull-left"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="no_pns">Nomor Surat Keputusan PNS</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="no_pns" name="no_pns" class="form-control" value="<?= $pegawai->no_pns ?>">
                                                <span class="help-block pull-left"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="no_pns">Tanggal Surat Keputusan PNS</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="date" id="no_pns" name="no_pns" class="form-control" value="<?= $pegawai->tgl_pns ?>">
                                                <span class="help-block pull-left"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="tmt_cpns">TMT CPNS</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="date" id="tmt_cpns" name="tmt_cpns" class="form-control" value="<?= $pegawai->tmt_cpns ?>">
                                                <span class="help-block pull-left"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="tmt_pns">TMT PNS</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="date" id="tmt_pns" name="tmt_pns" class="form-control" value="<?= $pegawai->tmt_pns ?>">
                                                <span class="help-block pull-left"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="sk_cpns">SK CPNS</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" id="sk_cpns" name="sk_cpns" class="form-control">
                                                <?php if (empty($pegawai->sk_cpns)) { ?>
                                                    <b>SK CPNS Belum Diupload</b>
                                                <?php } else { ?>
                                                    <a href="<?= base_url('uploads/riwayat_cpns/'. $pegawai->sk_cpns) ?>" class="btn bg-green waves-effect" target="_blank">
                                                        <i class="material-icons">remove_red_eye</i> LIHAT SK CPNS
                                                    </a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="sk_pns">SK PNS</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" id="sk_pns" name="sk_pns" class="form-control">
                                                <?php if (empty($pegawai->sk_pns)) { ?>
                                                    <b>SK PNS Belum Diupload</b>
                                                <?php } else { ?>
                                                    <a href="<?= base_url('uploads/riwayat_cpns/'. $pegawai->sk_pns) ?>" class="btn bg-green waves-effect" target="_blank">
                                                        <i class="material-icons">remove_red_eye</i> LIHAT SK PNS
                                                    </a>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-10 p-t-5">
                                        
                                    </div>
                                    <div class="col-xs-2">
                                        <button class="btn bg-blue waves-effect" type="submit"><i class="material-icons">done</i> SIMPAN DATA</button>
                                    </div>
                                </div>
                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $(document).ready(function() {
        edit();

        $("input").change(function(){
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
        });

        $("textarea").change(function(){
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
        });

        $("select").change(function(){
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
        });
    });



    function edit() {
        $.ajax({
            url : ajax_edit,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('[name="nama_pegawai"]').val(data.nama_pegawai);
                $('[name="nip"]').val(data.nip);
                $('[name="unit_kerja"]').val(data.unit_kerja);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                error('Data Gagal Ditampilkan');
            }
        }); 
    }
</script>