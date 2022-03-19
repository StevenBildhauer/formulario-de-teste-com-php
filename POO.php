<?php

$conta  = new contabanco; // meu objeto

class contabanco {
    public $saldo;
    public $titular;
    public $poupanca;
    public $banco;
    
   public function __construct($bancoSSA,$titular,$agencia,$saldo){ // recebe os atributos da new contabanco
        }
        

    public function meuSaldo(){
        return 'Saldo é:';
    }

}

$conta = new contabanco('bancoSSA', 'titular','agencia','saldo',);


/*
var_dump($conta->meuSaldo()); // verificar uma variavel
*/
