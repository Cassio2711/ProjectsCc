import React from "react";
import style from "./Relogio.module.scss"
// react.fragment ou <></> = ao react fragment
export default function Relogio () {
    return (
        <React.Fragment>
        <span className={style.RelogioNumero}>0</span>
        <span className={style.RelogioNumero}>0</span>
        <span className={style.relogioDivisao}>:</span>
        <span className={style.RelogioNumero}>0</span>
        <span className={style.RelogioNumero}>0</span>
        </React.Fragment>
    )
}