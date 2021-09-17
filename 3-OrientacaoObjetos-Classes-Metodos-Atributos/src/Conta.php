<?php

class Conta
{
    /*
    Para usar a classe de 'Conta' precisa-se definir alguns pontos: 
    > necessário o arquivo = require 'src/Conta.php';
    > definição de uso = $umaNovaConta = new Conta();
    */

    //definir dados da conta
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;

    /*
    Para acessar e definir os dados do endereço de memória da conta devemos definir da seguinte forma:
        require '3-OrientacaoObjetos-Classes-Metodos-Atributos\src\Conta.php';
        $primeiraConta->cpfTitular = '123.456.789-10';
        $primeiraConta->nomeTitular = 'Jonathan';
        $primeiraConta->saldo = 1000;

    Ao exibir informações da variável $primeiraConta com um var_dump(); podemos visualizar o endereço das informações que foram armazenadas e verificar os valores setados nos atributos.
        var_dump($primeiraConta);
    */

}