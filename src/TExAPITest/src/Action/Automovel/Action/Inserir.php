<?php

namespace TExAPITest\Action\Automovel\Action;

use TExAPITest\Entity\CarroEntity;
use TExAPITest\Repository\CarroRepository;
use Doctrine\ORM\EntityManager;
use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface as ServerMiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Expressive\Router;
use Zend\Expressive\Template;
use Zend\Diactoros\Response\JsonResponse;

class Inserir implements ServerMiddlewareInterface
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
        $data = $request->getParsedBody();

        if (count($data) == 3) {
            if (preg_match('#^[A-Z]{3}\-[0-9]{4}$#', $data['placa']) > 0)
            {
                $entity = new CarroEntity();
                $entity->setPlaca($data['placa']);
                $entity->setRodas($data['rodas']);
                $entity->setModelo($data['modelo']);
                return new JsonResponse(
                    $this->repository->getArray($this->repository->novo($entity))
                );
            }
        }

        return new JsonResponse(
            [
                'erro'      =>  'Erro, por favor verifique os parametros'
            ],400
        );

    }
}
