let content = '';
for (let i = 1, pot = 2; i <= 10; i++, pot*=2) {
    content += `2 elevado a ${i} = ${pot}<br>`;
}
    content += `2 dividido por 0 = ${2/0}<br>`;
    content += `-2 dividido por 0 = ${-2/0}<br>`;
    content += `0 dividido por 0 = ${0/0}<br>`;
document.body.innerHTML += content;