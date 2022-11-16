
const peticion = () =>{
    fetch('http://localhost:8082/api')
    .then(response => response.json())
    .then(data => console.log(data));
}


peticion()