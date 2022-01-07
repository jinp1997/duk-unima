var save_method;
var table;

function reload_table() {
    window.location.reload();
}

function hapus(id_laporan) {
    if(confirm('Anda yakin ingin menghapus data ini?')) {
        $.ajax({
            url : url_delete + id_laporan,
            type: "POST",
            dataType: "JSON",
            success: function(data) {
                success('Data berhasil dihapus');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                error('Data gagal dihapus');
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

function warning(text) {
    $('.notifikasi').fadeIn().delay(3000).fadeOut('slow').html('<div class="alert alert-warning role="alert"">' + text + '</div>');
}