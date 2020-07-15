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
            $('#producto_nombre').val(''); 
            $('#producto_descripcion').val('');
            $('#producto_precio').val(''); 
            $('#producto_cantidad').val('');  
            $('#producto_image').val('');

            $("#imgAddProducto").attr("style","background-image: url('src/img/products/no-imagen.jpg')");
            //RefreshList
            refreshListProducts();
        },
        error: function (data, textS, throwa) { 
            console.log("No funco, error: " + data.status + "\n" + textS + "\n" + throwa);
            $('#modal').modal('toggle');
        }
    });
});
//Update Product
$('#form-edit-product').submit(function (e) {
    e.preventDefault();
    $.ajax({
        url: 'src/php/updateProduct.php',
        type: "POST",
        data:  new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        success: function(data) {
            $('#modal-edit-product').modal('hide');
            $('.toast-exito .toast-body').text(data);
            $('.toast-exito').toast('show');
            $('#edit_image').val(''); 
            //RefreshList
            refreshListProducts();
        }
    });
});
//Delete Product
$('#form-delete-product').submit(function (e) {
    e.preventDefault();
    $.ajax({
        url: 'src/php/deleteProduct.php',
        type: "POST",
        data:  new FormData(this),
        contentType: false,
        cache: false,
        processData:false,
        success: function(data) {
            $('#modal-delete-product').modal('hide');
            $('.toast-exito .toast-body').text(data);
            $('.toast-exito').toast('show');
            //RefreshList
            refreshListProducts();
        }
    });
});