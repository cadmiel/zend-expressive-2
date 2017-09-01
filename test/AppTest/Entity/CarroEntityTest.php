<?php

namespace AppTest\TExAPITest\Colletion;

use TExAPITest\Entity\AutomovelEntityAbstract;
use TExAPITest\Entity\CarroEntity;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Zend\Expressive\Router\RouterInterface;

class CarroEntityTest extends TestCase
{
    /** @var RouterInterface */
    protected $router;

    protected function setUp()
    {
        $this->router = $this->prophesize(RouterInterface::class);
    }

    public function testReturnCarroEntityIfImplementAutomovelEntityAbstract()
    {
        $carroEntity = new CarroEntity();
        $this->assertInstanceOf(AutomovelEntityAbstract::class , $carroEntity);
    }

}
