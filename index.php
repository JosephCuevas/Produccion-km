<?php
    ///// INCLUIR LA CONEXIÓN A LA BD /////////////////
    include('conexion.php');

    ///// CONSULTA A LA BASE DE DATOS /////////////////
    $disposicion="SELECT * FROM disposicion order by id_orden";
    $resDisposicion=$conexion->query($disposicion);

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
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.jpg" alt="" style="width: 80%;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Cliente</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Disposición</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Generar Orden</a>
                </li>
              </ul>
            </div>
        </div>
      </nav>

    <!--HEADER -->
    <header class="main-header">
          <div class="background-overlay text-white py-5">
              <div class="container">
                  <div class="row">
                    <div class="col-md-6 text-center justify-content-center align-self-center">
                        <h1>Proceso de producción de KingMonster</h1>
                        <p>En estos apartados encontraras los diferentes procesos en los que se encuentran las prendas para su producción.</p>
                        <a href="#" class="btn btn-outline-secondary btn-lg text-white">
                            Read More
                        </a>
                    </div>
                    <div class="col-md-6">
                        <!-- <img src="img/header.jpg" class="img-fluid d-none d-sm-block" alt=""> -->
                    </div>
                  </div>
              </div>
          </div>
      </header>


    <!-- Table -->
    <section>
			<table class="table">
				<tr class="bg-primary">
					<th>ID_Orden</th>
					<th>Nombre</th>
					<th>Compra</th>
					<th>Proceso</th>
					<th>Estado</th>
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
						 </tr>';
				}
				?>
			</table>
		</section>

</body>
</html>