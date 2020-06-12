$(document).ready(function(e) {
    $('#edit').on('click', function() {
        const id = $(this).data('id');
        console.log('keklik');
        $.ajax({
            url: 'http://localhost/uas/uas/admin/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
              console.log('sukses');
                // $('#harga_sewa').val(data.harga_sewa);
                // $('#plat_nomor').val(data.plat_nomor);
                // $('#tahun').val(data.tahun);
                // $('#ket').val(data.keterangan);
                // $('#image').val(data.image);
                // $('#tipe').val(data.tipe);
                // $('#lokasi').val(data.lokasi);
            }
        });

    });

});
