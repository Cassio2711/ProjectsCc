import React from "react";
import { ITarefa } from "../../tarefas/tarefas";
import Botao from "../botao";
import style from './formulario.module.scss';

class Formulario extends React.Component <{
   setTarefas: React.Dispatch<React.SetStateAction<ITarefa[]>>
}> {
   state = {
      tarefa:"",
      tempo : "00:00:00"
   }
  

   adcionarTarefas(evento : React.FormEvent<HTMLFormElement>){
      evento.preventDefault();
      this.props.setTarefas(tarefasAntigas => [...tarefasAntigas, {...this.state, selecionado:false, completado: false, id: "bbbaa" }])
      console.log("state:" , this.state)
      this.setState({
         tarefa: "",
         tempo : "00:00"
      })
   }
   render(): React.ReactNode   {
      return(
         <form className={style.novaTarefa} onSubmit = {this.adcionarTarefas.bind(this)}>
            <div className={style["inputContainer"]}>
               <label htmlFor="tarefa">
                  Adcione um novo estudo
               </label>
               <input 
                  type="text"
                  name="tarefa"                  
                  id="tarefa"
                  value={this.state.tarefa}
                  onChange = {(evento)=>{ this.setState({ ...this.state, tarefa: evento.target.value})}}
                  placeholder="o que estudar?"
                  required
               />
            </div>
            <div className={style.inputContainer}>
               <label htmlFor="tempo">
                  Tempo
               </label>
               <input 
                  type="time" 
                  step={1}
                  defaultValue= {this.state.tempo}
                  onChange = {(evento)=>{ this.setState({ ...this.state, tempo: evento.target.value})}}
                  name="tempo"
                  id="tempo"
                  min="00:00:00"
                  max="01:30:00"                  
               />
            </div>  
            <Botao type= 'submit' 
               texto= "Adcionar"
            ></Botao>  
         </form>
      )
   }
}

export default Formulario;