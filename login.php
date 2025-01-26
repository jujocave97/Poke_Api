<?php
        require_once "json_handler.php";
        $usuarios = loadEventsFromJson();
        
        require_once "comprobar_login.php";
        if(isset($_POST["email"]) && isset($_POST["pass"])) {
            $email = $_POST["email"];
            $pass = $_POST["pass"];
            comprobarLogin($email, $pass, $usuarios);
        }
?>