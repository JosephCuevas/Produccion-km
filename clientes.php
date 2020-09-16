<?php
    ////////////////// CONEXION A LA BASE DE DATOS //////////////////
    include('conexion.php');

    $cliente="SELECT * FROM cliente order by id_cliente";
    $resCliente=$conexion->query($cliente);

?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso Produccion</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="cdn/bootstrap/css/bootstrap.min.css">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
        integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <!-- CUSTOME CSS -->
    <link rel="stylesheet" href="css/main.css">
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
                    </nav> <!-- NAVEGACIÓN -->

                    <!-- TABLES -->
                    <section class="">
                        <table class="table table-striped table-bordered text-white" style="width:100%" id="tab">
                          <thead>
                            <tr class="">
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Correo</th>
                            </tr>
                          </thead>
                          <tbody>
                                <?php
                                    while ($registroCliente = $resCliente->fetch_array(MYSQLI_BOTH))
                                    {
                                        echo'<tr>
                                        <td>'.$registroCliente['nombre'].'</td>
                                        <td>'.$registroCliente['apellidos'].'</td>
                                        <td>'.$registroCliente['correo'].'</td>
                                        </tr>';
                                    }
                                ?>
                          </tbody>
                        </table>
                    </section>

                </div> <!-- CONTAINER -->
            </div> <!-- BACKGROUND OVERLAY -->
        </div> <!-- MAIN HEADER -->
    </div> <!-- MAIN BACK -->

    <!-- SCRIPTS -->
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="cdn/jquery/jquery-3.3.1.min.js"></script>
    <script src="cdn/popper/popper.min.js"></script>
    <script src="cdn/bootstrap/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
    <!-- bootstrap -->

    <!-- datatables -->
    <script type="text/javascript" src="cdn/datatables/datatables.min.js"></script>
</body>
</html>