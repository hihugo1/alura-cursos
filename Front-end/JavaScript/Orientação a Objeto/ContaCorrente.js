export class ContaCorrente {
    agencia;
    //Private
    //#saldo = 0;
    //https://github.com/tc39/proposal-class-fields#private-fields
    _saldo;

    sacar(valor) {
        if (this._saldo >= valor) {
            this._saldo -= valor;
            return valor;
        }
    }

    depositar(valor){
        if(valor <= 0){
            return;
        }
        this._saldo += valor;

    }

}