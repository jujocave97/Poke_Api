<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon API</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
        <div class="buscador">
            <h2>Introduce el nombre o ID de un Pokemon</h2>
            <form action="pokeapi.php" method="POST">
                <input type="text" name="pokemon">
                <input type="submit" value="Buscar">
            </form>
        </div>
        <?php
            $color_type = [
                "normal" => "#A0A2A0","poison" => "#923FCC","psychic" => "#EF3F7A","grass" => "#3DA224","ground" => "brown","ice" => "#3DD9FF","fire" => "#E72324","rock" => "#B0AB82","dragon" => "#4F60E2","water" => "#2481F0","bug" => "#92A212","dark" => "black","fighting" => "#FF8100","ghost" => "#713F71","steel" => "#60A2B9","flying" => "	#82BAF0","electric" => "#FAC100","fairy" => "#EF71F0"
            ];
            $url = "https://pokeapi.co/api/v2/pokemon/";
            if (isset($_POST["pokemon"]) && !empty($_POST["pokemon"])) {
                $pokemon = strtolower(trim($_POST['pokemon'])); // Asegúrate de limpiar el input
                $ch = curl_init($url . $pokemon);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $result = curl_exec($ch);
                $datos_pokemon = json_decode($result, true);
                curl_close($ch);
            
                if (isset($datos_pokemon['name'])) {
                    echo "<div class='contenedor'>  
                            <div class='imagen' style='background-color:" . $color_type[$datos_pokemon['types'][0]['type']['name']] . "'>
                                <img src='" . $datos_pokemon['sprites']['front_default'] . "' style='width:200px; height:200px;'/>
                            </div>
                            <hr/>
                            <div class='pokemon'>
                                <h2>" . ucfirst($datos_pokemon['name']) . "</h2>
                                <h3> Tipo: " . ucfirst($datos_pokemon['types'][0]['type']['name']) . "</h3>
                                <h3> HP: " . $datos_pokemon['stats'][0]['base_stat'] . "</h3>
                                <h3> Attack: " . $datos_pokemon['stats'][1]['base_stat'] . "</h3>
                                <h3> Defense: " . $datos_pokemon['stats'][2]['base_stat'] . "</h3>
                                <h3> Special Attack: " . $datos_pokemon['stats'][3]['base_stat'] . "</h3>
                                <h3> Special Defense: " . $datos_pokemon['stats'][4]['base_stat'] . "</h3>
                            </div>
                        </div>";
                } else {
                    // Muestra el mensaje de error si el Pokémon no existe
                    echo "<h1 style='color: red; text-align: center;'>¡El Pokémon no fue encontrado!</h1>";
                }
            } elseif (isset($_POST["pokemon"])) {
                // Si el input está vacío pero el formulario fue enviado
                echo "<h1 style='color: red; text-align: center;'>Por favor ingresa el nombre de un Pokémon.</h1>";
            }
        ?>
</body>
</html>