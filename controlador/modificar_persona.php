<?php

if (!empty($_POST["btn_modificar"])) {
    if (!empty($_POST["nombre"]) &&  !empty($_POST["apellido"]) && !empty($_POST["dni"]) && !empty($_POST["fecha"]) && !empty($_POST["correo"])) {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $dni = $_POST["dni"];
        $fecha = $_POST["fecha"];
        $correo = $_POST["correo"];

        $sql = $conexion->query("update personas set nombre = '$nombre', apellido='$apellido', dni='$dni', fecha_nac='$fecha', correo='$correo' where id_persona=$id");

        if ($sql == 1) {
            header("location:index.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar datos de la persona.</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Campos vacios.</div>";
    }
}
