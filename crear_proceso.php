<?php
    include('conexion.php');
    

    if(isset($_POST['crear_proceso'])){
        $id_orden = $_POST["id_orden"];
        $proceso = $_POST["proceso"];
        $estado = $_POST["estado"];
        $actualizar = "UPDATE disposicion SET proceso='$proceso', estado='$estado' WHERE id='$id_orden'";
        echo $actualizar;
    }
?>