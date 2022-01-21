<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;
use Doctrine\DBAL\Schema\ForeignKeyConstraint;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory() ;
$entityManager = $entityManagerFactory->getEntityManager();

$alunoRespository = $entityManager->getRepository(Aluno::class);

//Necessário indicar com o $alunoList é um array de alunos com a Annotations, assim podendo utilizar os métodos configurados na classe.
/**
 * @var Aluno[] $alunoList
 */
$alunoList = $alunoRespository->findAll();
//Método 'findAll trás do banco de dados conectado todos os registros dessa entidade pesquisada

echo "\n Utilizando a captura da lista com todos os registros, baseado no FindAll:\n";
foreach ($alunoList as $aluno){
    echo "ID: {$aluno->getId()} -> Nome: {$aluno->getNome()} \n";
}
echo "\n----------------------------------\n\n";

exit();
echo "Filtrando um Registro baseado no Find:\n";
/* Método 'find' pesquisa um objeto específico baseado no ID */
$filtro1 = $alunoRespository->find(3);
echo $filtro1->getNome();
echo "\n----------------------------------\n\n";


echo "Filtrando um Array de Registros baseado nos parâmetros informados com o FindBy:\n";
/* Método 'findBy' pode ser feito vários filtros nas buscas, baseados nos campos da entidade
O Retorno dessa expressão seria um array baseado nos filtros repassados. */
$filtro2 = $alunoRespository->findBy([
    "nome" => "Luiz"
]);

var_dump($filtro2);
echo "\n----------------------------------\n\n";


echo "Filtrando um Objeto dos Registors baseado nos parâmetros informados com o FindOneBy:\n";
/*método 'findOneBy' pode ser feito vários filtros nas buscas, baseados nos campos da entidade, trazendo apenas 
Retornando apenas um objeto com a informação filtrada.*/
$filtro3= $alunoRespository->findOneBy([
    "nome" => "Zezin"
]);

var_dump($filtro3);
echo "\n----------------------------------\n\n";

