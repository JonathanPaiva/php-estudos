<?php

use Doctrine\ORM\EntityManagerInterface;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class Exclusao implements RequestHandlerInterface
{

    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $queryString = $request->getQueryParams();
        $idEntidade = filter_var(
            $queryString['id'], 
            FILTER_VALIDATE_INT
        );
        $entidade = $this->entityManager->getReference(Curso::class, $idEntidade);
        $this->entityManager->remove($entidade);
        $this->entityManager->flush();
    
        return new Response(302, ['Location' => '/novo-curso']);
    }
}