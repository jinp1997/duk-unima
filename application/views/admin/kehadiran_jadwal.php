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
                            <b>JADWAL PERKULIAHAN MAHASISWA</b>
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <a href="<?= base_url('admin/kehadiran') ?>" class="btn btn-danger btn-sm">
                                <i class="material-icons">keyboard_arrow_left</i><span>KEMBALI</span>
                            </a>
                            <hr>
                            <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th width="40%">Nama Matakuliah</th>
                                        <th width="5%">SKS</th>
                                        <th width="25%">Jadwal</th>
                                        <th width="25%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($jadwal as $row) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $row->mata_kuliah ?></td>
                                            <td><?= $row->sks ?></td>
                                            <td><?= $row->jam ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/kehadiran/detail_kehadiran') ?>" class="btn btn-primary btn-sm">
                                                    <i class="material-icons">visibility</i><span>LIHAT KEHADIRAN</span>
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
