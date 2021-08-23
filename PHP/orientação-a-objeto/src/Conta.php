<?php

class Conta
{
    //dados da conta
    private Titular $titular;
    private float $saldo;
    private static float $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

//...
    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponivel";
        } else {
            $this->saldo -= $valorASacar;
        }
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
        } else {
            $this->saldo += $valorADepositar;
        }
    }

    public function transferir(float $valorATransferir, Conta $contaDestino)
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponivel";
            return; // return ele para o if sem precisar do else
            // isso ajuda na leitura
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);

    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

}

//require 'src/Conta.php';
//$primeiraConta = new Conta();
//$primeiraConta->saldo = 200;
//$primeiraConta->cpfTitular = '123.456.789-10';
//$primeiraConta->nomeTitular = 'Vinicius Dias';
//var_dump($primeiraConta); // Verifique que o objeto já possui os dados necessários de uma conta criada
//$segundaConta = new Conta();
//$segundaConta->cpfTitular = '987.654.321-10';
//$segundaConta->nomeTitular = 'Patricia';
//$segundaConta->saldo = 1500;
//var_dump($primeiraConta); // Verifique que o objeto não teve seus valores alterados
//var_dump($segundaConta); // Note que este objeto possui os valores da segunda conta criada