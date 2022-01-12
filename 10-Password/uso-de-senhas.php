<?php 

$senha = 'Senha_aqui';

$hash = password_hash($senha,PASSWORD_DEFAULT);

var_dump($hash);

/*
Como guardar as senhas dos seus usuários de maneira correta? O que é um Hash? O que é um Salt? E MD5 ou SHA1 são seguros? E Bcrypt ou Argon2?

Configuração de criptografia de senhas com o uso do Hash - podendo ter até 72 caracteres
*/

if (password_verify($senha,$hash)) {
    //login
} else {
    //logout
}