<script>
    var url_delete = "<?= site_url('admin/pegawai/hapus_pegawai/'); ?>";
</script>
<script src="<?= base_url('assets/script/user.js'); ?>"></script>

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
                            <b>DATA PEGAWAI</b>
                        </h2>
                        <hr>
                        <a  href="javascript:void(0)" class="btn btn-success waves-effect">
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
                                        <th width="25%">Nama Pegawai</th>
                                        <th width="15%">Email</th>
                                        <th width="15%">Unit Kerja</th>
                                        <th width="15%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($pegawai as $row) { ?>
                                        <?php
                                            $unit = $this->db->where('id_unit', $row->unit_kerja)->get('unit')->row();
                                        ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $row->nip ?></td>
                                            <td><?= $row->nama_pegawai ?></td>
                                            <td><?= $row->email ?></td>
                                            <td><?= $unit->nama_unit ?></td>
                                            <td>
                                                <a href="#" class="btn btn-success btn-sm">
                                                    <i class="material-icons">remove_red_eye</i>
                                                </a>
                                                <a href="javascript:void(0)" onclick="hapus(<?= $row->id_pegawai ?>)" class="btn btn-danger btn-sm">
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
