<?php
$edades=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");

echo "ordenado por nombre ascendiente <br>";
ksort($edades);
print_r($edades);

echo "<br> ordenado por edad ascendiente <br>";
asort($edades);
print_r($edades);

echo "<br> ordenado por nombre descendiente <br>";
krsort($edades);
print_r($edades);

echo "<br> ordenado por edad descendiente <br>";
arsort($edades);
print_r($edades);
?>