
let employees = [
    {
        id: 1,
        name : "Manuela Hoyos"
    },
    {
        id: 2,
        name : "Katherin Cadavid"
    },
    {
        id: 3,
        name : "Jordy Herrera"
    }
]


let salary = [
    {
        id: 1,
        money : 300000
    },
    {
        id: 2,
        money : 200000
    }
]



const base = 2;

const getUser = ( base, collback ) =>{
    const user = employees.find( (us)=> us.id == base)
    if(user){
        collback(null, user)
    }else{
        collback("empleado no encontrado")
    }
}

const getSalary  = ( base, collback ) =>{
    const pago = salary.find( (sl)=> sl.id == base)?.money
    if(pago){
        collback(null, pago)
    }else{
        collback("salario no encontrado")
    }
}




getUser(base, ( error,  user )=>{
    if(error){
        return console.log("ERROR! ", error)
    }
    console.log(user)

    getSalary (user.id, ( error,  pago )=>{
        if(error){
            return console.log("ERROR! ", error)
        }
        console.log(pago)
    })
})
