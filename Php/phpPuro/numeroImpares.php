<?php

$numero = 1;

while ($numero <= 100){
    $resto = $numero % 2;
    if($resto == 0) {
        echo "$numero";
        
    }
    $numero++;
}