<?php

namespace TExAPITest\Collection;

use TExAPITest\Entity\CarroEntity;

class CarroSeed
{

    static $carro = [
                        'Fiat Bravo',
                        'Ford Ka',
                        'Honda Civic',
                        'Honda Fit',
                        'Peugeot 207',
                        'Fiat Uno',
                        'Honda City',
                        'Kia Cerato',
                        'Chery QQ',
                        'Citroen C3',
                        'Mini Cooper',
                        'Peugeot 307',
                        'Bmw X1',
                        'Ford Fiesta',
                        'Ford Focus',
                        'Hyundai i30',
                        'Jeep'
                    ];

    public static function getSeeder($limit=2)
    {

        $colecao = [];
        foreach(range(1,$limit) as $key=>$data)
        {
            $carroEntity = new CarroEntity();
            $carroEntity->setId($key);
            $carroEntity->setRodas(4);
            $carroEntity->setModelo(self::$carro[$key]);
            $colecao[$carroEntity->getId()]=$carroEntity;
        }
        return $colecao;
    }

}