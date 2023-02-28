<?php
//Importação
require_once("pessoa.class.php");

class Teste{
    //objeto pessoa com a visibilidade privada
    private $pessoa;

    public function __construct(){
        //Objeto chamado pessoa que recebe a classe Pessoa()
        $pessoa = new Pessoa();
        //Passar um valor para o método setNome
        $pessoa->setNome("Samuel");
        //Imprimir o valor do método getNome
        echo $pessoa->getNome();

    }
    //Instância
}new Teste();

?>