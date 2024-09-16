<?php
$color = array('blanco'=>'blanco.html', 'verde' => 'verde.html', 'rojo' => 'rojo.html');
  
echo "<ul>";
foreach ($color as $valor => $enlace){
  echo "<li><a href='" . $enlace . "'>" . $valor . "</a></li>";
}
echo "</ul>";

?>