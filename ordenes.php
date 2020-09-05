<?php
    ///// INCLUIR LA CONEXIÓN A LA BD /////////////////
    include('conexion.php');

    ///// CONSULTA A LA BASE DE DATOS /////////////////
    $orden="SELECT * FROM orden order by id_orden";
    $resOrden=$conexion->query($orden);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso Produccion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <!-- CUSTOME CSS -->
    <link rel="stylesheet" href="css/main.css">
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
                  <a class="nav-link" href="generar_orden.php">Generar Orden</a>
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
                                <form method="post" class="form-group" action="crear_cliente.php">
                                    <div class="input-group pt-3 justify-content-center"> 
                                        <input class="form-control pl-3 input-goup-text" type="text" name="id_cliente" placeholder="Id orden">
                                        <input class="form-control input-goup-text" type="text" name="nombre" placeholder="Nombre">
                                        <input class="form-control input-goup-text" type="text" name="apellido_pat" placeholder="Diseño">
                                        <input class="form-control input-goup-text" type="text" name="apellido_mat" placeholder="Tipo Prenda">
                                        <input class="form-control input-goup-text" type="text" name="apellido_mat" placeholder="Cantidad">
                                        <input class="form-control input-goup-text" type="text" name="apellido_mat" placeholder="Compra">
                                        <input class="btn btn-outline-secondary btn-sm text-white" type="submit" value="Crear" name="generar_orden">
                                    </div>
                                </form>
                            </div>
                        </div>
                      <div class="conta-table">
                        <div class="row">
                          <!-- Table -->
                          <section class="table table-sm col-sm-12 text-center justify-content-center align-self-center">
                                  <table class="table">
                                      <tr class="bg-primary">
                                        <th>Id Orden</th>
                                        <th>Nombre</th>
                                        <th>Diseño</th>
                                        <th>Tipo Prenda</th>
                                        <th>Cantidad</th>
                                        <th>Compra</th>
                                        <th>Fecha</th>
                                      </tr>
                                      <?php
                                      while ($registroCliente = $resOrden->fetch_array(MYSQLI_BOTH))
                                      {
                                        echo'<tr>
                                          <td>'.$registroCliente['id_orden'].'</td>
                                          <td>'.$registroCliente['nombre'].'</td>
                                          <td>'.$registroCliente['diseno'].'</td>
                                          <td>'.$registroCliente['tipo_prenda'].'</td>
                                          <td>'.$registroCliente['cantidad'].'</td>
                                          <td>'.$registroCliente['compra'].'</td>
                                          <td>'.$registroCliente['fecha'].'</td>
                                          </tr>';
                                      }
                                      ?>
                                  </table>
                            </section> <!-- Close Table -->
                        </div> <!--Row Table -->
                      </div>
                  </div>
              </div>
          </div> <!-- main header-->
      </div>

</body>
</html>