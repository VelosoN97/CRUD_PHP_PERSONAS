<?php
    if(!empty($_GET["id"])){
        $id = $_GET["id"];
        $sql = $conex->query("DELETE FROM personas WHERE id_persona=$id");
        if($sql == 1){
            echo '<div id="message" class="alert alert-success">Persona eliminado/a correctamente</div>';
        } else {
            echo '<div id="message" class="alert alert-warning">Error al eliminar</div>';
        }
    }