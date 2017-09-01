<?php

namespace TExAPITest\Service;

use Doctrine\ORM\EntityManager;
use Interop\Container\ContainerInterface;

class EntityManagerFactory
{

    protected $container;

    public function __invoke(ContainerInterface $container)
    {
        //return $container->get(EntityManager::class);
    }



}