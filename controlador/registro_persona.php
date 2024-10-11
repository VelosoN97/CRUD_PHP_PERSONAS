<?php
if (!empty($_POST["btnRegistrar"])) {
    if (!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["fecha"]) && !empty($_POST["correo"])) {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $fecha = $_POST["fecha"];
        $correo = $_POST["correo"];

        $sql = $conex->query("INSERT INTO personas(nombre, apellido, fecha_nac, correo) VALUES('$nombre','$apellido','$fecha','$correo')");
        if ($sql == 1) {
            header("Location: " . $_SERVER['PHP_SELF'] . "?status=success");
            exit();
        } else {
            header("Location: " . $_SERVER['PHP_SELF'] . "?status=error");
            exit();
        }
    } else {
        header("Location: " . $_SERVER['PHP_SELF'] . "?status=empty");
        exit();
    }
}
?>
