
<?php
    ////////////////// CONEXION A LA BASE DE DATOS //////////////////
    include('conexion.php');

    ///// CONSULTA A LA BASE DE DATOS /////////////////
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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
        <!-- CUSTOME CSS -->
        <link rel="stylesheet" href="css/main.css">
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
	</head>
	<body>

        <!--Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="disposicion.php">
                    <img src="img/logo.jpg" alt="" style="width: 80%;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                        <a class="nav-link" href="cliente.php">Cliente</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="disposicion.php">Disposición</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="orden.php">Generar Orden</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>                        


            
        <div class="main-back">
          <!--div main header -->
        <div class="main-header">
              <div class="background-overlay text-white">
                  <div class="container">

                    <div class="conta-form col-sm-12">
                        <div class="row">
                            <div>
                                <form method="post" class="form-group">
                                    <h3 class="text-center pad-basic no-btm">Crear orden</h3>
                                        <table class="table table-sm"  id="tabla">
                                            <tr class="row col-sm-12">
                                                
                                                
                                                <div class="row">
                                                <div class="input-group input-group-sm">
                                                    <td><input required class="form-control input-goup-text" name="id_orden[]" placeholder="ID Orden"/></td>
                                                </div>

                                                    <td><input required class="form-control input-goup-text" name="nombre[]" placeholder="Nombre"/></td>

                                                    <td><input required class="form-control input-goup-text" name="diseno[]" placeholder="Diseño"/></td>
                                                </div>
                                                <div class="row">

                                                    <td><input required class="form-control input-goup-text" name="tipo_prenda[]" placeholder="Tipo Prenda"/></td>

                                                    <td><input required class="form-control input-goup-text" name="cantidad[]" placeholder="Cantidad"/></td>

                                                    <td><input required class="form-control input-goup-text" name="compra[]" placeholder="Compra"/></td>
                                                <td class="eliminar"><input type="button" class="btn btn-outline-secondary btn-sm text-white" value="Menos -"/></td>
                                                </div>
                                                
                                            </tr>
                                        </table>

                                            <div class="btn-der">
                                                <input type="submit" name="insertar" value="Insertar Alumno" class="btn btn-outline-secondary btn-sm text-white"/>
                                                <button id="adicional" name="adicional" type="button" class="btn btn-outline-secondary btn-sm text-white"> Más + </button>
                                            </div>
                                </form>
                            </div>
                        </div>
                    </div>



                    <section>
                        <table class="table">
                            <tr class="">
                                <th>Id Orden</th>
                                <th>Nombre</th>
                                <th>Diseño</th>
                                <th>Tipo prenda</th>
                                <th>Cantidad</th>
                                <th>Compra</th>
                                <th>Fecha</th>
                            </tr>
                            <?php
                                while($registroOrden  = $resOrden->fetch_array( MYSQLI_BOTH)) 
                                {
                                echo '<tr>
                                        <td>'.$registroOrden['id_orden'].'</td>
                                        <td>'.$registroOrden['nombre'].'</td>
                                        <td>'.$registroOrden['diseno'].'</td>
                                        <td>'.$registroOrden['tipo_prenda'].'</td>
                                        <td>'.$registroOrden['cantidad'].'</td>
                                        <td>'.$registroOrden['compra'].'</td>
                                        <td>'.$registroOrden['fecha'].'</td>
                                    </tr>';
                                }
                            ?>
                        </table>
                    </section>

                        <footer>
                        </footer>

                    </div>
                </div>
            </div>
        </div>

        <!-- SCRIPTS -->
        <script src="main.js"></script>
	</body>

</html>