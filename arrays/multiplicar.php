<?php
    $primervalor = 1;
    if (isset($_GET['x']))
        $primervalor = $_GET['x'];


    $segundovalor = $_GET['y'] ?? 1;
    
    echo "El resultado es " . $primervalor * $segundovalor;
?>