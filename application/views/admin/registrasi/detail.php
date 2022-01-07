<?php 
    $satker_1 = $this->db->where('id_satker', $registrasi->id_satker)->get('satker')->row();
    $agama_1 = $this->db->where('id_agama', $registrasi->agama)->get('agama')->row();
    $prodi_1 = $this->db->where('KdJurusan', $registrasi->pilihan_1)->get('ms_jurusan')->row();
    $prodi_2 = $this->db->where('KdJurusan', $registrasi->pilihan_2)->get('ms_jurusan')->row();
?>

<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                  <div class="header">
                        <h2>
                            Detail Data Pendaftar
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li>
                                <a href="<?= site_url('admin/registrasi') ?>" class="btn btn-danger waves-effect">
                                   <i class="material-icons">backspace</i>
                                    <span>KEMBALI</span>
                                </a>   
                            </li>
                        </ul>
                  </div>
                  <div class="body">
                    <div class="table-responsive">  
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <tr>
                                <td width="30%">STATUS REGISTRASI</td>
                                <td style="background-color: orange;">: <b>BELUM DIVERIFIKASI</b></td>
                            </tr>
                            <tr>
                                <td width="30%">NRP</td>
                                <td>: <b><?= $registrasi->no_induk ?></b></td>
                            </tr>
                            <tr>
                                <td>NAMA</td>
                                <td>: <b><?= $registrasi->nama ?></b></td>
                            </tr>
                            <tr>
                                <td>PILIHAN PRODI</td>
                                <td>: <b>Transformasi Digital Pelayanan Publik</b></td>
                            </tr>
                            <tr>
                                <td>SATKER</td>
                                <td>: <b><?= $satker_1->nama_satker ?></b></td>
                            </tr>
                            <tr>
                                <td>JENIS KELAMIN</td>
                                <td>: <b><?= $registrasi->jk ?></b></td>
                            </tr>
                            <tr>
                                <td>TEMPAT TANGGAL LAHIR</td>
                                <td>: <b><?= $registrasi->tempat_lahir ?>, <?= format_tanggal($registrasi->tgl_lahir) ?></b></td>
                            </tr>
                            <tr>
                                <td>GOLONGAN DARAH</td>
                                <td>: <b><?= $registrasi->gol_darah ?></b></td>
                            </tr>
                            <tr>
                                <td>EMAIL</td>
                                <td>: <b><?= $registrasi->email ?></b></td>
                            </tr>
                            <tr>
                                <td>NO HP</td>
                                <td>: <b><?= $registrasi->no_hp ?></b></td>
                            </tr>
                            <tr>
                                <td>AGAMA</td>
                                <td>: <b><?= $agama_1->nama_agama ?></b></td>
                            </tr>
                            <tr>
                                <td>NEGARA</td>
                                <td>: <b><?= $registrasi->negara ?></b></td>
                            </tr>
                            <tr>
                                <td>ALAMAT TEMPAT TINGGAL</td>
                                <td>: <b><?= $registrasi->alamat ?></b></td>
                            </tr>
                            <tr>
                                <td>KECAMATAN</td>
                                <td>: <b><?= $registrasi->kecamatan ?></b></td>
                            </tr>
                            <tr>
                                <td>KODE POS</td>
                                <td>: <b><?= $registrasi->kode_pos ?></b></td>
                            </tr>
                            <tr>
                                <td>STATUS MENIKAH</td>
                                <td>: <b><?= $registrasi->status_menikah ?></b></td>
                            </tr>
                            <tr>
                                <td>NAMA SEKOLAH</td>
                                <td>: <b><?= $registrasi->asal_sekolah ?></b></td>
                            </tr>
                            <tr>
                                <td>JURUSAN</td>
                                <td>: <b><?= $registrasi->jurusan ?></b></td>
                            </tr>
                            <tr>
                                <td>TAHUN LULUS</td>
                                <td>: <b><?= $registrasi->tahun_lulus ?></b></td>
                            </tr>
                            <tr>
                                <td>ALAMAT SEKOLAH</td>
                                <td>: <b><?= $registrasi->alamat_sekolah ?></b></td>
                            </tr>
                            <tr>
                                <td>PAS FOTO</td>
                                <td>: <img src="<?= base_url('uploads/'.$registrasi->pas_foto) ?>"></b></td>
                            </tr>
                            <tr>
                                <td>IJAZAH UMUM/SMA SEDERAJAT</td>
                                <td>: <img src="<?= base_url('uploads/'.$registrasi->ijazah_umum) ?>" width="40%"></b></td>
                            </tr>
                            <tr>
                                <td>IJAZAH KEPOLISIAN</td>
                                <td>: <img src="<?= base_url('uploads/'.$registrasi->ijazah_polisi) ?>" width="40%"></b></td>
                            </tr>
                            <tr>
                                <td>REKOMENDASI SATKER</td>
                                <td>: <img src="<?= base_url('uploads/'.$registrasi->rekomendasi) ?>" width="40%"></b></td>
                            </tr>
                        </table>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>