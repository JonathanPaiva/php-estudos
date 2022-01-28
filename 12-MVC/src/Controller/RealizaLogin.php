<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Usuario;
use Alura\Cursos\Infra\EntityManagerCreator;

class RealizaLogin implements InterfaceControladorRequisicao
{
    /*
    Para inclusão de senhas, pode ser utilizado o método de criptografia password_hash do php, passando por parâmetro a senha e o algoritmo
    php > echo password_hash('123456', PASSWORD_ARGON2I);
    
    documentação abaixo:
        https://www.php.net/manual/pt_BR/function.password-hash.php

    */

    private $repositorioUsuarios;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioUsuarios = $entityManager->getRepository(Usuario::class);
    }

    public function processaRequisicao() : void
    {

        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        if (is_null($email) || $email ===false) {
            echo 'Email Inválido';
            return;
        }

        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

        /**
         * @var $usuario */
        $usuario = $this->repositorioUsuarios
            ->findOneBy(['email' => $email]);

        if (is_null($usuario) || !$usuario->senhaEstaCorreta($senha)){
            echo "Usuário ou Senha Inválidos!";
            return;
        }

        header('Location: /listar-cursos');
        
    }

    /*
    Pode ser checado se a passada está válida com um função do php
    password_verify('SenhaInformada', 'Hash do Banco de dados do usuário')

    documentação: 
        https://www.php.net/manual/en/ref.password.php

    como seria uma regra, pode ser implementado na entity de usuários o método para checar se é uma senha válida ou não, assim podendo ser feito os tratamentos para acessar a aplicação. 

    */

}