<?php

$hoje = date('d/m/Y');
echo $hoje;
//E este código exibiria: 20/03/2019.


$agora = date('d/m/Y H:i');
echo $agora;
//E a saída seria: 20/03/2019 16:58


/*
Intervalo entre duas... strings?
Já conseguimos pegar as datas (como string, diga-se de passagem), então agora vamos pesquisar sobre como calcular o intervalo entre elas para exibir as horas trabalhadas.

Dando uma pesquisada, caí na documentação da função date_diff, mas vi que como parâmetros ela não recebe strings. Esta função recebe objetos de classes que implementem a interface DateTimeInterface. Bom, vamos com calma.

Até agora temos trabalhado somente com a função date que retorna uma string, mas nós podemos de forma tão fácil quanto, utilizar Orientação a Objetos nesta tarefa. Existe uma classe que podemos instanciar e obter a data e hora atuais e que implementa a DateTimeInterface que precisamos. "O nome dela é DateTime, e eu encontrei ela na documentação".
https://www.php.net/manual/pt_BR/class.datetime.php
*/

$agora = new DateTime(); // Pega o momento atual
echo $agora->format('d/m/Y H:i'); // Exibe no formato desejado

//Caso a gente não passe nenhum parâmetro para o construtor de DateTime, o momento atual será recuperado. Podemos ainda passar uma string informando o momento que queremos, por exemplo:
$agora = new DateTime('now');
$ontem = new DateTime('yesterday');
$dia15 = new DateTime('2019-03-15');

//Se já tivermos uma string em outro formato, e quisermos criar um objeto do tipo DateTime, podemos utilizar o método createFromFormat, da seguinte forma:
$formato = 'd/m/Y';
$stringDataDia15 = '15/03/2019';
$dia15 = DateTime::createFromFormat($formato, $stringDataDia15);


/*Agora sim, intervalo entre duas datas
Agora que já conhecemos uma forma de trabalhar com datas utilizando Orientação a Objetos, vamos ver como pegar o intervalo entre 2 objetos do tipo DateTime.

A interface DateTimeInterface expõe um método chamado diff, que recebe um outro objeto deste mesmo tipo como parâmetro, ou seja, podemos chamar a partir de nosso objeto de datas, o método diff passando uma outra data como parâmetro. Vamos ver como ficaria isso: */
$entrada = new DateTime('09:00');
$saida = new DateTime('18:00');
$intervalo = $saida->diff($entrada);
print_r($intervalo);

/*E com isso temos a seguinte saída:
DateInterval Object
(
[y] => 0
[m] => 0
[d] => 0
[h] => 9
[i] => 0
[s] => 0
[f] => 0
[weekday] => 0
[weekday_behavior] => 0
[first_last_day_of] => 0
[invert] => 1
[days] => 0
[special_type] => 0
[special_amount] => 0
[have_weekday_relative] => 0
[have_special_relative] => 0
)*/


/*
Para saber mais: DateTimeImmutable
Conseguimos chegar na implementação desejada. Conseguimos pegar as datas que queremos (utilizando [Orientação a Objetos}(https://www.alura.com.br/artigos/poo-programacao-orientada-a-objetos), inclusive), calcular a diferença entre elas e até trabalhar com diferentes fusos horários.

Mas no artigo foi citada a interface DateTimeInterface. Que outra classe será que implementa essa interface?

A classe DateTimeImmutable! Ela pode ser utilizada da mesma forma que a classe DateTime, mas as operações que ela expõe retornam uma nova data, e não alteram a original. Pareceu confuso? Vamos ver na prática essa diferença e de quebra aprender a realizar mais operações com as datas:
*/
$umDia = new DateInterval('P1D'); // Intervalo de 1 dia
// Com DateTime:
$hoje = new DateTime();
echo $hoje->format('d/m'); // Saída 20/03
$hoje->add($umDia); // Altera o valor de $hoje
echo $hoje->format('d/m'); // Saída 21/03

// Com DateTimeImmutable
$hoje = new DateTimeImmutable();
echo $hoje->format('d/m'); // Saída 20/03
$amanha = $hoje->add($umDia); // Não altera o valor de $hoje
echo $hoje->format('d/m'); // Saída 20/03
echo $amanha->format('d/m'); // Saída 21/03