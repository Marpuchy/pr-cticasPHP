<?php
$temperaturas = "18.6, 17.3, 24.4, 20.8, 22.9, 24.6, 15.5, 15.3, 15.3, 20.0, 18.5, 24.3, 16.6, 20.1, 25.0, 16.0, 24.4, 22.1, 21.3, 16.9, 19.1, 19.8, 24.0, 25.0, 16.3, 16.4, 22.6, 23.4, 15.9, 22.7";

$aTemperaturas = explode(", ", $temperaturas);

echo "media: <br>";
$media = array_sum($aTemperaturas)/count($aTemperaturas);
print_r($media);

echo "<br> 5 mas altas: <br>";
rsort($aTemperaturas);
for ($x = 0;$x < 5;$x ++) {
    echo " | " .$aTemperaturas[$x];
}
echo " |";

echo "<br> 5 mas bajas: <br>";
sort($aTemperaturas);
for ($x = 0;$x < 5;$x ++) {
    echo " | " .$aTemperaturas[$x];
}
echo " |";
?>