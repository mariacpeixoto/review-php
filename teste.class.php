<?php

require_once("pessoa.class.php");

class Teste{
    private $pessoa;

    public function __construct(){
        $pessoa = new Pessoa();

        $pessoa->setNome("Nome: " . $_POST['nome']);
        echo $pessoa->getNome() . "<br>";

        $pessoa->setEndereco("Endereco: " . $_POST['endereco']);
        echo $pessoa->getEndereco() . "<br>";

        $pessoa->setBairro("Bairro: " . $_POST['bairro']);
        echo $pessoa->getBairro() . "<br>";

        $pessoa->setCep("CEP: " . $_POST['cep']);
        echo $pessoa->getCep() . "<br>";

        $pessoa->setCidade("Cidade: " . $_POST['cidade']);
        echo $pessoa->getCidade() . "<br>";

        $pessoa->setEstado("Estado: " . $_POST['estado']);
        echo $pessoa->getEstado();

        echo "<script>alert('Cadastro concluído com sucesso!');</script>";
    }
}new Teste();
?>