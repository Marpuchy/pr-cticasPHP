<?php
$strings = ["victor", "por", "favor", "un", "diez"];

$longitud_cadena = function($cadena) {
    return strlen($cadena);
};

$longitudes = array_map($longitud_cadena, $strings);

$longitud_minima = min($longitudes);
$longitud_maxima = max($longitudes);

echo "La longitud mínima es: " . $longitud_minima . "\n";
echo "<br>La longitud máxima es: " . $longitud_maxima . "\n";
?>
