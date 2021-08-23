<?php

$carros = [
  'COT-3330' => [
      'cor' => 'preto',
      'modelo' => 'bugatti',
      'marca' => 'bugatti'
  ],
    'LMS-2318' => [
        'cor' => 'vermelho',
        'modelo' => 'ferrari',
        'marca' => 'ferrari'
    ]
];

foreach ($carros as $placa => $carro){
    echo $placa . " ". $carro['marca']. PHP_EOL;
}
