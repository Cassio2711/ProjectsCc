<?php

$idade = 1;

/*
    if > (maior que)
    if = (igual)
    if < (menor que)
    if > || < (em vez de || pode ser or)
    if >= (maior igual)
*/

if ($idade >18) {
    echo "É maior que 21";
} else if ($idade = 1) {
    echo "Só pode se maior de 21" .PHP_EOL;
} else {
    echo "Só pode se maior de 21" .PHP_EOL;
}

/*
    se o bloco tier uma unica instrução (opcional);
    if ($idade > 18)
        echo "É maior que 21"

*/

/*
    Ternario = Javascript

    $variavel = $condicao ? $valorSeVerdadeiro : $valorSeFalso;

    (Exemplo)
  
    $idade = 15;
    $mensagem = $idade < 18 ? ‘Você é menor de idade’ : ‘Você é maior de idade’;
    echo $mensagem;
*/