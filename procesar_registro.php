<?php
        require_once "json_handler.php";
        if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm_password"])){
            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $password2 = $_POST["confirm_password"];
            $events = loadEventsFromJson(); 
            $registro_incorrecto = false;
            $contraseñas_diferentes= false;
            foreach($events as $event){
                if($event["email"] == $email){
                    $registro_incorrecto = true;
                    require_once "registro.php";
                    die();
                }
            }
            if($password != $password2){
                $contraseñas_diferentes= true;
                require_once "registro.php";
                die();
            }else{
                $events[] = array("name"=> $name,"email"=> $email,"password"=> $password);
                saveEventsToJson($events);
                require_once "index.php";
            }
        }
    ?>