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
                            <b>KEHADIRAN MAHASISWA</b>
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th width="20%">NIM</th>
                                        <th width="35%">Nama Mahasiswa</th>
                                        <th width="10%">Kelas</th>
                                        <th width="15%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  
                                        $mahasiswa = $this->db->get('mahasiswa')->result();
                                    ?>
                                    <?php $no=1; foreach ($mahasiswa as $row) { ?>
                                        <?php
                                            $user  = $this->db->where('no_induk', $row->nrp)->get('user')->row();
                                            $kelas = $this->db->where('id_kelas', $row->kelas)->get('kelas')->row();
                                        ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $row->nim ?></td>
                                            <td><?= $user->nama_user ?></td>
                                            <td><?= $kelas->nama_kelas ?></td>
                                            <td>
                                                <a href="<?= base_url('admin/kehadiran/detail') ?>" class="btn btn-primary btn-sm">
                                                    <i class="material-icons">visibility</i><span>LIHAT JADWAL KELAS</span>
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
