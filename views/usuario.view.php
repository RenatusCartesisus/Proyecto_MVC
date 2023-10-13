<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a mi sitio</title>
</head>
<body>
    
<h1>Bienvenido <?php echo $user['usuario']; ?></h1>
<a href="<?php echo RUTA.'close.php'; ?>">Cerrar sesión</a>

</body>
</html>