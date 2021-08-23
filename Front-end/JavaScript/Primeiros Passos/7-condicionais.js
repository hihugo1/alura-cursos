console.log(`\nTrabalhando com condicionais`);
const listaDeDestinos = new Array(
    `Salvador`,
    `São Paulo`,
    `Rio de Janeiro`
)

const idade = 19;
const estaAcompanhada = true;
const temPassagemComprada = true;

console.log("\nDestinos possiveis: ");
console.log(listaDeDestinos);

if ((idade >= 18) || (estaAcompanhada == true)) {
    console.log("Boa Viagem!");
    listaDeDestinos.splice(1, 1); // removendo item

}else {
    console.log("Não é maior de Idade e não posso vender");
}


console.log("\n\nEmbarque: ");
if(idade > 18 && temPassagemComprada){
    console.log("Boa Viagem!");
}else{
    console.log("Você não pode embarcar");
}

console.log(listaDeDestinos);

// console.log(idade > 18);
// console.log(idade < 18);
// console.log(idade <= 18);
// console.log(idade >= 18);
// console.log(idade == 18);
