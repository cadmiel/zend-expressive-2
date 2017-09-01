<?php

namespace TExAPITest\Action\Automovel\Action;

use TExAPITest\Action\PingAction;
use TExAPITest\Repository\CarroRepository;
use AppTest\Action\PingActionTest;
use Doctrine\ORM\EntityManager;
use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface as ServerMiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Expressive\Router;
use Zend\Expressive\Template;
use Zend\Diactoros\Response\JsonResponse;

class Listar implements ServerMiddlewareInterface
{
    private $entityManager;
    private $repository;

    public function __construct(
        EntityManager $entityManager,
        CarroRepository $repository)
    {
        $this->repository       = $repository;
        $this->entityManager    = $entityManager;
    }

    public function process(
        ServerRequestInterface $request,
        DelegateInterface $delegate)
    {

        return new JsonResponse($this->repository->buscarTodos()->getCollection());

    }
}
