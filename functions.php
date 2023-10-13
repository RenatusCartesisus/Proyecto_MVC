<?php

function conexion($bd_config){
    try{
        $conexion = new PDO("mysql:host=localhost;dbname=".$bd_config['db_name'], $bd_config['user'], $bd_config['pass']);
        return $conexion;

        }catch(PDOException $e){
            return false;
    }
}

function limpiarDatos($datos){
    
    // htmlspecialchars($string, $flags) = Convert special characteres to HTML entities.

    // $flags =

    //  echo htmlspecialchars($str1, ENT_COMPAT);   //It will converts only double quotes.  

    // echo htmlspecialchars($str1, ENT_QUOTES);   // Converts both double and single quotes  

    //echo htmlspecialchars($str1, ENT_NOQUOTES); //It will not convert any quotes.  

    //! Una entidad html es un conjunto de caracteres que comienza con un ampersand y termina con punto y coma

    $datos = htmlspecialchars($datos);

    // Removes blank spaces and strings specified by the user

    $datos=trim($datos);


    // filter_var(variable,filter_type, options)


    $datos = filter_var($datos, FILTER_SANITIZE_STRING);
    return $datos;
}
function iniciarSesion($table, $conexion){
    $stmt = $conexion->prepare("SELECT * FROM $table WHERE usuario = :usuario");
    $stmt->execute(
        [
        ':usuario'=>$_SESSION['usuario'],
        ]
    );
    return $stmt->fetch(PDO::FETCH_ASSOC);
}