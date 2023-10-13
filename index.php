<?php

session_start();

require 'admin/config.php';
require 'functions.php';

if(isset($_SESSION['usuario'])){

    $conexion = conexion($db_config);
    $usuario = iniciarSesion('usuarios', $conexion);

    if($usuario['tipo_usuario']=='administrador'){
        header("location: ".RUTA."admin.php");
    }
    else if($usuario['tipo_usuario']=='usuario'){
        header("location: ".RUTA."usuario.php");
    }
    else{
        header("location: ".RUTA."login.php");
    }
}
else{
    header("location: ".RUTA."login.php");
}
