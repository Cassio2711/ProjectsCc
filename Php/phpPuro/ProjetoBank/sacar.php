<?php

//include 'contas.php'; qunado o arquivo não é necessario, não ira gerar erro

require 'contas.php';

$numeroConta = '123.123.123-12';
$saque = 1;

function sacar (array $contasCorrentes,string $numeroConta , float $saque)  {
    foreach ($contasCorrentes as $indice => &$conta) {
        if($conta['numero'] == $numeroConta){
            $conta['balanco'] = $conta['balanco'] - $saque;

            echo "{$conta['numero']} balanço atual {$conta['balanco']}".PHP_EOL;
        }
    }

    foreach($contasCorrentes as $indice => $conta) {
        echo "{$conta['balanco']}". PHP_EOL;
    }
    
    return $contasCorrentes;
};





sacar($contasCorrentes,$numeroConta,$saque);