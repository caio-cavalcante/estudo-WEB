function isEven(value) {
    if (value % 2 === 0) {
        alert('PAR!');
        return true;
    } else {
        alert('IMPAR!');
        return false;
    }
}

function fatorial(n) {
    if (n === 0) {
        return 1;
    } else {
        return n * fatorial(n - 1);
    }
}

function maximo(numeros) {
    let lista = numeros.split(',').map(Number);

    if (lista.length === 0) {
        return null;
    } else {
        let max = lista[0];
        for (let i = 1; i < lista.length; i++) {
            if (lista[i] > max) {
                max = lista[i];
            }
        }
        return max;
    }
}

function multiplicar(lista, multiplicador) {
    let numeros = lista.split(',').map(Number);
    let resultado = [];

    for (let i = 0; i < numeros.length; i++) {
        resultado.push(numeros[i] * multiplicador);
    }

    return resultado.join(',');
}