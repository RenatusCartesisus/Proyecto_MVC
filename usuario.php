<?php

session_start();

require 'admin/config.php';
require 'functions.php';

// Comprobar sesion

if(!isset($_SESSION['usuario'])){
    header("location: ".RUTA."close.php");
}

$conexion = conexion($db_config);
$user= iniciarSesion('usuarios', $conexion);

if($user['tipo_usuario']=='usuario'){
    // traer el nombre del usuario
    $user = iniciarSesion('usuarios', $conexion);
    require 'views/usuario.view.php';
}
else{
    header('locarion: '.RUTA.'Index.php');
}

?>