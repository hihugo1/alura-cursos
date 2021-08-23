<?php

$contasCorrentes = [
    '474.166.008-71' => [
        'titular' => 'Hugo',
        'saldo' => 4000] ,
    372891793234 =>[
        'titular' => 'vinicius',
        'saldo' => 10000],
    74281939138 => [
        'titular' => 'Maria',
        'saldo' => 1400]
];

$contasCorrentes['127.329.321-12'] = [
    'titular' => 'Claudia',
    'saldo' => 15000
];


$contasCorrentes[] = [
    'titular' => 'Claudia 3',
    'saldo' => 45300
];

foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf." => ";
    echo $conta['titular']. " => ";
    echo "R$".$conta['saldo'].PHP_EOL;
}