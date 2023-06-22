<?php

//Php Só Trabalha com arrays do tipo inteiro ou strings nenhum outro !!!

// Para criar array com varias informações (Objetos?)

// titular da conta = Eu; Saldo da conta = 0

$conta1 = [     
    'titular' => 'Eu',
    'saldo' => 100
];

$conta2 = [
    'titular' => 'Eu2',
    'saldo' => 200
];

$conta3 = [
    'titular' => 'Eu3',
    'saldo' => 300
];
//                  indice manual  $echo contascorrentes[indice]['campo']
$contasConrrentes = ["Indeice Manual" => $conta1,$conta2,$conta3];

$contasConrrentes [] = ['titular' => 'Eu4', 'saldo' => 400];
//                              key       value
foreach ($contasConrrentes as $indice => $conta  ) {
    echo $indice . " " . $conta['titular'] . PHP_EOL;
}

// Adcionanado no array
// adciona na ultima posição do  array Ele Tambem auto incrementa mesmo em caso de indeice manual mas só se forem numeros; em caso de string não funciona
