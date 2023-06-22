<?php

function exibeMensagem ($mensagem) {
    echo $mensagem . PHP_EOL;
};

exibeMensagem("Oi");


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
$contasConrrentes = [$conta1,$conta2,$conta3];


//                              key       value
foreach ($contasConrrentes as $indice => $conta  ) {
    echo $indice . " " . $conta['titular']. ' ' . $conta['saldo'] .' '. PHP_EOL;
}
