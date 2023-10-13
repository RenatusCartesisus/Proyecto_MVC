<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="/V/MVC/css/style.css">
    <title>Login</title>
</head>
<body class="bg-image">

    <div class="container">
        <!-- $_SERVER['PHP_SELF'] y htmlspecialchars(); -->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

<div class="input-group">
    <i class="fa fa-user-o icons" aria-hidden="false"></i>
    <input type="text" name="usuario" placeholder="Usuario" class="form-control">
    
</div>
<div class="input-group">
    <i class="fa fa-lock icons" aria-hidden="false"></i>
    <input type="password" name="password" placeholder="Contraseña" class="form-control">
</div>


<ul>
<?php if(!empty($errores)):?>
<?php echo $errores; ?>
<?php endif; ?>
</ul>

<div class="input-group">
    <button type="submit" name="submit" class="btn btn-flat-green">Ingresar</button>
</div>
        </form>
        <a href="<?php echo RUTA.'registro.php'; ?>" class="login-link">¿No tienes cuenta?</a>
    </div>
</body>
</html>