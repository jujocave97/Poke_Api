<?php
        $usuarios = [
            "usuario1" => ["nombre" => "jj", "email" => "jj@gmail.com", "pass" => "1234"],
            "usuario2" => ["nombre" => "pepe", "email" => "pp@gmail.com", "pass" => "1234"],
        ];

        require_once "comprobar_login.php";
        if(isset($_POST["email"]) && isset($_POST["pass"])) {
            $email = $_POST["email"];
            $pass = $_POST["pass"];
            comprobarLogin($email, $pass, $usuarios);
        }
?>