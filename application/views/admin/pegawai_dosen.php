<script>
    var ajax_add    = "<?= site_url('admin/pegawai_dosen/ajax_add/'); ?>";
    var ajax_edit   = "<?= site_url('admin/pegawai_dosen/ajax_edit/'); ?>";
    var ajax_update = "<?= site_url('admin/pegawai_dosen/ajax_update/'); ?>";
    var url_detail  = "<?= site_url('admin/pegawai_dosen/detail/'); ?>";
    var ajax_delete = "<?= site_url('admin/pegawai_dosen/hapus_pegawai/'); ?>";
</script>
<script src="<?= base_url('assets/script/pegawai_dosen.js'); ?>"></script>

<?php  
    $prodi    = $this->db->get('prodi')->result();
?>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>DATA PEGAWAI (DOSEN)</b>
                        </h2>
                        <hr>
                        <a  href="javascript:void(0)" onclick="tambah()" class="btn btn-success waves-effect">
                            <i class="material-icons">control_point</i>
                            <span>TAMBAH DATA</span>
                        </a>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th width="20%">NIP</th>
                                        <th width="25%">Nama</th>
                                        <th width="15%">Fakultas</th>
                                        <th width="15%">Jabatan Akademik</th>
                                        <th width="15%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($pegawai as $row) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $row->nip ?></td>
                                            <td><?= $row->nama ?></td>
                                            <td><?= $row->fakultas ?></td>
                                            <td><?= $row->jabatan_akademik ?></td>
                                            <td>
                                                <a href="#" class="btn btn-success btn-sm">
                                                    <i class="material-icons">remove_red_eye</i>
                                                </a>
                                                <a href="javascript:void(0)" onclick="hapus(<?= $row->id_dosen ?>)" class="btn btn-danger btn-sm">
                                                    <i class="material-icons">delete</i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">                
                <h4 class="modal-title"></h4>
                <hr>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" name="id_dosen" />

                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="nama_dosen">Nama Dosen</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="nama_dosen" name="nama_dosen" class="form-control" placeholder="Masukkan Nama Dosen">
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="gelar_depan">Gelar Depan</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="gelar_depan" name="gelar_depan" class="form-control" placeholder="Masukkan Gelar Depan">
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="nama_dosen">Prodi</label>
                        </div>
                        <div class="col-lg-9 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <select name="prodi" id="prodi" class="form-control" >
                                    <option value="">- Pilih Prodi / Jurusan -</option>
                                    <?php foreach ($prodi as $data) { ?>
                                        <option value="<?= $data->id_prodi ?>"><?= $data->nama_prodi ?></option>
                                    <?php } ?>
                                </select>  
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="simpan()" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>