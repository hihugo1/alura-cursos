<?php

$junglers = [
    'Nidalee' =>[
        'dano' => 'magico',
        'categoria' => 'metamorfo',
        'estilo' => 'Early - MidGame',
        'ranger' => 2000
    ],
    'Kindred' => [
        'dano' => 'fisico',
        'categoria' => 'ranged',
        'estilo' => 'Mid - LateGame',
        'ranger' => 500
    ],
    'Udyr' => [
        'dano' => 'magico',
        'categoria' => 'tank',
        'estilo' => 'Early - MidGame',
        'ranger' => 100
    ]
];

$junglers['Lee sin'] = [
    'dano' => 'fisico',
    'categoria' => 'lutador',
    'estilo' => 'Early -MidGame',
    'ranger' => 300
];

function ExibeMensagem($mensagem){
    echo $mensagem .PHP_EOL;
}

function rangerAjuste ($jungler, $valorAjuste){
   if($valorAjuste > $jungler['ranger']){
       exibeMensagem("Você nao pode alterar o ranger");
   }else{
       $jungler['ranger'] -= $valorAjuste . PHP_EOL;
   }
   return $jungler;
}

$junglers['Nidalee'] = rangerAjuste($junglers['Nidalee'], 500);

foreach ($junglers as $jungler => $style){
    ExibeMensagem($jungler . " => " . $style['categoria']  . " => ". $style['dano'] . " => ". $style['estilo'] . " => " . $style['ranger']);
}