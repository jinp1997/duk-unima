<script>
    var url_delete = "<?= site_url('admin/registrasi/ajax_delete/'); ?>";
    var url_terima = "<?= site_url('admin/registrasi/terima/'); ?>";
    var url_tolak  = "<?= site_url('admin/registrasi/tolak/'); ?>";
</script>
<script src="<?= base_url('assets/script/registrasi.js'); ?>"></script>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                POLDA SULUT
                <small>#</small>
            </h2>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="notifikasi"></div>
                <div class="card">
                    <div class="header">
                        <h2>
                            DATA PENDAFTAR
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th width="20%">NRP</th>
                                        <th width="20%">Nama</th>
                                        <th width="20%">Satker</th>
                                        <th width="35%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($registrasi as $row) { ?>
                                        <?php 
                                            $satker = $this->db->where('id_satker', $row->id_satker)->get('satker')->row();
                                        ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $row->no_induk ?></td>
                                            <td><?= $row->nama ?></td>
                                            <td><?= $satker->nama_satker ?></td>
                                            <td>
                                                <a href="javascript:void(0)" onclick="terima(<?= $row->id_registrasi ?>)" type="button" class="btn btn-success waves-effect">
                                                    <i class="material-icons">offline_pin</i>
                                                    <span><b>TERIMA</b></span>
                                                </a>
                                                <a href="javascript:void(0)" onclick="tolak(<?= $row->id_registrasi ?>)" type="button" class="btn btn-danger waves-effect">
                                                    <i class="material-icons">cancel</i>
                                                    <span><b>TOLAK</b></span>
                                                </a>
                                                <a href="<?= site_url('admin/registrasi/detail/'. $row->id_registrasi) ?>" class="btn btn-primary btn-sm">
                                                    <i class="material-icons">visibility</i><span>LIHAT DATA</span>
                                                </a>
                                                <a href="javascript:void(0)" onclick="hapus(<?= $row->id_registrasi ?>)" class="btn btn-warning btn-sm">
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
        <!-- #END# Exportable Table -->
    </div>
</section>