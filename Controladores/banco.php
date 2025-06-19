<?php
class Banco {
    private $mysqli;

    public function __construct() {
        $host = "localhost";
        $usuario = "root";
        $senha = "adamanspc";
        $banco = "sistema";

        $this->mysqli = new mysqli($host, $usuario, $senha, $banco);

        if ($this->mysqli->connect_error) {
            die("Falha na conexão: " . $this->mysqli->connect_error);
        }
    }

    public function setPessoa($nome, $sobrenome, $sexo, $idade, $endereco){
        $stmt = $this->mysqli->prepare("INSERT INTO pessoas (nome, sobrenome, sexo, idade, endereco) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssis", $nome, $sobrenome, $sexo, $idade, $endereco);
        return $stmt->execute();
    }

    public function getPessoas(){
        $result = $this->mysqli->query("SELECT id, nome, sobrenome, idade, sexo, endereco FROM pessoas");
        $dados = [];
        while($row = $result->fetch_assoc()){
            $dados[] = $row;
        }
        return $dados;
    }

    public function getPessoaById($id){
        $stmt = $this->mysqli->prepare("SELECT * FROM pessoas WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function deletePessoa($id){
        $stmt = $this->mysqli->prepare("DELETE FROM pessoas WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    public function updatePessoa($id, $nome, $sobrenome, $sexo, $idade, $endereco){
        $stmt = $this->mysqli->prepare("UPDATE pessoas SET nome=?, sobrenome=?, sexo=?, idade=?, endereco=? WHERE id=?");
        $stmt->bind_param("sssisi", $nome, $sobrenome, $sexo, $idade, $endereco, $id);
        return $stmt->execute();
    }
}
?>
