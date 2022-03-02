<?php
$db_usuario = "admin";
$db_pswr = "ppyOthVr9n796ClyNZzm";
$db_base_datos = "sys";
$db_equipo = "pruebas-misael.cikb6np6vwrk.us-east-1.rds.amazonaws.com";

$connection = new mysqli($db_equipo, $db_usuario, $db_pswr, $db_base_datos);

mysqli_set_charset($connection, 'utf8');

if($connection) {
    $id_hilo = mysqli_thread_id($connection);
    //echo "Se conecto la base con el ID: $id_hilo";
}
