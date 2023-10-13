<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Registrar</title>
</head>
<body class="bg-image">

    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

<div class="input-group">
    <i class="fa fa-lock icons" aria-hidden="false"></i>
    <input type="text" name="usuario" placeholder="Usuario" class="form-control">
</div>
<div class="input-group">
    <i class="fa fa-lock icons" aria-hidden="false"></i>
    <input type="password" name="password" placeholder="Contraseña" class="form-control">
</div>

<div class="input-group">

<select name="rol" class="form-control" id="">
    <option value="">Selecciona un privilegio</option>
    <option value="administrador">Administrador</option>
    <option value="usuario">Usuario</option>
</select>
</div>



<?php if(!empty($error)):?>
    <ul>
<?php echo $error; ?>
    </ul>
<?php endif; ?>

<button type="submit" name="submit" class="btn btn-flat-green">Registrar</button>
        </form>
        <a href="<?php echo RUTA.'login.php'; ?>" class="login-link">¿Ya tienes cuenta?</a>
    </div>

    
</body>
</html>