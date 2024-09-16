<?php
function partlist($arr) {
    $final = [];     
    $n = count($arr);
    
    for ($i = 1; $i < $n; $i++) {
        $p1 = implode(" ", array_slice($arr, 0, $i));
        $p2 = implode(" ", array_slice($arr, $i));
        
        $final[] = [$p1, $p2];
    }
    
    foreach ($final as $parte) {
        echo $parte[0] . " | " . $parte[1] . "<br>";
    }
}

$cadena = ["Seguro", "que", "apruebo", "esta", "asignatura"];
partlist($cadena);
?>
