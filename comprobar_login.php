<?php
    function comprobarLogin ($email, $pass, $usuarios) {
        
                $nombre = "";
                $loginCorrecto = false;
                foreach($usuarios as $usuario) {
                    if($usuario["email"] == $email && $usuario["pass"] == $pass) {
                        $nombre = $usuario["nombre"];
                        $loginCorrecto = true;
                        break;
                    }
                }
                if($loginCorrecto) {
                    require_once "pokeapi.php";
                } else {
                    require_once "index.php";
                    $color = "red";
                    echo "<p style='color:$color;'>Login incorrecto</p>";
                    echo "<style>
                        #email, #pass {
                            border-color: red;
                        }
                        </style>"; 
                }
            }
    
?>