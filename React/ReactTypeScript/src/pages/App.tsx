import React, { useState } from 'react';
import Formulario from '../../src/components/formulario';
import Lista from '../../src/components/Lista';
import Cronometro from '../components/Cronometro';
import { ITarefa } from '../tarefas/tarefas';
import style from './App.module.scss';


function App() {
  const [tarefas, setTarefas] = useState<ITarefa[]>([]);
  return (
    <div className={style.AppStyle}>
      <Formulario setTarefas={setTarefas} />
      <Lista tarefas={tarefas}/>
      <Cronometro/>
    </div>
  );
}

export default App;
