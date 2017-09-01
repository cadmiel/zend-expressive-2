<?php

namespace TExAPITest\Action\Automovel\Factory;

use TExAPITest\Repository\CarroRepository;
use Doctrine\ORM\EntityManager;
use Interop\Container\ContainerInterface;
use TExAPITest\Action\Automovel\Action\Deletar as Action;

class Deletar
{
    public function __invoke(ContainerInterface $container)
    {
        $em = $container->get(EntityManager::class);
        $repository = new CarroRepository($em);
        return new Action($em, $repository);
    }
}
