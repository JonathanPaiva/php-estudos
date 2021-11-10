<?php

namespace Alura;

spl_autoload_register(
    function (string $nameSpaceClasse): void{
        $caminho ="\src";
        $diretorioClasse = str_replace("\\", DIRECTORY_SEPARATOR, $nameSpaceClasse);

        //var_dump(getcwd() . $caminho . DIRECTORY_SEPARATOR . "{$diretorioClasse}.php");

        //a função 'getcwd' trás o caminho onde o arquivo está ex: C:\projetos\etc...
        //@ antes do include vai suprimir todos os erros.
        @include_once getcwd() . $caminho . DIRECTORY_SEPARATOR . "{$diretorioClasse}.php";
    }
);