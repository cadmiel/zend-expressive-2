<?php

namespace TExAPITest\Action\Automovel\Action;

use TExAPITest\Repository\CarroRepository;
use Doctrine\ORM\EntityManager;
use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface as ServerMiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Expressive\Router;
use Zend\Expressive\Template;
use Zend\Diactoros\Response\JsonResponse;

class Buscar implements ServerMiddlewareInterface
{
    private $entityManager;
    private $repository;

    public function __construct(
        EntityManager $entityManager,
        CarroRepository $repository)
    {
        $this->entityManager    = $entityManager;
        $this->repository       = $repository;
    }

    public function process(
        ServerRequestInterface $request,
        DelegateInterface $delegate)
    {
        $entity = $this->repository->buscaPorId($request->getAttribute('id'));

        if($entity)
            return new JsonResponse(
                $this->repository->getArray($entity)
            );

        return new JsonResponse(
            [
                'erro'      =>  'Erro, por favor verifique os parametros'
            ],400
        );

    }
}
