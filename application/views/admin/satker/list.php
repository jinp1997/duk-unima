<script>
    var url_add    = "<?= site_url('admin/satker/ajax_add'); ?>";
    var url_edit   = "<?= site_url('admin/satker/ajax_edit/'); ?>";
    var url_update = "<?= site_url('admin/satker/ajax_update/'); ?>";
    var url_delete = "<?= site_url('admin/satker/ajax_delete/'); ?>";
</script>
<script src="<?= base_url('assets/script/satker.js'); ?>"></script>

<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="notifikasi"></div>
                <div class="card">
                    <div class="header">
                        <h2>
                            Daftar Satuan Kerja
                        </h2>
                        <hr>
                        <a  href="javascript:void(0)" onclick="tambah()" class="btn btn-success waves-effect">
                            <i class="material-icons">control_point</i>
                            <span>TAMBAH DATA</span>
                        </a>
                    </div>

                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="dataTable" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">No</th>
                                        <th style="text-align: center;">Nama Satker</th> 
                                        <th style="text-align: center; width: 15%;">Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no = 1; foreach ($satker as $row) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $row->nama_satker ?></td>
                                            <td style="text-align: center;">
                                                <a href="javascript:void(0)" onclick="edit(<?= $row->id_satker ?>)" class="btn btn-warning btn-sm">
                                                    <i class="material-icons">create</i>
                                                </a>
                                                <a href="javascript:void(0)" onclick="hapus(<?= $row->id_satker ?>)" class="btn btn-danger btn-sm">
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

<div class="modal fade" id="modal_form" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-md">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <hr>
            </div>
            <div class="modal-body">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" name="id_satker" />

                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label for="nama_satker">Nama Satker</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="nama_satker" name="nama_satker" class="form-control" placeholder="Isi Nama Satker">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="simpan()" class="btn btn-link waves-effect">SAVE CHANGES</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>