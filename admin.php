<?php

session_start();

require "admin/config.php";
require "functions.php";

// Comprobar sesion

if(!isset($_SESSION['usuario'])){
header('location:'. RUTA . 'login.php');
}
$conexion = conexion($db_config);
$admin = iniciarSesion('usuarios', $conexion);

if($admin['tipo_usuario']=='administrador'){
    // Traer el nombre de usuario.
    $user = iniciarSesion('usuarios', $conexion);

    require 'views/admin.view.php';
}else{
    header("location: ".RUTA.'index.php');
}

?>