<?php

foreach(hash_algos() as $algo){
    print_r($algo);
    echo "<br>";
}

// ? Hash = algoritmo que convierte una cadena de texto en otro string con caracteres de numeros y letras

$clave = 'Carlos';
echo "<br>".md5($clave) . "<br>";

echo sha1($clave) . "<br>";
echo hash("sha256",$clave) . "<br>";
echo hash("sha512",$clave) . "<br>";