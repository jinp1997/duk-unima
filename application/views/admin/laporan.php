<?php  
    $terdaftar = $this->db->where('status !=', 0)->get('registrasi')->num_rows();
    $diterima  = $this->db->where('status', 2)->get('registrasi')->num_rows();
    $ditolak   = $this->db->where('status', 3)->get('registrasi')->num_rows();

    $total_realisasi = 10;
    $penetapan = 100;
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
                            <b>LAPORAN AKTIVITAS MAHASISWA</b>
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th width="20%">Tanggal Aktivitas</th>
                                        <th width="35%">Judul Aktivitas</th>
                                        <th width="25%">Laporan Aktivitas</th>
                                        <th width="15%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; foreach ($laporan as $row) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= format_tanggal($row->tgl_laporan) ?></td>
                                            <td><?= $row->judul_laporan ?></td>
                                            <td>
                                                <a href="<?= base_url('uploads/laporan/'. $row->file_laporan) ?>" class="btn btn-primary btn-sm" target="_blank">
                                                    <i class="material-icons">visibility</i><span>LIHAT FILE LAPORAN</span>
                                                </a>
                                            </td>
                                            <td>
                                                -
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
