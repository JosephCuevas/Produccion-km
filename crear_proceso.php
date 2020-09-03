<?php
    include('conexion.php');
    

    if(isset($_POST['crear_proceso'])){
        $id_orden = $_POST["id_orden"];
        $proceso = $_POST["proceso"];
        $estado = $_POST["estado"];
        $actualizar = $conexion->query("UPDATE disposicion SET proceso='$proceso', estado='$estado' WHERE id_orden='$id_orden'");

            if($actualizar==true){
                header ('Location: disposicion.php');
			}

			else{
				echo "NO FUNIONA!";
			}
    }
?>