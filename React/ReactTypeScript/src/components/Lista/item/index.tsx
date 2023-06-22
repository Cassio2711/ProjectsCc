import { ITarefa } from "../../../tarefas/tarefas"
import style from "../Lista.module.scss"

export default function item(/*props*/ {tarefa , tempo , selecionado , completado , id} : ITarefa)  {
    //const {tarefa, tempo} = props;
    return (
        <li className={style.item}>
        <h3>
            {tarefa} 
        </h3>
        <span>
            {tempo}
        </span>
    </li>
    )
    
}