<script>
    var ajax_edit = "<?= site_url('pegawai/ajax_edit/'); ?>";
</script>


<?php  
    $pegawai = $this->db->where('nip', $pegawai)->get('riwayat_pangkat')->row();
?>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>RIWAYAT KEPANGKATAN</h2>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            INFORMASI DATA RIWAYAT KEPANGKATAN
                        </h2>
                        <hr>
                        <a href="<?= site_url('dashboard') ?>" class="btn bg-red waves-effect"><i class="material-icons">keyboard_backspace</i> KEMBALI</a>
                        <a href="<?= site_url('riwayat_pangkat/add_data') ?>" class="btn bg-green waves-effect"><i class="material-icons">control_point</i> TAMBAH DATA</a>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Golongan</th>
                                        <th>Masa Tahun</th>
                                        <th>Masa Bulan</th>
                                        <th>TMT Golongan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;  foreach ($pangkat as $row) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $row->golongan ?></td>
                                            <td><?= $row->masa_tahun ?></td>
                                            <td><?= $row->masa_bulan ?></td>
                                            <td><?= $row->tmt_golongan ?></td>
                                            <td>
                                                <a href="<?= site_url('riwayat_pangkat/detail/'.$row->id_pangkat) ?>" class="btn btn-circle btn-success waves-circle"> <i class="material-icons">remove_red_eye</i></a>
                                                <button class="btn btn-circle btn-warning waves-circle"> <i class="material-icons">edit</i></button>
                                                <button class="btn btn-circle btn-danger waves-circle"> <i class="material-icons">delete</i></button> 
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

<script type="text/javascript">
    $(document).ready(function() {
        edit();

        $("input").change(function(){
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
        });

        $("textarea").change(function(){
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
        });

        $("select").change(function(){
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
        });
    });



    function edit() {
        $.ajax({
            url : ajax_edit,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('[name="nama_pegawai"]').val(data.nama_pegawai);
                $('[name="nip"]').val(data.nip);
                $('[name="unit_kerja"]').val(data.unit_kerja);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                error('Data Gagal Ditampilkan');
            }
        }); 
    }
</script>