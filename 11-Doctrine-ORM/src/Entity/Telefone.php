<?php

namespace Alura\Doctrine\Entity;

//Necessário indicar que esta classe é uma entidade com a 'annotations' abaixo:
/**
 * @Entity
 */

class Telefone
{
    //Necessário indicar o tipo de campo para entidade e suas propriedades básicas
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;

    /**
     * @Column(type="string")
     */
    private $numeroTelefones;

    /**
     * @ManyToOne(targetEntity="Aluno")
     */
    private $idAluno;

    //Getters
    public function getID(): int
    {
        return $this->id;
    }

    public function getNumeroTelefone(): string
    {
        return $this->numeroTelefone;
    }

    public function getAluno(): Aluno
    {
        return $this->idAluno;
    }
    //***********************************************************

    //Setters
    public function setTelefone(Telefone $telefone)
    {
        $this->numeroTelefones->add($telefone);
    }

    public function setAluno(Aluno $alunoInformado) : self
    {
        $this->idAluno = $alunoInformado;
        return $this;
    }
    //***********************************************************

}