<?php

include('conexion.php'); //CONEXION A LA BD

    if(isset($_POST['crear_cliente'])) {
        $id_cliente = $_POST['id_cliente'];
        $nombre = $_POST['nombre'];
        $apellido_pat = $_POST['apellido_pat'];
        $apellido_mat = $_POST['apellido_mat'];
        $crear_nue_cli = $conexion -> query("INSERT INTO cliente (id_cliente,nombre,apellido_pat,apellido_mat) VALUES ('$id_cliente','$nombre','$apellido_pat','$apellido_mat')");

        if($crear_nue_cli) {
            header ('Location: disposicion.php');
        } else {
            echo "Incorrecto!";
        }
    }

?>