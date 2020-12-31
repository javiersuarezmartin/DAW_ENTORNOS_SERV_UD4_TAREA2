<?php

// Declaramos el array con la información.

$caracteristicas_personas = array(
    "Juan"=>["altura" => 175, "pelo" => "rubio", "ojos" => "azules"],
    "Maria"=>["altura" => 168, "pelo" => "castaña", "ojos" => "marrones"],
    "Pedro"=>["altura" => 180, "pelo" => "castaño", "ojos" => "verdes"]
);


// Mostramos la información.

// Primero, se imprime la cabecera de la página html.

echo ('<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Tabla Equipos</title><link rel="stylesheet" href="../css/styles.css" type="text/css"></head>');
echo ('<body>');
echo ('<div class="container">');

// Segundo, se imprimen los datos.

foreach ($caracteristicas_personas as $clave => $valor) {
    echo '<p>';
    if (strcmp($clave,"Juan") == 0) {
        echo ("La altura de " . $clave . " es " . $valor["altura"] . " cm");        
    } elseif (strcmp($clave,"Maria") == 0) {       
        echo ("El color de ojos de " . $clave . " es " . $valor["ojos"]);
    } elseif (strcmp($clave,"Pedro") == 0) {
        echo ("El color de pelo de " . $clave . " es " . $valor["pelo"]);
    };
    echo '</p>';
};

// Finalmente se imprimen los cierres de etiquetas html restantes.

echo ('</div></body></html>');

?>