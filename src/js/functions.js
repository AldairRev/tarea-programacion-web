function refreshListProducts() {
    $.ajax({
        url: 'src/php/refreshProducts.php',
        type: "GET",
        dataType: 'json',
        data: { get_param: 'value' }, 
        success: function(data) {
            $("#products-list").empty();
            var template_list = "";
            data.forEach(element => {
                template_list += '<div class="col-md-6 col-xl-4">'+
                    '                        <div class="card mb-4 shadow-sm">'+
                    '                            <div style="background-image: url(\'src/img/products/' + element.image+ '\'); background-position: center center; background-size: cover; height: 300px; width: 100%;"></div>'+
                    '                            <div class="card-body">'+
                    '                                <h5 class="card-title">' + element.nombre + '</h5>'+
                    '                                <p class="card-text">' + element.descripcion + '</p>'+
                    '                                <p class="card-text font-weight-bold text-warning">Stock: ' + element.cantidad + '</p>'+
                    '                                <h4 class="card-text font-weight-bold text-success text-right mb-5">S/. ' + element.precio + '</h4>'+
                    '                                <div class="d-flex justify-content-center align-items-center">'+
                    '                                    <div class="btn-group">'+
                    '                                        <button id="btnEdit-' + element.id + '" type="button" class="btn-edit-product btn btn-sm btn-outline-info" data-toggle="modal" data-target="#modal-edit-product">'+
                    '                                            Editar'+
                    '                                        </button>'+
                    '                                        <button id="btnDelete-' + element.id + '" type="button" class="btn-delete-product btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modal-delete-product">Borrar</button>'+
                    '                                    </div>'+
                    '                                </div>'+
                    '                            </div>'+
                    '                        </div>'+
                    '                    </div>';
            });
            template_list += '<div class="col-md-6 col-xl-4">'+
                '                        <div class="card shadow-sm h-75" style="min-height: 400px;">'+
                '                            <div class="card-body">'+
                '                                <div class="d-flex justify-content-center align-items-center flex-column h-100 w-100">'+
                '                                    <div>'+
                '                                        <svg class="mb-5" id="add-svg" viewBox="0 0 512 512"><path d="m256 0c-141.164062 0-256 114.835938-256 256s114.835938 256 256 256 256-114.835938 256-256-114.835938-256-256-256zm0 0"/><path d="m368 277.332031h-90.667969v90.667969c0 11.777344-9.554687 21.332031-21.332031 21.332031s-21.332031-9.554687-21.332031-21.332031v-90.667969h-90.667969c-11.777344 0-21.332031-9.554687-21.332031-21.332031s9.554687-21.332031 21.332031-21.332031h90.667969v-90.667969c0-11.777344 9.554687-21.332031 21.332031-21.332031s21.332031 9.554687 21.332031 21.332031v90.667969h90.667969c11.777344 0 21.332031 9.554687 21.332031 21.332031s-9.554687 21.332031-21.332031 21.332031zm0 0" fill="#fafafa"/></svg>'+
                '                                    </div>'+
                '                                    <button class="btn btn-main-color" data-toggle="modal" data-target="#modal-add-product">'+
                '                                        Agregar Producto'+
                '                                    </button>'+
                '                                </div>'+
                '                            </div>'+
                '                        </div>'+
                '                    </div>';

            $("#products-list").append(template_list);
        }
    });
}

refreshListProducts();