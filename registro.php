<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
     
    <form class= "form_registro" action="procesar_registro.php" method="post">
        <label for="name">Nombre</label>        
        <input type="text" id="name" name="name" class="<?php echo $error_class; ?>" required><br><br>
        
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="<?php echo $error_class; ?>" required><br><br>
        
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" class="<?php echo $error_class; ?>" required><br><br>

        <label for="confirm_password">Confirmar Contraseña</label>
        <input type="password" id="confirm_password" name="confirm_password" class="<?php echo $error_class; ?>" required><br><br>

        <?php if(isset($registro_incorrecto) && $registro_incorrecto == true){
            echo "<p style='color:red;'>El email ya está registrado</p>";
        } ?>
        <?php if(isset($contraseñas_diferentes) && $contraseñas_diferentes == true){
            echo "<p style='color:red;'>Las contraseñas no coinciden</p>";
        } ?>
        <input type="submit" value="Registrarse">
    </form>
</body>
</html>