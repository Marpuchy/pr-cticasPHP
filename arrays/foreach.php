<?php
    $color = array('blanco', 'verde', 'rojo');

  echo "<ul>";
  foreach ($color as &$valor){
    echo "<li>" . $valor . "</li>";
  }
  echo "</ul>";

?>