<?php

namespace TExAPITest\Action\Automovel\Factory;

use TExAPITest\Repository\CarroRepository;
use Doctrine\ORM\EntityManager;
use Interop\Container\ContainerInterface;
use TExAPITest\Action\Automovel\Action\Editar as Action;

class Editar
{
    public function __invoke(ContainerInterface $container)
    {
        $em = $container->get(EntityManager::class);
        $repository = new CarroRepository($em);
        return new Action($em, $repository);
    }
}
