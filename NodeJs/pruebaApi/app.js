
const peticion = () =>{
    fetch('http://localhost:8082/api/user/')
    .then(response => response.json())
    .then(data => imprimir(data.all_user));
}



function imprimir(data){

    console.log(data)

    data.forEach(element => {

        let estado= "";
        if(element.estado === true){
            estado = '<button class="btn btn-success btn-m" style="cursor: text;">Activo</button>'
        }  else{
            estado = '<button class="btn btn-danger btn-m" style="cursor: text;">Inactivo</button>'
        }

        let tabla = `
        <tr>
            <td scope="col">${element.identificacion}</td>
            <td scope="col">${element.nombre}</td>
            <td scope="col">${element.apellidos}</td>
            <td scope="col">${element.usuario}</td>
            <td scope="col">${element.direccion}</td>
            <td scope="col">${element.telefono}</td>
            <td scope="col">${estado}</td>
        </tr>
        `

        $("#table_user tbody").append(tabla)

    });

}



peticion()