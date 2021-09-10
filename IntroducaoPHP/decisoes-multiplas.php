<?php

$idade = 16;
$numeroPessoas = 2;

echo "Olá mundo!" . PHP_EOL;
echo "Eu tenho \"$idade\" anos";

echo PHP_EOL . PHP_EOL;

echo "Você só pode entrar, se tiver a partir de 18 anos ou ";
echo "a partir de 16 acompanhado(a)!" . PHP_EOL;

//decisão com if e else separadamente
if ($idade >= 18 ) 
{    
    echo "Você tem $idade anos. Pode entrar sozinho";
}
else
{
    if ($idade >= 16 && $numeroPessoas > 1 )
    {
        echo "Você tem $idade anos e está acompanhado(a), então pode entrar.";
    } 
    else 
    {
        echo "Você só tem $idade anos. Você não pode entrar";
    }
}

//decisão com else if 
if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho.";

} elseif ($idade >= 16 && $numeroPessoas > 1) {
    echo "Você tem $idade anos e está acompanhado(a), então pode entrar.";

} else {
    echo "Você só tem $idade anos. Você não pode entrar";

}

echo PHP_EOL;
echo "Até Logo!";
