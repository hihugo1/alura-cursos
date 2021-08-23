<?php

$conta1 = [
    'titular' => 'Hugo',
    'saldo' => 4000
    ];

$conta2 = [
    'titular' => 'vinicius',
    'saldo' => 10000
    ];
$conta3 = [
    'titular' => 'Maria',
    'saldo' => 1400
];


$contasCorrentes = [$conta1, $conta2, $conta3];

for($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular'].PHP_EOL;
}