<?php

class Conta 
{
    private  string $cpfTitular;
    public  readonly string $nomeTitular;
    private float $saldo = 0;

    public function __construct (string $cpfTitular, string $nomeTitular)
    {
        $this->cpfTitular = $cpfTitular;
        $this->validaNomeTitular($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;
    }


    public function sacar (float $valorASacar) :void {
        if ($valorASacar > $this->saldo) {
            echo "saldo indisponivel";
            return;
        }
        $this->saldo -= $valorASacar;
        
    }

    public function depositar (float $valorADepositar) : void {
        if ($valorADepositar < 0) {
            echo "Valor para depositar deve ser positivo";
            return;
        } 
        $this->saldo +=$valorADepositar;
        
    }

    public function transferir (float $valorATransferir , Conta $contaDestino) : void {
        if($valorATransferir < 0) {
            echo "Valor deve ser positivo";
            return;
        } 
        if ($this->saldo < $valorATransferir) {
            echo "Saldo indisponivel";
            return;
        } 
        $this->sacar($valorATransferir);
        $contaDestino.depositar($valorATransferir);
        
    }    

   /* public function setnomeTitular(string $nome):void { GETTERS AND SETTERS
        $this-> $nomeTitular = $nome;                                                PHP 8,1 Voce POde Usar A propriedade readonly no construtor e ai voce pode deixar public
    }                                                                                  e as variaveis poderam ser escritas uma unica vez e pode ser acessadas sem usar getters*/

    /*public function getnomeTitular ():string{
        return $this-> $nomeTitular;
    }                                                             Só ir no codigo e acessar a variavelk normalmente $this->nomeTitular

    /*public function setCpf (string $cpf):void{
        $this->$cpfTitular = $cpf;
    }*/

    public function getCpf():string {
        return $this->cpfTitular;
    }
    
    public function getSaldo():float {
        return $this->saldo;
    }

    private function validaNomeTitular(string $nomeTitularAValidar ) {
        if(strlen($nomeTitularAValidar < 5))
        {
            echo "Nome precisa ter 5 characters";
            exit();
        };                  
    }
}
