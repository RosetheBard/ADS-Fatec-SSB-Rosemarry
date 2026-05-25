<?php

class Pessoa {
    private $nome;
    private $contaBanco;

    public function __construct($nome,$contaBanco){
        $this->nome = $nome;
        $this->contaBanco = $contaBanco;
    }

    public function getName (){
        echo $this->nome;
    }

    public function getBanco (){
        echo $this->contaBanco;
    }
}
?>