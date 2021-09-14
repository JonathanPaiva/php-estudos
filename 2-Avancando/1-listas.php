<?php

//Utilizando arrays

//pode ser utilizado dessa maneira, menos utilizada atualmente.
$idadeList =  array(21, 23, 19, 25, 30, 41, 18);

//o que é mais comum e correto de utilizar.
$idadeList = [21, 23, 19, 25, 30, 41, 18];

//será exibido o terceiro item do array, iniciando sempre no sequencial zero.
$umaIdade = $idadeList[2];

echo $umaIdade;