<?php
    require_once("banco.php");


    class User {
        private $nome;
        private $email;

        public function __construct($nome,$email){
            $this->nome = $nome;
            $this->email = $email;
        }

        private function getNome(){
            return  $this->nome;
        }

        private function getEmail(){
            return $this->email;
        }

        private function setNome($novoNome){
            $this->nome = $novoNome;
        }

        private function setEmail($novoEmail){
            $this->email = $novoEmail;
        }

        public function exibirDados(){
            echo $this->getEmail() . "<br/>"; 
            echo $this->getNome();
        }

        
    }

    $user = new User("Marry","m@gmail.com");

    $user->exibirDados();



?>