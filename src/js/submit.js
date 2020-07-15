// Upload Producto
$('#form-add-product').submit(function (e) {
    e.preventDefault();
    $.ajax({
        url: 'src/php/addProduct.php',
        type: "POST",
        data:  new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        success: function(data) {
            $('#modal-add-product').modal('hide');
            $('.toast-exito .toast-body').text(data)
            $('.toast-exito').toast('show');
        },
        error: function (data, textS, throwa) { 
            console.log("No funco, error: " + data.status + "\n" + textS + "\n" + throwa);
            $('#modal').modal('toggle');
        }
    });
});

 