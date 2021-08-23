<?php
/*function exibeOlaMundo(){
    echo "Olá mundo!";
}
exibeOlaMundo();


function adiciona2($x){
    return $x + 2;
}

$resultado = adiciona2( 10);
echo $resultado;

exit();
*/

//include 'funcoes.php';
//require 'funcoes.php';
require_once 'funcoes.php';

$contasCorrentes = [
    '474.166.008-71' => [
        'titular' => 'Hugo',
        'saldo' => 4000] ,
    '372891793234' =>[
        'titular' => 'vinicius',
        'saldo' => 300],
    '74281939138' => [
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
//$contador += 1;

$contasCorrentes['74281939138'] = sacar($contasCorrentes['74281939138'], 500);
$contasCorrentes['372891793234'] = sacar($contasCorrentes['372891793234'], 500);
$contasCorrentes['474.166.008-71'] = depositar($contasCorrentes['474.166.008-71'], 100000);

titularComLetrasMaiusculas($contasCorrentes['474.166.008-71']);

unset($contasCorrentes['372891793235']);

/*echo "<ul>";
foreach ($contasCorrentes as $cpf => $conta){
        exibeConta($conta);
}
echo "</ul>";
*/
//exibeMensagem(     "$cpf $titular $saldo");
    //exibeMensagem("$cpf $conta[titular] R$$conta[saldo]");
    //exibeMensagem($cpf . " => " . $conta['titular']. " => " . "R$".$conta['saldo']);

//E_NOTICE
//echo $contasCorrentes[0];
//E_WARNING
//E_ERROR
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>
    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta){ ?>
        <dt>
            <h3>
                <?= $conta['titular'];?> - <?php echo $cpf;?>
            </h3>
        </dt>
        <dd>
             Saldo: R$ <?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>
