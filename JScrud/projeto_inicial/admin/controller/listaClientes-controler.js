import { clienteService } from "../service/cliente-service.js";
const tabela = document.querySelector('[data-tabela]');


const criaNovaLinha = (nome,email,id) =>{
    const linhaNocaCliente = document.createElement('tr');
    const conteudo = `
    <td class="td" data-td>${nome}</td>
        <td>${email}</td>
        <td>
            <ul class="tabela__botoes-controle">
                <li><a href="../telas/edita_cliente.html" class="botao-simples botao-simples--editar">Editar</a></li>
                <li><button class="botao-simples botao-simples--excluir" type="button">Excluir</button></li>
            </ul>
        </td>
    `
    linhaNocaCliente.innerHTML = conteudo;
    linhaNocaCliente.dataset.id = id;
    console.log(linhaNocaCliente);

    return linhaNocaCliente;
}

clienteService.listaClientes()
    .then(data =>{        
            data.forEach(element => {        
            tabela.appendChild(criaNovaLinha(element.nome,element.email,element.id));
    })});

    tabela.addEventListener('click',(event)=>{
       let ehBotaoDeletar = event.target.className === 'botao-simples botao-simples--excluir';       
       if(ehBotaoDeletar){
        const linhaCliente = event.target.closest('[data-id]');
        let id = linhaCliente.dataset.id;  
        console.log(id);
        clienteService.removeCliente(id)
       }
    })
