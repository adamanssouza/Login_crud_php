<?php
require_once(__DIR__ . "/banco.php"); 


class cadastroPessoaController {
    private $banco;

    public function __construct(){
        $this->banco = new Banco(); 
        $this->cadastrar();         
    }

    private function cadastrar(){
        
        $this->banco->setPessoa(
            $_POST['nome'],
            $_POST['sobrenome'],
            $_POST['sexo'],
            $_POST['idade'],
            $_POST['endereco']
        );
        
        header("Location: ../Login/cadastro.php");
        exit();
    }
}


new cadastroPessoaController();

?>