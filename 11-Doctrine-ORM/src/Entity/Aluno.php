<?php

namespace Alura\Doctrine\Entity;

//Necessário indicar que esta classe é uma entidade com a 'annotations' abaixo:
/**
 * @Entity
 */

class Aluno
{
    //Necessário indicar o tipo de campo para entidade e suas propriedades básicas
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;

    //Necessário indicar o tipo de campo para entidade e suas propriedades básicas
    /**
     * @Column(type="string")
     */
    private $nome;

    public function getID(): int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    //o uso do 'Self' como retorno de uma função serve para que possa ser acessado algum outro método da entidade após ser realizado a chamada do 'setNome' exemplo abaixo.
    public function setNome($nome) : self
    {
        $this->nome = $nome;
        return $this;
    }
    /*Ex do uso do 'self' 
        $alunoNovo = New Aluno();
        $alunoNovo->setNome('Aluno Teste')->getNome();
    */

    

}