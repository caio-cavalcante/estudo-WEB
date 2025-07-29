let altura = parseFloat(prompt("Digite sua altura em centímetros:"));
let peso = parseFloat(prompt("Digite seu peso em quilogramas:"));
let imc = (peso * 10000) / (altura * altura);
let classificacao;

if (imc < 18) {
    classificacao = "Magreza leve";
} else if (imc < 25) {
    classificacao = "Saudável";
} else if (imc < 30) {
    classificacao = "Sobrepeso";
} else {
    classificacao = "Obesidade";
}

alert("Seu IMC é: " + imc.toFixed(2) + "\nClassificação: " + classificacao);