<?php
class Pessoa{
    //visibilidade <> atributos
    public $id;
    public $nome;
    public $rg;
    public $cpf;
    public $sexo;
    public $dataNasc;
    public $email;
    public $celular;
    public $etnia;
    public $ocupacao;
    
    //Construtor
    function __construct($idC, $nomeC, $rgC, $cpfC, $sexoC, $nascC, $emailC, $celC, $etniaC, $ocupC){
    //Métodos
        $this->id = $idC;
        $this->nome = $nomeC;
        $this->rg = $rgC;
        $this->cpf = $cpfC;
        $this->sexo = $sexoC;
        $this->dataNasc = $nascC;
        $this->email = $emailC;
        $this->celular = $celC;
        $this->etnia = $etniaC;
        $this->ocupacao = $ocupC;
    }
}
?>