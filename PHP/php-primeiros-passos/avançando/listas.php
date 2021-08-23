<?php

$idadeList = [21, 23, 43, 12, 34, 56];

list($idadeHugo, ,$idadeMaria, $idadeJoao) = $idadeList;

$idadeList[] = 20;

foreach ($idadeList as $idade){
    echo $idade .PHP_EOL;
}

