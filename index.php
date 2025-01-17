<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $color = "black";
    ?> 
    <form action="login.php" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" style="color: <?= $color?>" required/>
        <label for="pass">Contraseña</label>
        <input type="password" name="pass" id="pass"  style="color: <?= $color?>" required/>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>