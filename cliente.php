<?php
    ///// INCLUIR LA CONEXIÓN A LA BD /////////////////
    include('conexion.php');

    ///// CONSULTA A LA BASE DE DATOS /////////////////
    $cliente="SELECT * FROM cliente order by id_cliente";
    $resCliente=$conexion->query($cliente);

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
    <link rel="stylesheet" href="css/estilos.css">
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
                  <a class="nav-link" href="#">Generar Orden</a>
                </li>
              </ul>
            </div>
        </div>
      </nav>

      <div class="main-back">
          <!--HEADER -->
        <header class="main-header">
              <div class="background-overlay text-white py-5">
                  <div class="container">
                      <div class="row">
                        <div class="col-sm-12 text-center justify-content-center align-self-center">
                            <h1>Proceso de producción de KingMonster</h1>
                            <p>En estos apartados encontraras los diferentes procesos en los que se encuentran las prendas para su producción.</p>
                            <a href="#" class="btn btn-outline-secondary btn-lg text-white">
                                Read More
                            </a>
                        </div>
                      </div>

                      <div class="conta-table">
                        <div class="conta-form col-sm-12">
                            <div class="row">
                                <form method="post" class="form" action="crear_cliente.php">
                                    <input class="input-group-text" type="text" name="id_cliente" placeholder="Id_cliente">
                                    <input class="input-group-text" type="text" name="nombre" placeholder="Nombre de Cliente">
                                    <input class="input-group-text" type="text" name="apellido_pat" placeholder="Apellido Paterno">
                                    <input class="input-group-text" type="text" name="apellido_mat" placeholder="Apellido Materno">
                                    <input class="btn btn-outline-secondary btn-lg text-white" type="submit" name="crear_cliente">
                                </form>
                            </div>
                        </div>
                        <div class="row">
                          <!-- Table -->
                          <section class="col-sm-12 text-center justify-content-center align-self-center">
                                  <table class="table">
                                      <tr class="bg-primary">
                                        <th>Id Cliente</th>
                                        <th>Nombre</th>
                                        <th>Primer Apellido</th>
                                        <th>Segundo Apellido</th>
                                      </tr>
                                      <?php
                                      while ($registroCliente = $resCliente->fetch_array(MYSQLI_BOTH))
                                      {
                                        echo'<tr>
                                          <td>'.$registroCliente['id_cliente'].'</td>
                                          <td>'.$registroCliente['nombre'].'</td>
                                          <td>'.$registroCliente['apellido_pat'].'</td>
                                          <td>'.$registroCliente['apellido_mat'].'</td>
                                          </tr>';
                                      }
                                      ?>
                                  </table>
                            </section> <!-- Close Table -->
                        </div> <!--Row Table -->
                      </div>
                  </div>
              </div>
          </header>
      </div>

</body>
</html>