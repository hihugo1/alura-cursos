<?php

echo "Arquivos de Funções" . PHP_EOL;

function sacar(array $conta, float $valorASacar) : array
{
    if ($valorASacar > $conta['saldo']){
        exibeMensagem("Você nao pode sacar");
    }else {
        $conta['saldo'] -= $valorASacar .PHP_EOL;;
    }
    return $conta;
}

function depositar(array $conta, float $valorADepositar) : array
{
    if ($valorADepositar < 0){
        exibeMensagem("Deposito invalido");
    }else {
        $conta['saldo'] += $valorADepositar . PHP_EOL;
    }
    return $conta;
}

function exibeMensagem(string $mensagem) {
    echo $mensagem. '<br>';
}

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}