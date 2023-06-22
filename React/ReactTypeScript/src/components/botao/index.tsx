import React from "react";
import style from './Botao.module.scss'

class Botao extends React.Component <{texto : String ; children? : React.ReactNode ; type?: "button" | "submit" | "reset" | undefined}> {
    render(){        
        const { type = "button"} = this.props;
        return(
            <button type={type} className={style.botao}>
                {this.props.texto}
            </button>
        )
    }
}

export default Botao;