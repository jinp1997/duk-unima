<script>
    var ajax_edit = "<?= site_url('pegawai/ajax_edit/'); ?>";
</script>


<?php  
    $pegawai = $this->db->where('nip', $pegawai)->get('pegawai')->row();
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
                            INFORMASI DATA UTAMA
                        </h2>
                        <hr>
                        <a href="<?= site_url('dashboard') ?>" class="btn bg-red waves-effect"><i class="material-icons">keyboard_backspace</i> KEMBALI</a>
                    </div>
                    <div class="body">
                        <?php if ($pegawai->status == '0') { ?>
                            <form class="form-horizontal" action="<?= site_url('pegawai/ubah_pagawai') ?>" method="POST" enctype="multipart/form-data">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="nama_pegawai">Nama Pegawai</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="nama_pegawai" name="nama_pegawai" class="form-control" value="<?= $pegawai->nama_pegawai ?>">
                                                <span class="help-block pull-left"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="id_satker">Unit Kerja</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <?php
                                                    $unit = $this->db->where('id_unit', $pegawai->unit_kerja)->get('unit')->row();
                                                    $dropdown = getDropDownList('unit', ['id_unit', 'nama_unit']);
                                                    echo form_dropdown('unit_kerja', $dropdown, ''.$pegawai->unit_kerja.'', 'class="form-control"');
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="id_satker">Jenis Kelamin</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <?php
                                                   $dropdown = field_enums('pegawai', 'jenis_kelamin');
                                                   echo form_dropdown('jenis_kelamin', $dropdown, ''.$pegawai->jenis_kelamin.'', 'class="form-control"');
                                                ?>
                                                <?php if (form_error('jenis_kelamin')) { ?>
                                                    <label id="jenis_kelamin" class="error" for="jenis_kelamin" style="padding-top: 6px; font-size: 9pt">
                                                        <?= form_error('jenis_kelamin'); ?>
                                                    </label>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="nik">NIK</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="nik" name="nik" class="form-control" value="<?= $pegawai->nik ?>">
                                                <span class="help-block pull-left"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="no_kk">No. KK</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="no_kk" name="no_kk" class="form-control" value="<?= $pegawai->no_kk ?>">
                                                <span class="help-block pull-left"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="agama">Agama</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <?php
                                                    $agama = $this->db->where('id_agama', $pegawai->agama)->get('agama')->row();
                                                    $dropdown = getDropDownList('agama', ['id_agama', 'nama_agama']);
                                                    echo form_dropdown('agama', $dropdown, ''.$pegawai->agama.'', 'class="form-control"');
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" value="<?= $pegawai->tempat_lahir ?>">
                                                <span class="help-block pull-left"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" value="<?= $pegawai->tgl_lahir ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="alamat">Alamat</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="alamat" name="alamat" class="form-control" value="<?= $pegawai->alamat ?>">
                                                <span class="help-block pull-left"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="no_hp">No Telp/HP</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="no_hp" name="no_hp" class="form-control" value="<?= $pegawai->no_hp ?>">
                                                <span class="help-block pull-left"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="email" name="email" class="form-control" value="<?= $pegawai->email ?>">
                                                <span class="help-block pull-left"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="npwp">NPWP</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="npwp" name="npwp" class="form-control" value="<?= $pegawai->npwp ?>">
                                                <span class="help-block pull-left"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="pangkat">Pangkat/Golongan</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <?php
                                                    $pangkat = $this->db->where('id_pangkat', $pegawai->pangkat)->get('pangkat')->row();
                                                    $dropdown = getDropDownList('pangkat', ['id_pangkat', 'nama_pangkat']);
                                                    echo form_dropdown('pangkat', $dropdown, ''.$pegawai->pangkat.'', 'class="form-control"');
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="pas_foto">Pas Photo 4x6</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" id="pas_foto" name="pas_foto" class="form-control">
                                                <?php if (empty($pegawai->pas_foto)) { ?>
                                                    <b>Pas Foto Belum Diupload</b>
                                                <?php } else { ?>
                                                    <img src="<?= base_url('uploads/pas_foto/'. $pegawai->pas_foto) ?>" width="20%">
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-8 p-t-5">
                                        
                                    </div>
                                    <div class="col-xs-4">
                                        <button class="btn bg-blue waves-effect" type="submit"><i class="material-icons">done</i> SIMPAN DATA</button>
                                        <button type="button" class="btn bg-green waves-effect" data-toggle="modal" data-target="#konfirmasi"><i class="material-icons">done_all</i> VERIFIKASI DATA</button>
                                    </div>
                                </div>
                            </form>
                        <?php } else { ?>
                            <form class="form-horizontal" action="<?= site_url('pegawai/ubah_pagawai') ?>" method="POST" enctype="multipart/form-data">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="nama_pegawai">Nama Pegawai</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="nama_pegawai" name="nama_pegawai" class="form-control" value="<?= $pegawai->nama_pegawai ?>" disabled>
                                                <span class="help-block pull-left"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="id_satker">Unit Kerja</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <?php
                                                    $unit = $this->db->where('id_unit', $pegawai->unit_kerja)->get('unit')->row();
                                                    $dropdown = getDropDownList('unit', ['id_unit', 'nama_unit']);
                                                    echo form_dropdown('unit_kerja', $dropdown, ''.$pegawai->unit_kerja.'', 'class="form-control" disabled');
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="id_satker">Jenis Kelamin</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <?php
                                                   $dropdown = field_enums('pegawai', 'jenis_kelamin');
                                                   echo form_dropdown('jenis_kelamin', $dropdown, ''.$pegawai->jenis_kelamin.'', 'class="form-control" disabled');
                                                ?>
                                                <?php if (form_error('jenis_kelamin')) { ?>
                                                    <label id="jenis_kelamin" class="error" for="jenis_kelamin" style="padding-top: 6px; font-size: 9pt">
                                                        <?= form_error('jenis_kelamin'); ?>
                                                    </label>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="nik">NIK</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="nik" name="nik" class="form-control" value="<?= $pegawai->nik ?>" disabled>
                                                <span class="help-block pull-left"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="no_kk">No. KK</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="no_kk" name="no_kk" class="form-control" value="<?= $pegawai->no_kk ?>" disabled>
                                                <span class="help-block pull-left"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="agama">Agama</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <?php
                                                    $agama = $this->db->where('id_agama', $pegawai->agama)->get('agama')->row();
                                                    $dropdown = getDropDownList('agama', ['id_agama', 'nama_agama']);
                                                    echo form_dropdown('agama', $dropdown, ''.$pegawai->agama.'', 'class="form-control" disabled');
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" value="<?= $pegawai->tempat_lahir ?>"  disabled>
                                                <span class="help-block pull-left"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" value="<?= $pegawai->tgl_lahir ?>"  disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="alamat">Alamat</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="alamat" name="alamat" class="form-control" value="<?= $pegawai->alamat ?>"  disabled>
                                                <span class="help-block pull-left"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="no_hp">No Telp/HP</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="no_hp" name="no_hp" class="form-control" value="<?= $pegawai->no_hp ?>"  disabled>
                                                <span class="help-block pull-left"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="email" name="email" class="form-control" value="<?= $pegawai->email ?>"  disabled>
                                                <span class="help-block pull-left"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="npwp">NPWP</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="npwp" name="npwp" class="form-control" value="<?= $pegawai->npwp ?>"  disabled>
                                                <span class="help-block pull-left"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="pangkat">Pangkat/Golongan</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <?php
                                                    $pangkat = $this->db->where('id_pangkat', $pegawai->pangkat)->get('pangkat')->row();
                                                    $dropdown = getDropDownList('pangkat', ['id_pangkat', 'nama_pangkat']);
                                                    echo form_dropdown('pangkat', $dropdown, ''.$pegawai->pangkat.'', 'class="form-control" disabled');
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="pas_foto">Pas Photo 4x6</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" id="pas_foto" name="pas_foto" class="form-control" disabled>
                                                <?php if (empty($pegawai->pas_foto)) { ?>
                                                    <b>Pas Foto Belum Diupload</b>
                                                <?php } else { ?>
                                                    <img src="<?= base_url('uploads/pas_foto/'. $pegawai->pas_foto) ?>" width="20%">
                                                <?php } ?>
                                            </div>
                                        </div>
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

<div class="modal fade" id="konfirmasi" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="smallModalLabel">Konfirmasi Data</h4>
            </div>
            <div class="modal-body">
                Apakah Anda Yakin Akan Verifikasi Data Anda ?
            </div>
            <div class="modal-footer">
                <a  href="<?= base_url('pegawai/verifikasi/'. $pegawai->nip) ?>" type="button" class="btn btn-link waves-effect">VERIFIKASI</a>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">TUTUP</button>
            </div>
        </div>
    </div>
</div>

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