import { ITarefa } from "../../tarefas/tarefas";
import Item from "./item"
import style from './Lista.module.scss'


function Lista({tarefas}: {tarefas : ITarefa[] })  {    
    return (
        <aside className={style.listaTarefas}>
            <h2 > Estudos do Dia</h2>
            <ul>
                {tarefas.map((item,index)=>(
                    <Item
                        // tarefa={item.tarefa}
                        // tempo = {item.tempo} 
                        key={index}          
                        {...item}         
                    />
                ))}                
            </ul>
        </aside>
    )
}

export default Lista;