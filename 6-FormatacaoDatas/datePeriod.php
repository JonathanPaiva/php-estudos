<?php 

//verificando período entre datas - intervalos

$inicio = new DateTime('21-11-2021');

$intervalo = new DateInterval('P2Y');

$fim = new DateTime('2026-12-31');

//Necessário informar a data de inicio - intervalo(quantidade de anos por exemplo), repetição ou data de fim
//Repetição com intervalos de anos
$periodo = new DatePeriod($inicio, $intervalo, 5);

echo "Repetição com Intervalos de 2 Anos" . PHP_EOL;
foreach ($periodo as $data){
    echo $data->format('d/m/Y') . PHP_EOL;
}


//Repetição com data final
$periodo = new DatePeriod($inicio, $intervalo, $fim);

echo "Repetição com Data Final" . PHP_EOL;
foreach ($periodo as $data){
    echo $data->format('d/m/Y') . PHP_EOL;
}

/*Documentação no link 
https://www.php.net/manual/pt_BR/class.dateperiod.php
*/