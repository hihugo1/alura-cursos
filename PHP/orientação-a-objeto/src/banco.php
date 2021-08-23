<?php

require_once 'Conta.php';
require_once 'Titular.php';
require_once 'Cpf.php';

$HugoSergio = new Titular(new Cpf('123.456.789-10'), 'Hugo Sergio');
$primeiraConta = new Conta($HugoSergio);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$Patricia = new Titular(new Cpf('698.549.548-10'), 'Patricia');
$segundaConta = new Conta($Patricia);
var_dump($segundaConta);

$Random = new Titular(new Cpf('123'), 'Abcdefg');
$outra = new Conta($Random);

echo "Saldo: ".$primeiraConta->recuperaSaldo(). PHP_EOL.$primeiraConta->transferir(100, $segundaConta);
echo "Contas geradas: ".Conta::recuperaNumeroDeContas();