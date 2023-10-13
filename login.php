<?php

session_start();

require 'admin/config.php';
require 'functions.php';

$errors = '';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $pass = hash('sha512', $password);

    // Convierte una cadena de caracteres en una de 512 caracteres. La función lo transforma eb una cadena

    $conexion = conexion($db_config);
    $sql = "SELECT * FROM usuarios WHERE usuario = :usuario and pass = :pass"; 
    $stmt = $conexion->prepare($sql);
    $stmt->execute(array(
        ":usuario"=>$usuario,
        ":pass"=>$pass        
    ));


$resultado = $stmt->fetch();

if($resultado){
    $_SESSION['usuario']=$usuario;
    header('location: '.RUTA.'index.php');
}
else{
    $errores = "<li class='error'>Usuario o contraseña incorrectos.</li>";
    echo "Hola";
}
}

require 'views/login.view.php';

