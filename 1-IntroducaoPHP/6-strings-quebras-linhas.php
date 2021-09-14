<?php

$idade = 28;

/*
Existe várias maneiras de utilizar os caracteres de escape
podem ser utilizados de acordo com este link abaixo: 
https://www.php.net/manual/pt_BR/language.types.string.php

mais comuns:
\n = quebra linha
\t = tab em linha
\v = tab vertical

No PHP existe um função nativa que já faz este procedimento 
PHP_EOL = php end off line
*/

echo "Olá Mundo!\n";
// ou
echo "Olá Mundo!" . PHP_EOL;

echo "A minha idade é: $idade anos.";
//----------------------------------------------------