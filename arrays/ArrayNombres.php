<?php
    $nombres = array("Emma", "Marc", "Andreu");
    echo "<h1>" . count($nombres) . "</h1>";
    echo "<h1>" . implode(" ", $nombres) . "</h1>";
    $nuevonombres = $nombres;
    asort($nuevonombres);
    echo "<h1>" . implode(" ", $nuevonombres) . "</h1>";
    $reverse = array_reverse($nombres);
    echo "<h1>" . implode(" ", $reverse) . "</h1>";
    echo "<h1>" . array_search("Marc", $nombres) . "</h1>";

    $alumnos = array(
        array('id'=> "1", 'nombre' => "Emma",'edad' => "19"), 
        array('id'=> "2", 'nombre' => "Marc",'edad' => "19"), 
        array('id'=> "3", 'nombre' => "Andreu",'edad' => "20")
    );
    echo "<table><tr><th>ID</th><th>Nombre</th><th>Edad</th></tr>";

    foreach ($alumnos as $alumno) {
    echo "<tr>";
    foreach ($alumno as $dato) {
        echo "<td>" . $dato . "</td>";
    }
    echo "</tr>";
    }
    echo "</table>";


    $columna = array_column($alumnos, 'nombre');
    echo "<h1>" . implode(" ", $columna) . "</h1>";

    $numeros = array();

    for ($x = 0; $x < 10; $x++){
        $numeros[$x] = $x;
    }
    echo "<h1>" . implode(" ", $numeros) . "</h1>";

    echo "<h1>" . array_sum($numeros) . "</h1>";

?>