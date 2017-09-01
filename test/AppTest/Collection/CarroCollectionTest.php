<?php

namespace AppTest\TExAPITest\Colletion;

use TExAPITest\Collection\CarroCollection;
use TExAPITest\Collection\CarroSeed;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Zend\Expressive\Router\RouterInterface;
use TExAPITest\Contract\Collection;

class CarroCollectionTest extends TestCase
{
    /** @var RouterInterface */
    protected $router;

    protected function setUp()
    {
        $this->router = $this->prophesize(RouterInterface::class);
    }


    public function testReturnCarroCollectionIfImplementCollection()
    {
        $carroCollection = new CarroCollection();
        $this->assertInstanceOf(Collection::class , $carroCollection);

    }

    public function testReturnCountGetCollection()
    {
        $carroCollection = new CarroCollection();

        $data = CarroSeed::getSeeder(5);

        $carroCollection->add($data[0]);
        $carroCollection->add($data[1]);

        $this->assertCount(2, $carroCollection->getCollection());

    }

    public function testReturnKeyGetCollection()
    {
        $carroCollection = new CarroCollection();

        $data = CarroSeed::getSeeder(5);

        $carroCollection->add($data[0]);
        $carroCollection->add($data[1]);

        $this->assertArrayHasKey(1, $carroCollection->getCollection());

    }

    public function testReturnTypeGetCollection()
    {
        $carroCollection = new CarroCollection();

        $data = CarroSeed::getSeeder(5);

        $carroCollection->add($data[0]);
        $carroCollection->add($data[1]);

        $this->assertInternalType('array', $carroCollection->getCollection());

    }

    public function testReturnCount()
    {
        $carroCollection = new CarroCollection();

        $data = CarroSeed::getSeeder(5);

        $carroCollection->add($data[0]);
        $carroCollection->add($data[1]);

        $this->assertCount(2, $carroCollection->getCollection());

    }


}
