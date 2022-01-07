var save_method;
var table;

function reload_table() {
    window.location.reload();
}

function tambah() {
    save_method = 'add';
    $('#form')[0].reset();
    $('.form-group').removeClass('has-error');
    $('.help-block').empty();
    $('#modal_form').modal('show');
    $('.modal-title').text('Tambah Data Dosen');
}

function simpan() {
    $('#btnSave').text('menyimpan...');
    $('#btnSave').attr('disabled',true);    
    var url;

    if(save_method == 'add') {
        url = ajax_add;        
    } else {
        url = ajax_update;        
    }
    
    var formData = new FormData($('#form')[0]);
    $.ajax({        
        url : url,
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        dataType: "JSON",
        success: function(data) {
            if(data.status) {
                $('.progress').hide();
                $('#modal_form').modal('hide');
                success("Data Berhasil Disimpan");
                reload_table();
            } else {
                for (var i = 0; i < data.inputerror.length; i++) {
                    $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error');
                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]);
                }
            }
            $('#btnSave').text('Simpan');
            $('#btnSave').attr('disabled',false);            
        },
        error: function (jqXHR, textStatus, errorThrown) {
            error('Data Gagal Disimpan');
            $('#btnSave').text('Simpan');
            $('#btnSave').attr('disabled',false);            
        }
    });
}

function edit(id_barang) {
    save_method = 'update';
    $('#form')[0].reset();
    $('.form-group').removeClass('has-error');
    $('.help-block').empty();

    $.ajax({
        url : ajax_edit + id_barang,
        type: "GET",
        dataType: "JSON",
        success: function(data) {
            $('[name="id_barang"]').val(data.id_barang);
            $('[name="nama_barang"]').val(data.nama_barang);
            $('[name="id_jenis"]').val(data.id_jenis);
            $('[name="kategori"]').val(data.kategori);
            $('[name="stok"]').val(data.stok);
            $('[name="id_ruangan"]').val(data.id_ruangan);
            $('[name="id_satuan"]').val(data.id_satuan);
            $('[name="harga"]').val(data.harga);
            $('[name="baik"]').val(data.baik);
            $('[name="rusak"]').val(data.rusak);
            $('[name="hilang"]').val(data.hilang);

            $('#modal_form').modal('show');
            $('.modal-title').text('Ubah Data Barang');
        },
        error: function (jqXHR, textStatus, errorThrown) {
            error('Gagal');
        }
    });    
}

function hapus(id_barang) {
    if(confirm('Anda yakin ingin menghapus data ini?')) {        
        $.ajax({
            url : ajax_delete + id_barang,
            type: "POST",
            dataType: "JSON",
            success: function(data) {
                success("Data Berhasil Dihapus");
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                error('Data Gagal Dihapus');
            }
        });
    }
}

function success(text) {    
    $('.notifikasi').fadeIn().delay(3000).fadeOut('slow').html('<div class="alert alert-success role="alert"">' + text + '</div>');
}

function error(text) {
    $('.notifikasi').fadeIn().delay(3000).fadeOut('slow').html('<div class="alert alert-danger role="alert"">' + text + '</div>');
}

function detail(id_barang) {    
    $.ajax({
        url : url_detail + id_barang,
        type: "GET",
        dataType: "JSON",
        success: function(data) {
            $('div#nama_barang').html(data.nama_barang);
            $('div#kategori').html(data.kategori);
            $('div#stok').html(data.stok);
            $('div#nama_jenis').html(data.nama_jenis);
            $('div#nama_ruangan').html(data.nama_ruangan);
            $('div#nama_satuan').html(data.nama_satuan);
            $('div#baik').html(data.baik);
            $('div#rusak').html(data.rusak);
            $('div#hilang').html(data.hilang);
            $('div#harga').html(data.harga);

            $('#modal_detail').modal('show');
            $('.modal-title').text('Detail Barang');
        },
        error: function (jqXHR, textStatus, errorThrown) {
            error('Gagal mengambil data');
        }
    });    
}