<?php
require_once 'src/contaTemplate.php';


$primeiraConta = new Conta('123.456.789-10',"VacaBrega");

$primeiraConta -> depositar(valorADepositar: 500);

$primeiraConta->sacar(valorASacar: 100);



echo $primeiraConta->nomeTitular;
