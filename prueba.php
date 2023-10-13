
<?php

echo trim("ewfewfj", "ew"). "<br>";





echo "           #         ewfewfj                       ". "<br>";

$script = "<script>alert('Check this')</script>";

// echo $script;

// Sanitizar = desactivar el codigo potencialmente malicioso
// Validar = asegurarse de que los datos estan en el formato correcto (tipo, valor, rango)

// ! echo "%3Cscript%3Ealert(%27Hi%27)%3C/script%3E";
// ? echo filter_var("%3Cscript%3Ealert(%27Hi%27)%3C/script%3E", FILTER_SANITIZE_STRING);

// FILTER_SANITIZE_STRING -> Remueve todas las etiquetas de un String

// echo filter_var($script, FILTER_SANITIZE_STRIPPED);



// $i=0;

// foreach(filter_list() as $fil){
//     echo "$i".  $fil . "<br>";
//     $i++;
// }





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$str = htmlspecialchars("THis is some <b>bold<b>");
echo htmlspecialchars($str, ENT_COMPAT);
echo htmlspecialchars(htmlspecialchars($str), ENT_COMPAT);

print_r(["jhola"=>"oda", "vava"=>"papapa"]);
print_r(array("jhola"=>"oda", "vava"=>"papapa"));

echo "print_r: ";
print_r("Hola papus");
echo "<br>";
echo "var_dump: ";
var_dump("Hola papus", "aaaa");
?>
    
</body>
</html>