<?php

namespace Alura\Banco\Modelo\Conta;

class Conta
{
    /*
    Para usar a classe de 'Conta' precisa-se definir alguns pontos: 
    > necessário o arquivo = require 'src/Conta.php';
    > definição de uso = $umaNovaConta = new Conta();
    */

    //definir dados da conta
    //Pode ser definido valores iniciais para as variáveis dos objetos.
    private $titular;
    private float $saldo = 0;
    //Atributos static's servem para acessar informações em depender do objeto em questão, diretamente da classe 'Conta'
    private static $numeroDeContas = 0;
    
    /*
    Método '__construct' define argumentos padrões para a classe, sendo assim, obrigando ou não(depende dos parâmetros passados) a ser preenchido os dados ao definir o new Conta(param1, param2)
    é executado ao iniciar a classe.
    */

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        
        $this->saldo = 0;

        //o uso de 'self::' acessar os atributos e métodos static da classe, 'Conta::' Exemplo de uso para incrementar a quantidade de contas adicionadas
        self::$numeroDeContas++;
    }

    //Método é executado quando uma instância deixa de existir 
    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public static function getNumeroDeContas():int  
    {
        return self::$numeroDeContas;
    }

    /*
    Para acessar e definir os dados do endereço de memória da conta devemos definir da seguinte forma:
        require '3-OrientacaoObjetos-Classes-Metodos-Atributos\src\Conta.php';
        $primeiraConta = new Conta();
        $primeiraConta->cpfTitular = '123.456.789-10';
        $primeiraConta->nomeTitular = 'Jonathan';
        $primeiraConta->saldo = 1000;

    Ao exibir informações da variável $primeiraConta com um var_dump(); podemos visualizar o endereço das informações que foram armazenadas e verificar os valores setados nos atributos.
        var_dump($primeiraConta);
    */

    public function sacar(float $valorASacar): void
    {
        /*
        A variável '$this' utilizada aqui é uma referência para o Objeto que a chamou, ou seja: 
        $primeiraConta = new Conta();
        $primeiraConta->saldo = 1000;
        $priemeiraConta->sacar(100);
        var_dump($primeiraConta) = 900

        É utilizado o endereço de referência do objeto da classe, onde as funções dentro deles são denominadas como 'Métodos'
        $this se refere ao objeto que "chamou" o método
        */
        if ($valorASacar > $this->saldo){
            echo "Saldo Insuficiente";
            return;
        } 
        
        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar <= 0){
            echo "Valor Inválido!";
            return;
        } 
        
        $this->saldo += $valorADepositar;
    }
    
    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        /*
        Em boas práticas é melhor evitar o uso de 'else' sendo assim pode ser feito um retorno de função vazio, como descrito no códiog abaixo. 
        Só será excutado os demais códigos caso não entre no critério da validação.
        */
        if ($valorATransferir>$this->saldo){
            echo "Saldo Indisponível";
            return;
        }

        $this->sacar($valorATransferir);
        
        $contaDestino->depositar($valorATransferir);

    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function getCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

}