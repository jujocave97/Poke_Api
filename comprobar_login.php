<?php
    function comprobarLogin ($email, $pass, $usuarios) {
        
                $nombre = "";
                $loginCorrecto = false;
                foreach($usuarios as $usuario) {
                    if($usuario["email"] == $email && $usuario["password"] == $pass) {
                        $nombre = $usuario["name"];
                        $loginCorrecto = true;
                        break;
                    }
                }
                if($loginCorrecto) {
                    require_once "pokeapi.php";
                } else {
                    require_once "index.php";
                    $color = "red"; // script para que el error esté dentro del form
                    echo "<script>  
                        document.addEventListener('DOMContentLoaded', function() {
                            var form = document.querySelector('form');
                            var errorMessage = document.createElement('p');
                            errorMessage.style.color = '$color';
                            errorMessage.className = 'login_incorrecto';
                            errorMessage.textContent = 'Login incorrecto';
                            form.appendChild(errorMessage);
                        });
                    </script>";
                    
                }
            }
    
?>