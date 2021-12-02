<?php

/* link do composer
https://getcomposer.org/

*** comandos iniciais *** 
    composer --version
    composer init
    composer update
    composer dumpautoload => Atualizar o arquivo de autoloade do composer;

    composer require --dev phpunit/phpunit => utilizado apenas para ambiente de desenvolvimento, assim ao ser encaminhado para produção não seria encaminhado a dependência.

    composer install --no-dev => com o comando ao lado, vai ser feito a instalação das dependências normalmente, porém as questão estão classificadas como dev no composer.json não entrariam na instalação.

Repositório Principal onde o Composer busca os seus pacotes
http://packagist.org

** também é possível fazer com que ele busque pacotes em outros lugares, como do seu próprio GitHub, do repositório privado da sua empresa **

Vamos usar de exemplo um 'http client' e 'dom crawler'
https://packagist.org/packages/guzzlehttp/guzzle 
https://packagist.org/packages/symfony/dom-crawler

*/
