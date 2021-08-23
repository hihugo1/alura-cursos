console.log(`\nTrabalhando com condicionais`);
const listaDeDestinos = new Array(
    `Salvador`,
    `São Paulo`,
    `Rio de Janeiro`
)

const idade = 19;
const estaAcompanhada = true;
let temPassagemComprada = false;
const destino = "Salvador";

console.log("\nDestinos possiveis: ");
console.log(listaDeDestinos);

const podeComprar = idade >= 18 || estaAcompanhada == true;

let contador = 0;
let destinoExiste = false

while (contador < 3) {
    if (listaDeDestinos[contador] == destino) {
        console.log("Destino existe");
        destinoExiste = true;
        break;
    }
    contador += 1;
}

console.log("Destino existe: ",destinoExiste)


if(podeComprar && destinoExiste){
    console.log("Boa Viagem!");
}else{
    console.log("Desculpa tivemos um erro!");
}

for (let i = 0; i < 3; i++) {
    if (listaDeDestinos[i] == destino) {
        console.log("Destino existe");
        destinoExiste = true;
    }
}