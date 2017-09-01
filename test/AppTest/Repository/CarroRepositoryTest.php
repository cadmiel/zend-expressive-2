<?php

namespace AppTest\TExAPITest\Repository;

use TExAPITest\Repository\CarroRepository;
use Doctrine\ORM\EntityManager;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Zend\Expressive\Router\RouterInterface;
use Interop\Container\ContainerInterface;


class CarroRepositoryTest extends TestCase
{
    /** @var RouterInterface */
    protected $router;
    protected $container;


    protected function setUp()
    {
        $this->router = $this->prophesize(RouterInterface::class);
        $this->container = $this->prophesize(ContainerInterface::class);
        $router = $this->prophesize(RouterInterface::class);

        $this->container->get(RouterInterface::class)->willReturn($router);
    }

    public function testReturnApagar()
    {
        //$entityManager = $this->prophesize(EntityManager::class);
        $entityManager = $this->container->get(EntityManager::class);
        //print_r($this->container->get(EntityManager::class));
        //$carroCollection = new CarroRepository($entityManager);

//        $this->assertInstanceOf(Collection::class , $carroCollection);

    }



}
