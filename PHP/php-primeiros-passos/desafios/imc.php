<?php

$peso = 80;
$altura = 1.80;

$imc = $peso / ($altura * $altura);

if($imc <= 16){
    echo "$imc".PHP_EOL;
    echo "Subpeso Severo. Se alimente melhor";
}else if($imc <= 19.9){
    echo "$imc".PHP_EOL;
    echo "Subpeso. Se alimente melhor";
}else if($imc <= 24.9){
    echo "$imc".PHP_EOL;
    echo "Normal. Parabens você está na faixa de peso ideal";
}else if($imc <= 29.9){
    echo "$imc".PHP_EOL;
    echo "Sobrepeso. Cuidado você está chegando na Obesidade";
}else if($imc <= 39.9){
    echo "$imc".PHP_EOL;
    echo "Obeso. Procure um medico";
}else if($imc >= 40){
    echo "$imc".PHP_EOL;
    echo "Obeso Mórbido. Procure um medico urgentemente";
}

