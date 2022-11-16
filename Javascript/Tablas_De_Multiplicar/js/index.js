function Calcular(){
    let valorEnviado = parseInt(document.getElementById('opcionTabla').value)
    document.getElementById('resultado').innerHTML = "";
    
    for (let i = 0; i <=10; i++) {
        document.getElementById('resultado').innerHTML += (`${i} * ${valorEnviado} = ${(i*valorEnviado)} </br>`)
    }
}