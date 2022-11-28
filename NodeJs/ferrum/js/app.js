const getUser = () => {
  fetch("http://localhost:8082/api/user/")
    .then((response) => response.json())
    .then((data) => imprimir(data));
};



function imprimir(data){
    console.log(data.all_user)

    data.all_user.forEach(element => {
        
        let estado = "";
        if(element.estado === false){
            estado = '<button class="btn btn-danger col-12" style="cursor: text;">Inactivo</button>'
        }
        if(element.estado === true){
            estado = '<button class="btn btn-success col-12" style="cursor: text;">Activo</button>'
        }

        let fila_tabla = `
        <tr>
            <td>${element.identificacion}</td>
            <td>${element.nombre}</td>
            <td>${element.apellidos}</td>
            <td>${element.direccion}</td>
            <td>${element.telefono}</td>
            <td>${element.usuario}</td>
            <td>${estado}</td>
        </tr>
        `

        $("#tableUser tbody").append(fila_tabla)
    });

}

getUser()