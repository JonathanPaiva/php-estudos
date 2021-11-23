<?php

//Configuraçõe precisa ta dentro do php.ini na pasta do php - apenas para configuração.
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 0);
ini_set('error_log', 'var/log/minha-aplicacao');

echo $variavel;
echo $array[12];

//echo CONSTANTE;

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    switch ($errno) {
        case E_WARNING:
            echo "Aviso: Isso é perigoso";
            break;
        case E_NOTICE:
            echo "Melhor não fazer isso";
            break;
    }
});