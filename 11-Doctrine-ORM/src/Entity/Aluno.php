<?php

namespace Alura\Doctrine\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

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

    //Deve forma podemos fazer o relacionamento de um para muitos entre o aluno e telefones
    //targetEntity = seria a Entidade relacionada
    //mappedBy = seria o campo da entidade relacionado referente a entidade pai
    /**
     * @OneToMany(targetEntity="Telefone", mappedBy="idAluno")
     */
    private $telefones;

    public function __construct()
    {
        $this->numeroTelefones = new ArrayCollection();
    }

    //getters
    public function getID(): int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getTelefones(): Collection
    {
        return $this->telefones;
    }
    //*****************************************************

    //setters
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

    public function setTelefone(Telefone $telefoneNovo)
    {
        $this->telefones->add($telefoneNovo);
        $telefoneNovo->setAluno($this);
        return $this;
    }

    //*****************************************************
}