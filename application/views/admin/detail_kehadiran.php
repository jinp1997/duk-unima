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
                            <b>KEHADIRAN PERKULIAHAN MAHASISWA</b>
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <a href="<?= base_url('admin/kehadiran/detail') ?>" class="btn btn-danger btn-sm">
                                <i class="material-icons">keyboard_arrow_left</i><span>KEMBALI</span>
                            </a>
                            <hr>
                            <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th width="20%">Pertemuan Ke</th>
                                        <th width="25%">Hari/Tanggal</th>
                                        <th width="35%">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>Senin, 06 September 2021</td>
                                        <td bgcolor="green" style="color: white">HADIR</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>Senin, 13 September 2021</td>
                                        <td bgcolor="green" style="color: white">HADIR</td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>Senin, 20 September 2021</td>
                                        <td bgcolor="red" style="color: white">TIDAK HADIR</td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>4</td>
                                        <td>Senin, 27 September 2021</td>
                                        <td bgcolor="green" style="color: white">HADIR</td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>Senin, 06 Oktober 2021</td>
                                        <td bgcolor="green" style="color: white">HADIR</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
