const listaClientes = () =>{
    // const promise = new Promise((resolve,reject)=>{
    //     const http =new XMLHttpRequest();        
    //     http.open('GET', 'http://localhost:3000/profile');        
    //     http.send();        
    //     http.onload = () =>{
    //         if(http.status >= 400) {
    //             reject(JSON.parse(http.response) );
    //         } else {
    //             resolve(JSON.parse(http.response) )
    //         }
    //     }
    // })
    // console.log(promise);
    // return promise;

    return fetch(`http://localhost:3000/profile`)
            .then(resposta =>{
                return resposta.json()
            });
        };

const criaCliente = (nome,email) =>{
    return fetch(`http://localhost:3000/profile`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'            
        },
        body: JSON.stringify({
            nome : nome,
            email : email
        })
    })
    .then(respota =>{        
        return respota.body
    })
}

const removeCliente = (id)=>{
    return fetch(`http://localhost:3000/profile/${id}`,{
        method: 'DELETE'        
    })    
}

       
        
export const clienteService = {
    listaClientes,
    criaCliente,
    removeCliente
}
