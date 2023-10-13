<?php

session_start();

require 'admin/config.php';
require 'functions.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $usuario=limpiarDatos($_POST['usuario']);
    $pass=limpiarDatos($_POST['password']);
    $pass=hash('sha512', $pass);
    $rol = $_POST['rol'];

    $error = "";

    // Validar campos de texto
    

    if(empty($usuario)||empty($pass)||empty($rol)){
        $error .="<li class='error'> Por favor complete todos los campos</li>";
    }
    else{
        $conexion=conexion($db_config);
        $stmt=$conexion->prepare("SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1");
        $stmt->execute([
            'usuario'=>$usuario
        ]);
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        if($resultado){
            $error.="<li class='error'>Este usuario ya existe</li>";
        }
    }
    if($error==""){
        $conexion=conexion($db_config);
        $stmt=$conexion->prepare("INSERT INTO usuarios(id, usuario, pass, tipo_usuario) VALUES (null, :usuario, :pass, :tipo_usuario)");
            $stmt->execute(
            [
                ':usuario'=>$usuario,
                ':pass'=>$pass,
                ':tipo_usuario'=>$rol
            ]
            );
            header('location: '.RUTA.'login.php');
    }
} 

    require 'views/registro.view.php';

?>