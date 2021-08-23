//instancias 
//instanciando a class cliente

import { CLiente } from "./Cliente.js";
import { ContaCorrente } from "./ContaCorrente.js"

const cliente1 = new CLiente();
const cliente2 = new CLiente();

cliente1.nome = "Hugo";
cliente1.cpf = "123.456.789-10";
cliente1.rg = 12981239931;


cliente2.nome = "Ricardo";
cliente2.cpf = "109.876.543-21 ";

const ContaCorrenteHugo = new ContaCorrente();
ContaCorrenteHugo.agencia = 1001;
ContaCorrenteHugo.cliente1 = cliente1;


const ContaCorrenteRicardo = new ContaCorrente();
ContaCorrenteRicardo.agencia = 1001;
ContaCorrenteRicardo.cliente2 = cliente2;

ContaCorrenteRicardo._saldo = 0;
ContaCorrenteRicardo.depositar(10000);

ContaCorrenteHugo._saldo = 0;
ContaCorrenteHugo.depositar(100);
ContaCorrenteHugo.depositar(200);
ContaCorrenteHugo.depositar(-1);
ContaCorrenteHugo.depositar(50);


const valorSacado = ContaCorrenteHugo.sacar(50);

console.log(ContaCorrenteHugo);
console.log(ContaCorrenteRicardo);  
