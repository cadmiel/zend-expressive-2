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

class Deletar implements ServerMiddlewareInterface
{
    private $entityManager;
    private $repository;

    public function __construct(
        EntityManager $entityManager,
        CarroRepository $repository)
    {
        $this->entityManager = $entityManager;
        $this->repository    = $repository;
    }

    public function process(
        ServerRequestInterface $request,
        DelegateInterface $delegate)
    {
            $id = $request->getAttribute('id');
            if ($id >= 1)
            {

                if($this->repository->apagar($id))
                return new JsonResponse(
                    [
                        'status'        =>  'Sucesso!!!'
                    ]
                );

            }


        return new JsonResponse(
            [
                'erro'      =>  'Erro, por favor verifique os parametros'
            ],400
        );

    }
}
