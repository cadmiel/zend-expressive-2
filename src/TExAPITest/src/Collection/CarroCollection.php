<?php

namespace TExAPITest\Collection;

use TExAPITest\Contract\Collection;
use TExAPITest\Entity\CarroEntity;

class CarroCollection implements Collection
{

    private $collection =   [];

    public function getCollection()
    {
        $rtn = [];
        foreach($this->collection as $collection)
            $rtn[$collection->getId()]  = $this->getArray($collection);
            return $rtn;
    }

    public function getArray($entity)
    {
        return [
                'id'      =>  $entity->getId(),
                'modelo'  =>  $entity->getModelo(),
                'placa'   =>  $entity->getPlaca(),
                'rodas'   =>  $entity->getRodas(),
                '_links'  => [
                    'carro' =>  '/api/carros/'.$entity->getId()
            ]
        ];
    }

    public function add(CarroEntity $entidade) //: self
    {
        $this->collection[$entidade->getId()] = $entidade;
        return $this;
    }

    public function remove(CarroEntity $entidade) //: self
    {
        unset($this->colecao[$entidade->getId()]);

        return $this;
    }

    public function current() //: CarroEntity
    {
        return current($this->collection);
    }

    public function key() //: int
    {
        return key($this->collection);
    }

    public function next() //: void
    {
        next($this->collection);
    }

    public function rewind() //: void
    {
        reset($this->collection);
    }

    public function valid() //: bool
    {
        return isset($this->collection[$this->key()]) ? true : false;
    }

    public function count() //: int
    {
        return count($this->collection);
    }

}