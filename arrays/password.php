<?php
function rand_Pass($upper, $lower, $numeric, $other) {
    $password = array();

    for ($x = 0; $x < $upper; $x++) {
        $password[] = chr(rand(65, 90)); 
    }

    for ($x = 0; $x < $lower; $x++) {
        $password[] = chr(rand(97, 122)); 
    }
    for ($x = 0; $x < $numeric; $x++) {
        $password[] = chr(rand(48, 57)); 
    }

    $otros = "!@#$%^&*()-_+=";
    $otros_len = strlen($otros);
    for ($x = 0; $x < $other; $x++) {
        $password[] = $otros[rand(0, $otros_len - 1)];
    }

    shuffle($password);

    return implode('', $password);
}

echo rand_Pass(1, 5, 3, 2);
?>