//Ramdom color
const color_hue = [128,188,238,321,334];
const i_color_hue = Math.floor(Math.random() * 5);

let root = document.documentElement;

root.style.setProperty('--main-color-hue', color_hue[i_color_hue]);

//Load Page
$(document).ready(function () {
    
});

//Add values to Edit Product Form
$(document).on("click", ".btn-edit-product", function(e) {
    const id_attr = $(this).attr("id");
    const id_num = id_attr.split("-")[1];
    $.ajax({
        url: 'src/php/getProduct.php?id=' + id_num,
        type: "GET",
        dataType:  'json',
        data: { get_param: 'value' }, 
        success: function(data) {
            $("#edit_id").val(data.id);
            $("#edit_nombre").val(data.nombre);
            $("#edit_descripcion").val(data.descripcion);
            $("#edit_precio").val(data.precio);
            $("#edit_cantidad").val(data.cantidad);

            $("#imgEditProducto").attr("style","background-image: url('src/img/products/" + data.image + "')");
        }
    });
});

//Add values to delete Product Form
$(document).on("click", ".btn-delete-product", function(e) {
    const id_attr = $(this).attr("id");
    const id_num = id_attr.split("-")[1];
    $.ajax({
        url: 'src/php/getProduct.php?id=' + id_num,
        type: "GET",
        dataType:  'json',
        data: { get_param: 'value' }, 
        success: function(data) {
            $("#delete_id").val(data.id);
            $("#delete_nombre").val(data.nombre);
            $("#delete_descripcion").val(data.descripcion);

            $("#imgDeleteProducto").attr("style","background-image: url('src/img/products/" + data.image + "')");
        }
    });
});

//Add Image Preview to Forms
$("#producto_image").change(function() {
    addProductReadURL(this);
});

function addProductReadURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
            $('#imgAddProducto').attr('style', "background-image: url('" + e.target.result + "')");
        };

        reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
}

$("#edit_image").change(function() {
    editProductReadURL(this);
});

function editProductReadURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
            $('#imgEditProducto').attr('style', "background-image: url('" + e.target.result + "')");
        };

        reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
}
