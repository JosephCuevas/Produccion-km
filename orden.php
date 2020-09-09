<?php
    ////////////////// CONEXION A LA BASE DE DATOS //////////////////
    include('conexion.php');

    ///// CONSULTA A LA BASE DE DATOS /////////////////
    $nombres="SELECT * FROM cliente order by id_cliente";
    $resNombre=$conexion->query($nombres);
    $orden="SELECT * FROM orden order by id_orden";
    $resOrden=$conexion->query($orden);
    $diseno="SELECT * FROM diseno order by id_diseno";
    $resDiseno=$conexion->query($diseno);
    $prenda="SELECT * FROM tipo_prenda order by id_prenda";
    $resTipo_prenda=$conexion->query($prenda);
    $compra="SELECT * FROM compra order by id_compra";
    $resCompra=$conexion->query($compra);

?>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso Produccion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
        integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <!-- CUSTOME CSS -->
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
</head>

<body>
    <div class="main-back">
        <!--div main header -->
        <div class="main-header">
            <div class="background-overlay">
                <div class="container">

                    <!--Navigation -->
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <div class="container">
                            <a class="navbar-brand" href="disposicion.php">
                                <img src="img/logo.jpg" alt="" style="width: 80%;">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse nav nav-tabs" id="navbarNav">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="cliente.php">Cliente</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="disposicion.php">Disposición</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                                            role="button" aria-haspopup="true" aria-expanded="false">Producción</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="ordenes.php">Ordenes</a>
                                            <a class="dropdown-item" href="orden.php">Generar Orden</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>

                    <div class="conta-form col-sm-12 pb-3 col-center">
                        <div class="row">
                            <div>
                                <form method="post" class="form-group">
                                    <h3 class="text-center pad-basic no-btm">Crear orden</h3>
                                    <select class="custom-select" name="nombre[]">
                                        <?php
                                    while ($valoresNombre = mysqli_fetch_array($resNombre)) {
                                        echo '<option value="'.$valoresNombre[id_cliente].'">'.$valoresNombre[nombre].'</option>';
                                    }
                                        ?>
                                    </select>
                                    <select class="custom-select" name="tipo_prenda[]">
                                        <?php
                                    while ($valoresCompra = mysqli_fetch_array($resCompra)) {
                                        echo '<option value="'.$valoresCompra[id_compra].'">'.$valoresCompra[compra].'</option>';
                                    }
                                        ?>
                                    </select>
                                    <table class="table table-sm" id="tabla">
                                        <tr class="row col-sm-12">
                                            <td>
                                                <select class="custom-select" name="diseno[]" id="inputgroup1">
                                                <?php
                                                    while ($valoresDiseno = mysqli_fetch_array($resDiseno)) {
                                                        echo '<option value="'.$valoresDiseno[id_diseno].'">'.$valoresDiseno[diseno].'</option>';
                                                    }
                                                ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="custom-select" name="tipo_prenda[]" id="inputgroup2">
                                                    <?php
                                                while ($valoresTipo_prenda = mysqli_fetch_array($resTipo_prenda)) {
                                                    echo '<option value="'.$valoresTipo_prenda[id_prenda].'">'.$valoresTipo_prenda[tipo_prenda].'</option>';
                                                }
                                            ?>
                                                </select>
                                            </td>
                                            <td>
                                                <input required class="form-control input-goup-text" name="cantidad[]"
                                                    placeholder="Cantidad" />
                                            </td>
                                            <td class="eliminar">
                                                <input type="button" class="btn btn-outline-secondary btn-sm text-white"
                                                    value="x" />
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="float-right">
                                        <input type="submit" name="insertar" value="Generar Orden"
                                            class="btn btn-outline-secondary btn-sm text-white" />
                                        <button id="adicional" name="adicional" type="button"
                                            class="btn btn-outline-secondary btn-sm text-white"> Más + </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>