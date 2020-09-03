<?php
    ///// INCLUIR LA CONEXIÓN A LA BD /////////////////
    include('conexion.php');
    include('crear_proceso.php');

    ///// CONSULTA A LA BASE DE DATOS /////////////////
    $disposicion="SELECT * FROM disposicion order by id_orden";
    $resDisposicion=$conexion->query($disposicion);
    $idor="SELECT * FROM disposicion order by id_orden";
    $resDisposicion_idor=$conexion->query($idor);
    $cliente="SELECT * FROM cliente order by id_cliente";
    $resCliente=$conexion->query($cliente);
    $compra="SELECT * FROM compra order by id_compra";
    $resCompra=$conexion->query($compra);
    $proceso="SELECT * FROM proceso order by id_proceso";
    $resProceso=$conexion->query($proceso);
    $estado="SELECT * FROM estado order by id_estado";
    $resEstado=$conexion->query($estado);

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
                        <div class="conta-form">
                            <div class="row">
                                <form method="post" class="form-group" action="crear_proceso.php">
                                    <select name="id_orden">
                                      <!-- <option value="1"></option> -->
                                      <?php
                                          while ($valoresDisposicion = mysqli_fetch_array($resDisposicion_idor)) {
                                            echo '<option value="'.$valoresDisposicion[id_orden].'">'.$valoresDisposicion[id_orden].'</option>';
                                          }
                                        ?>                                    
                                    </select>
                                    <select name="proceso">
                                      <!-- <option value="1"></option> -->
                                      <?php
                                          while ($valoresProceso = mysqli_fetch_array($resProceso)) {
                                            echo '<option value="'.$valoresProceso[proceso].'">'.$valoresProceso[proceso].'</option>';
                                          }
                                        ?>                                    
                                    </select>
                                    <select name="estado">
                                      <!-- <option value="1">Seleccione:</option> -->
                                      <?php
                                          while ($valoresEstado = mysqli_fetch_array($resEstado)) {
                                            echo '<option value="'.$valoresEstado[estado].'">'.$valoresEstado[estado].'</option>';
                                          }
                                        ?>                                    
                                    </select>
                                    <input class="btn btn-outline-secondary btn-lg text-white" type="submit" name="crear_proceso">
                                </form>
                            </div>
                        </div>

                      <!-- <div class="conta-table"> -->
                        <div class="row">
                          <!-- Table -->
                          <section class="col-sm-12 text-center justify-content-center align-self-center">
                                  <table class="table">
                                      <tr class="bg-primary">
                                        <th>ID_Orden</th>
                                        <th>Nombre</th>
                                        <th>Compra</th>
                                        <th>Proceso</th>
                                        <th>Estado</th>
                                        <th>Fecha</th>
                                      </tr>
                                      <?php
                                      while ($registroDisposicion = $resDisposicion->fetch_array(MYSQLI_BOTH))
                                      {
                                        echo'<tr>
                                          <td>'.$registroDisposicion['id_orden'].'</td>
                                          <td>'.$registroDisposicion['nombre'].'</td>
                                          <td>'.$registroDisposicion['compra'].'</td>
                                          <td>'.$registroDisposicion['proceso'].'</td>
                                          <td>'.$registroDisposicion['estado'].'</td>
                                          <td>'.$registroDisposicion['fecha'].'</td>
                                          </tr>';
                                      }
                                      ?>
                                  </table>
                            </section> <!-- Close Table -->
                        </div> <!--Row Table -->
                      <!-- </div> FIN CONTA TABLE -->
                  </div>
              </div>
          </header>
      </div>

</body>
</html>