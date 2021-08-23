<?php

$array = [

    //O php ele sobrescreve o tipo de dado
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd'
];

foreach ($array as $item){
    echo $item . PHP_EOL;
}
