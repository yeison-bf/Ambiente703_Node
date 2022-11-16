

console.log("Respuesta 1") // primero  // primero
console.log("Repuesta 2") // segundo   // segundo

setTimeout(() => {
    console.log("Respuesta 3") // cuarto   // sexto
}, 3000);

setTimeout(() => {
    console.log("Respuesta 4") //  tercero  // cuarto 
}, 0);

setTimeout(() => {
    console.log("Respuesta 5") // quinto // quinto
}, 0);

console.log("Terminó el proceso...") // sexto // tercero

