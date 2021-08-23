<?php

$idadeList = [21, 23, 43, 12, 34, 56];

$idadeList[count($idadeList)] = 20;
$idadeList[] = 34;

for($i = 0; $i < count($idadeList); $i++){
    echo $idadeList[$i].PHP_EOL;
}