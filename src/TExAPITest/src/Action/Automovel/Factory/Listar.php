<?php

namespace TExAPITest\Action\Automovel\Factory;

use TExAPITest\Repository\CarroRepository;
use TExAPITest\Service\EntityManagerFactory;
use Doctrine\ORM\EntityManager;
use Interop\Container\ContainerInterface;
use Zend\Expressive\Router\RouterInterface;
use TExAPITest\Action\Automovel\Action\Listar as Action;

class Listar
{
    public function __invoke(ContainerInterface $container)
    {
        $em         = $container->get(EntityManager::class);
        $repository = new CarroRepository($em);
        return new Action($em, $repository);
    }
}
