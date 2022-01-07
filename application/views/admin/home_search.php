<?php  
    $id_admin = $this->session->userdata('id_admin');
    $this->db2 = $this->load->database('second', TRUE);
    $fakultas = $this->db2->get('fakultas')->result();
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
                            DATA AKREDITASI JURUSAN/PRODI UNIVERSITAS NEGERI MANADO
                            <small>Rekap Peringkat Akreditasi Prodi di Universitas Negeri Manado</small>
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                <span>Tampil Berdasarkan :</span>
                            </div>
                            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                                <form action="<?= site_url('admin/dashboard/filter') ?>" id="form_validation" method="GET">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <select class="form-control show-tick" id="fakultas" name="fakultas">
                                                <option value="semua">Semua Prodi</option>
                                                <?php foreach ($fakultas as $rows) { ?>
                                                    <option value="<?= $rows->fakKode ?>"><?= $rows->fakNamaResmi ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary waves-effect" type="submit">FILTER</button>
                                </form>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <hr>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Peringkat</th>
                                            <th>Jumlah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>A</th>
                                            <td><?= $this->db->where('fakultas', $fakultas_cari)->where('status', '1')->where('peringkat', 'A')->get('prodi_akreditasi')->num_rows(); ?></td>
                                            <td><a href="#" class="btn btn-sm btn-danger">Lihat Prodi</a></td>
                                        </tr>
                                        <tr>
                                            <th>B</th>
                                            <td><?= $this->db->where('fakultas', $fakultas_cari)->where('status', '1')->where('peringkat', 'B')->get('prodi_akreditasi')->num_rows(); ?></td>
                                            <td><a href="#" class="btn btn-sm btn-danger">Lihat Prodi</a></td>
                                        </tr>
                                        <tr>
                                            <th>C</th>
                                            <td><?= $this->db->where('fakultas', $fakultas_cari)->where('status', '1')->where('peringkat', 'C')->get('prodi_akreditasi')->num_rows(); ?></td>
                                            <td><a href="#" class="btn btn-sm btn-danger">Lihat Prodi</a></td>
                                        </tr>
                                        <tr>
                                            <th>Minimum (Prodi Baru)</th>
                                            <td><?= $this->db->where('fakultas', $fakultas_cari)->where('status', '1')->where('peringkat', 'Minimum')->get('prodi_akreditasi')->num_rows(); ?></td>
                                            <td><a href="#" class="btn btn-sm btn-danger">Lihat Prodi</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Peringkat</th>
                                            <th>Jumlah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>UNGGUL</th>
                                            <td><?= $this->db->where('fakultas', $fakultas_cari)->where('status', '1')->where('peringkat', 'UNGGUL')->get('prodi_akreditasi')->num_rows(); ?></td>
                                            <td><a href="#" class="btn btn-sm btn-danger">Lihat Prodi</a></td>
                                        </tr>

                                        <tr>
                                            <th>BAIK SEKALI</th>
                                            <td><?= $this->db->where('fakultas', $fakultas_cari)->where('status', '1')->where('peringkat', 'BAIK SEKALI')->get('prodi_akreditasi')->num_rows(); ?></td>
                                            <td><a href="#" class="btn btn-sm btn-danger">Lihat Prodi</a></td>
                                        </tr>

                                        <tr>
                                            <th>BAIK</th>
                                            <td><?= $this->db->where('fakultas', $fakultas_cari)->where('status', '1')->where('peringkat', 'BAIK')->get('prodi_akreditasi')->num_rows(); ?></td>
                                            <td><a href="#" class="btn btn-sm btn-danger">Lihat Prodi</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-bordered">
                                    <tr class="success">
                                        <td style="text-align: center; width: 250px; ">Jumlah Prodi</td>
                                        <td style="text-align: center;"><b><?= $this->db2->get('program_studi')->num_rows(); ?></b></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- #END# Tabs With Custom Animations -->
    </div>
</section>
