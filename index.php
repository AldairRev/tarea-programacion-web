<?php
    include 'src/php/getProducts.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akunosu | Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="src/css/style.css">
</head>
<body>
    <div id="wrapper" aria-live="polite" aria-atomic="true" style="position: relative;">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-main-color sticky-top">
            <div class="container justify-content-md-center">
                <img src="src/img/sale.svg" alt="logo" style="width: 30px;">
                <a class="navbar-brand ml-2 font-weight-bold" href="#">あくのす</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse flex-row-reverse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Usuarios</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Inicio -->
        <div class="w-100 bg-logo">
            <div class="w-100 h-100 bg-overlay d-flex justify-content-center align-items-center flex-column">
                <div class="text-light mb-5">
                    <svg version="1.1" id="logo-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 512.003 512.003" style="enable-background:new 0 0 512.003 512.003;" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M477.958,262.633c-2.06-4.215-2.06-9.049,0-13.263l19.096-39.065c10.632-21.751,2.208-47.676-19.178-59.023l-38.41-20.38
                                c-4.144-2.198-6.985-6.11-7.796-10.729l-7.512-42.829c-4.183-23.846-26.241-39.87-50.208-36.479l-43.053,6.09
                                c-4.647,0.656-9.242-0.838-12.613-4.099l-31.251-30.232c-17.401-16.834-44.661-16.835-62.061,0L193.72,42.859
                                c-3.372,3.262-7.967,4.753-12.613,4.099l-43.053-6.09c-23.975-3.393-46.025,12.633-50.208,36.479l-7.512,42.827
                                c-0.811,4.62-3.652,8.531-7.795,10.73l-38.41,20.38c-21.386,11.346-29.81,37.273-19.178,59.024l19.095,39.064
                                c2.06,4.215,2.06,9.049,0,13.263l-19.096,39.064c-10.632,21.751-2.208,47.676,19.178,59.023l38.41,20.38
                                c4.144,2.198,6.985,6.11,7.796,10.729l7.512,42.829c3.808,21.708,22.422,36.932,43.815,36.93c2.107,0,4.245-0.148,6.394-0.452
                                l43.053-6.09c4.643-0.659,9.241,0.838,12.613,4.099l31.251,30.232c8.702,8.418,19.864,12.626,31.03,12.625
                                c11.163-0.001,22.332-4.209,31.03-12.625l31.252-30.232c3.372-3.261,7.968-4.751,12.613-4.099l43.053,6.09
                                c23.978,3.392,46.025-12.633,50.208-36.479l7.513-42.827c0.811-4.62,3.652-8.531,7.795-10.73l38.41-20.38
                                c21.386-11.346,29.81-37.273,19.178-59.024L477.958,262.633z M464.035,334.635l-38.41,20.38
                                c-12.246,6.499-20.645,18.057-23.04,31.713l-7.512,42.828c-1.415,8.068-8.874,13.487-16.987,12.342l-43.053-6.09
                                c-13.73-1.945-27.316,2.474-37.281,12.113L266.5,478.152c-5.886,5.694-15.109,5.694-20.997,0l-31.251-30.232
                                c-8.422-8.147-19.432-12.562-30.926-12.562c-2.106,0-4.229,0.148-6.355,0.449l-43.053,6.09
                                c-8.106,1.146-15.571-4.274-16.987-12.342l-7.513-42.829c-2.396-13.656-10.794-25.215-23.041-31.712l-38.41-20.38
                                c-7.236-3.839-10.086-12.61-6.489-19.969l19.096-39.065c6.088-12.456,6.088-26.742,0-39.198l-19.096-39.065
                                c-3.597-7.359-0.747-16.13,6.489-19.969l38.41-20.38c12.246-6.499,20.645-18.057,23.04-31.713l7.512-42.828
                                c1.416-8.068,8.874-13.488,16.987-12.342l43.053,6.09c13.725,1.943,27.316-2.474,37.281-12.113l31.252-30.232
                                c5.886-5.694,15.109-5.694,20.997,0l31.251,30.232c9.965,9.64,23.554,14.056,37.281,12.113l43.053-6.09
                                c8.107-1.147,15.572,4.274,16.987,12.342l7.512,42.829c2.396,13.656,10.794,25.215,23.041,31.712l38.41,20.38
                                c7.236,3.839,10.086,12.61,6.489,19.969l-19.096,39.064c-6.088,12.455-6.088,26.743,0,39.198l19.096,39.064
                                C474.121,322.024,471.271,330.796,464.035,334.635z"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <path d="M363.886,148.116c-5.765-5.766-15.115-5.766-20.881,0L148.116,343.006c-5.766,5.766-5.766,15.115,0,20.881
                                c2.883,2.883,6.662,4.325,10.44,4.325c3.778,0,7.558-1.441,10.44-4.325l194.889-194.889
                                C369.653,163.231,369.653,153.883,363.886,148.116z"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <path d="M196.941,123.116c-29.852,0-54.139,24.287-54.139,54.139s24.287,54.139,54.139,54.139s54.139-24.287,54.139-54.139
                                S226.793,123.116,196.941,123.116z M196.941,201.863c-13.569,0-24.608-11.039-24.608-24.609c0-13.569,11.039-24.608,24.608-24.608
                                c13.569,0,24.609,11.039,24.609,24.608C221.549,190.824,210.51,201.863,196.941,201.863z"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <path d="M315.061,280.61c-29.852,0-54.139,24.287-54.139,54.139s24.287,54.139,54.139,54.139
                                c29.852,0,54.139-24.287,54.139-54.139S344.913,280.61,315.061,280.61z M315.061,359.357c-13.569,0-24.609-11.039-24.609-24.608
                                s11.039-24.608,24.609-24.608c13.569,0,24.608,11.039,24.608,24.608S328.63,359.357,315.061,359.357z"/>
                        </g>
                    </g>
                    </svg>
                </div>
                <div class="text-light mb-2">
                    <h2 class="font-weight-bold main-color-text-light">あくのす</h2>
                </div>
                <div class="text-light">
                    <h5>日本語はすごいです！</h5>
                </div>
            </div>
        </div>
        <!-- Nosotros -->
        <div class="w-100">
            <div class="container d-flex justify-content-center align-items-center flex-column text-center">
                <div class="mt-5">
                    <h2 class="font-weight-bold">Sobre Nosotros</h2>
                </div>
                <div class="mt-3 mb-5 ml-5 mr-5">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec sapien ac nunc posuere tempus eu ac ex. Proin felis orci, faucibus at faucibus quis, ullamcorper blandit quam. Praesent maximus elementum ultricies. Morbi a commodo dui, nec elementum lorem. Cras iaculis lorem sed semper commodo. Fusce non vehicula nisi. Vestibulum quam dui, interdum id aliquet in, blandit sit amet elit.</p>
                </div>
            </div>
        </div>
        <!-- Dashboard -->
        <div class="">
            <div class="container d-flex justify-content-center align-items-center flex-column text-center">
                <div class="mt-3">
                    <h2 class="font-weight-bold">Nuestras Ventas</h2>
                </div>
                <canvas class="my-5 mx-md-5 w-100" id="myChart" width="900" height="380"></canvas>
            </div>
        </div>
        <!-- Productos -->
        <div class="album py-5">
            <div class="container">
                <div class="row text-center">
                    <h2 class="font-weight-bold main-color-text-dark py-5">Productos</h2>
                </div>
                <div class="row">
                    <?php
                        foreach ($productos as $p) {
                    ?>
                    <div class="col-md-6 col-xl-4">
                        <div id="product-<?php echo $p->id ?>" class="card mb-4 shadow-sm">
                            <div style="background-image: url('src/img/products/<?php echo $p->image ?>'); background-position: center center; background-size: cover; height: 300px; width: 100%;"></div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $p->nombre ?></h5>
                                <p class="card-text"><?php echo $p->descripcion ?></p>
                                <p class="card-text font-weight-bold text-warning">Stock: <?php echo $p->cantidad ?></p>
                                <h4 class="card-text font-weight-bold text-success text-right mb-5">S/. <? echo $p->precio ?></h4>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-info">Editar</button>
                                        <button type="button" class="btn btn-sm btn-outline-danger">Borrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                    <div class="col-md-6 col-xl-4">
                        <div class="card shadow-sm h-75" style="min-height: 400px;">
                            <div class="card-body">
                                <div class="d-flex justify-content-center align-items-center flex-column h-100 w-100">
                                    <div>
                                        <svg class="mb-5" id="add-svg" viewBox="0 0 512 512"><path d="m256 0c-141.164062 0-256 114.835938-256 256s114.835938 256 256 256 256-114.835938 256-256-114.835938-256-256-256zm0 0"/><path d="m368 277.332031h-90.667969v90.667969c0 11.777344-9.554687 21.332031-21.332031 21.332031s-21.332031-9.554687-21.332031-21.332031v-90.667969h-90.667969c-11.777344 0-21.332031-9.554687-21.332031-21.332031s9.554687-21.332031 21.332031-21.332031h90.667969v-90.667969c0-11.777344 9.554687-21.332031 21.332031-21.332031s21.332031 9.554687 21.332031 21.332031v90.667969h90.667969c11.777344 0 21.332031 9.554687 21.332031 21.332031s-9.554687 21.332031-21.332031 21.332031zm0 0" fill="#fafafa"/></svg>
                                    </div>
                                    <button class="btn btn-main-color" data-toggle="modal" data-target="#modal-add-product">
                                        Agregar Producto
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Plans -->
        <div class="bg-pricing text-light">
            <div class="container py-5">
                <div class="d-inline-block mb-5 text-center text-light">
                    <h2 class="font-weight-bold mb-3">Planes</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec sapien ac nunc posuere tempus eu ac ex. Proin felis orci, faucibus at faucibus quis, ullamcorper blandit quam. Praesent maximus elementum ultricies. Morbi a commodo dui, nec elementum lorem. Cras iaculis lorem sed semper commodo. Fusce non vehicula nisi. Vestibulum quam dui, interdum id aliquet in, blandit sit amet elit. Fusce maximus, augue quis cursus consequat, dui nulla malesuada enim, non laoreet eros dolor sodales sem.</p>
                </div>
                <div class="card-deck mb-3 text-center">
                    <div class="card bg-transparent mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Gratis</h4>
                        </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">S/ 0 <small class="text-muted">/ Mes</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Ofertas a su correo</li>
                            <li>Guardar Compras</li>
                            <li>Productos Nuevos</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-outline-light">Sign up for free</button>
                    </div>
                </div>
                <div class="card bg-transparent mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Cliente</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">S/ 29.99 <small class="text-muted">/ Mes</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Plan Gratis</li>
                            <li>Ofertas hasta 5% de descuento</li>
                            <li>Reservar Productos</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-light">Get started</button>
                    </div>
                </div>
                <div class="card mb-4 bg-transparent shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Cliente Poderoso</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">S/ 59.99 <small class="text-muted">/ Mes</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Plan Cliente</li>
                            <li>Ofertas hasta 10% de descuento</li>
                            <li>Envio Gratis</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-light">Contact us</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>  
        <div>
        <!-- Modal Agregar Producto-->
        <div class="modal fade" id="modal-add-product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <form id="form-add-product" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputNombre">Nombre del Producto</label>
                                <input type="text" class="form-control" id="producto_nombre" name="nombre" placeholder="Ejemplo: Samsung - Galaxy S10" required>
                                <small class="form-text text-muted">Nombre que sea preciso y conciso. Ejemplo: Samsung - Galaxy S10</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlDescripcion">Descripcion del Producto</label>
                                <textarea class="form-control" id="producto_descripcion" name="descripcion" rows="3" placeholder="El producto presenta..."></textarea>
                            </div>
                            <div>
                                <div id="imgAddProducto" style="background-image: url('src/img/products/no-imagen.jpg')"></div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Subir Imagen</label>
                                <input type="file" class="form-control-file" name="producto_image"  id="producto_image">
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="exampleInputPrecio">Precio S/.</label>
                                    <input type="number" class="form-control" id="producto_nombre" name="precio" placeholder="S/xx.xx" step="0.01" min=0 required>
                                </div>
                                <div class="col">
                                    <label for="exampleInputNombre">Cantidad</label>
                                    <input type="number" class="form-control" id="producto_nombre" name="cantidad" placeholder="0" step="1" min=0 required>
                                </div>
                            </div>
                            <div class="modal-footer mt-3">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-main-color">Subir Producto</button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- Toast -->
        <div class="toast toast-exito" style="position: fixed; top: 80px; right: 20px; z-index: 20" data-delay="6000">
            <div class="toast-header py-3">
                <svg id="check-svg" height="20px" viewBox="0 -46 417.81333 417" xmlns="http://www.w3.org/2000/svg"><path d="m159.988281 318.582031c-3.988281 4.011719-9.429687 6.25-15.082031 6.25s-11.09375-2.238281-15.082031-6.25l-120.449219-120.46875c-12.5-12.5-12.5-32.769531 0-45.246093l15.082031-15.085938c12.503907-12.5 32.75-12.5 45.25 0l75.199219 75.203125 203.199219-203.203125c12.503906-12.5 32.769531-12.5 45.25 0l15.082031 15.085938c12.5 12.5 12.5 32.765624 0 45.246093zm0 0"/></svg>
                <strong class="mr-auto">Accion Exitosa</strong>
            </div>
            <div class="toast-body py-3">
                <strong id="msg-toast-exito">Exito</strong>
            </div>
        </div>
        <div class="toast toast-denegado" style="position: fixed; top: 80px; right: 20px; z-index: 20" data-delay="6000">
            <div class="toast-header py-3">
                <svg id="error-svg" width="20px" height="20px" viewBox="0 0 365.71733 365" xmlns="http://www.w3.org/2000/svg"><g><path d="m356.339844 296.347656-286.613282-286.613281c-12.5-12.5-32.765624-12.5-45.246093 0l-15.105469 15.082031c-12.5 12.503906-12.5 32.769532 0 45.25l286.613281 286.613282c12.503907 12.5 32.769531 12.5 45.25 0l15.082031-15.082032c12.523438-12.480468 12.523438-32.75.019532-45.25zm0 0"/><path d="m295.988281 9.734375-286.613281 286.613281c-12.5 12.5-12.5 32.769532 0 45.25l15.082031 15.082032c12.503907 12.5 32.769531 12.5 45.25 0l286.632813-286.59375c12.503906-12.5 12.503906-32.765626 0-45.246094l-15.082032-15.082032c-12.5-12.523437-32.765624-12.523437-45.269531-.023437zm0 0"/></g></svg>
                <strong class="mr-auto">Accion Denegada</strong>
            </div>
            <div class="toast-body py-3">
                <strong id="msg-toast-denegado">Denegado</strong>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script src="src/js/index.js"></script>
    <script src="src/js/dashboard.js"></script>
    <script src="src/js/submit.js"></script>
</body>
</html>