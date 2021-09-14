<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];

                //Essa função pode checar se existe/quantos dados possui um array
$qtdIdadeList = count($idadeList);

for ($i = 0 ; $i < $qtdIdadeList ; $i++) {
    echo $idadeList[$i] . PHP_EOL;
}