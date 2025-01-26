<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
        $color = "black";
    ?>
    <div class="main_inicio">
        <form class="formulario_inicio" action="login.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" style="color: <?= $color?>" required/>
            <label for="pass">Contraseña</label>
            <input type="password" name="pass" id="pass"  style="color: <?= $color?>" required/>
            <button type="submit">Enviar</button>
            <a href="registro.php" class="button">Registro</a>
        </form>
    </div> 
    
</body>
</html>