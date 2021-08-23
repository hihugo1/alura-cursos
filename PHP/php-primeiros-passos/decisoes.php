<?php

$idade = 16;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou.";
echo "a partir de 16 anos acompanhado" . PHP_EOL;


if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho";
}elseif ($idade >= 16 && $numeroDePessoas > 1){
    echo "Você tem $idade anos, está acompanhado(a), entao pode entrar.".PHP_EOL;
}else {
    echo "Permissão negada".PHP_EOL;
    echo "Você é menor de idade";
    echo PHP_EOL."É uma pena";
}

echo PHP_EOL;
echo "Adeus!";

