<?php
if (!empty($_POST["btnEditar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])) {
        $id= $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $fecha = $_POST["fecha"];
        $correo = $_POST["correo"];
        $sql = $conex->query("UPDATE personas SET nombre='$nombre', apellido='$apellido',
        fecha_nac='$fecha', correo='$correo' WHERE id_persona=$id");
        if($sql == 1){
            header("Location: index.php");
        } else {
            echo '<div id="message" class="alert alert-danger">Error al editar persona</div>';
        }
    } else {
        echo '<div id="message" class="alert alert-warning">Hay campos vacíos</div>';
    }
}