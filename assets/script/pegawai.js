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
            $('[name="no_pendaftaran"]').val(data.no_pendaftaran);
            $('[name="nama"]').val(data.nama);

            $('[name="nisn"]').val(data.nisn);

            $('[name="jalur_seleksi_id"]').val(data.jalur_seleksi_id);

            $('[name="email"]').val(data.email);
            $('[name="asal_sekolah"]').val(data.asal_sekolah);

            $('[name="password"]').val(data.password);

            $('[name="tempat_lahir"]').val(data.tempat_lahir);

            $('[name="tanggal_lahir"]').val(data.tanggal_lahir);

            $('[name="jenis_kelamin"]').val(data.jenis_kelamin);

            $('[name="kode_prodi"]').val(data.kode_prodi);

            $('[name="KdFakultas"]').val(data.NmFakultas);

            $('[name="agama"]').val(data.agama);

            $('[name="kewarganegaraan"]').val(data.kewarganegaraan);

            $('[name="nama_negara"]').val(data.nama_negara);

            $('[name="alamat"]').val(data.alamat);

            $('[name="rt"]').val(data.rt);

            $('[name="rw"]').val(data.rw);

            $('[name="kode_pos"]').val(data.kode_pos);

            $('[name="status_id"]').val(data.status_id);

            $('[name="jumlah_adik"]').val(data.jumlah_adik);

            $('[name="jumlah_kakak"]').val(data.jumlah_kakak);

            $('[name="no_telp"]').val(data.no_telp);

            $('[name="id_provinsi"]').val(data.id_provinsi).trigger('change');

            

            $('div#kk_foto').show();

            $('div#pas_foto').show();

            $('div#keluarga_foto').show();

            $('div#sk_kip').show();



            if ((data.kk_foto == null) || (data.kk_foto == '')) {

                $('div#kk_foto').html('Tidak Ada Gambar.');

            } else {

                $('div#kk_foto').html('<img src="'+ ajax_img + data.kk_foto +'" alt="'+ data.kk_foto +'" width="20%">');

            }

            if ((data.ijazah == null) || (data.ijazah == '')) {

                $('div#ijazah').html('Tidak Ada Gambar.');

            } else {

                $('div#ijazah').html('<img src="'+ ajax_img + data.ijazah +'" alt="'+ data.ijazah +'" width="20%">');

            }

            if ((data.sk_kip == null) || (data.sk_kip == '')) {

                $('div#sk_kip').html('Tidak Ada Gambar.');

            } else {

                $('div#sk_kip').html('<img src="'+ ajax_img + data.sk_kip +'" alt="'+ data.sk_kip +'" width="20%">');

            }

            if ((data.pas_foto == null) || (data.pas_foto == '')) {

                $('div#pas_foto').html('Tidak Ada Gambar.');

            } else {

                $('div#pas_foto').html('<img src="'+ ajax_img + data.pas_foto +'" alt="'+ data.pas_foto +'" width="20%">');

            }



            if ((data.keluarga_foto == null) || (data.keluarga_foto == '')) {

                $('div#keluarga_foto').html('Tidak Ada Gambar.');

            } else {

                $('div#keluarga_foto').html('<img src="'+ ajax_img + data.keluarga_foto +'" alt="'+ data.keluarga_foto +'" width="20%">');

            }



            if ((data.ktp == null) || (data.ktp == '')) {

                $('div#ktp').html('Tidak Ada Gambar.');

            } else {

                $('div#ktp').html('<img src="'+ ajax_img + data.ktp +'" alt="'+ data.ktp +'" width="20%">');

            }



            if ((data.kip == null) || (data.kip == '')) {

                $('div#kip').html('Tidak Ada Gambar.');

            } else {

                $('div#kip').html('<img src="'+ ajax_img + data.kip +'" alt="'+ data.kip +'" width="20%">');

            }



            if ((data.kartu_pendaftaran == null) || (data.kartu_pendaftaran == '')) {

                $('div#kartu_pendaftaran').html('Tidak Ada Gambar.');

            } else {

                $('div#kartu_pendaftaran').html('<img src="'+ ajax_img + data.kartu_pendaftaran +'" alt="'+ data.kartu_pendaftaran +'" width="20%">');

            }



            if (data.id_kabkota == null) {

                getKabkota();

            } else {

                loadKabupatenById(data.id_provinsi, data.id_kabkota);

            }



            if (data.id_kecamatan == null) {

                getKecamatan();

            } else {

                loadKecamatanById(data.id_kabkota, data.id_kecamatan);

            }



            if (data.id_kelurahan == null) {

                getKelurahan();

            } else {

                loadKelurahanById(data.id_kecamatan, data.id_kelurahan);

            }

        },

        error: function (jqXHR, textStatus, errorThrown) {

            error('Data Gagal Ditampilkan');

        }

    }); 

}