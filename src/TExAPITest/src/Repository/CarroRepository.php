<?php

namespace TExAPITest\Repository;

use TExAPITest\Collection\CarroCollection;
use TExAPITest\Entity\CarroEntity;
use Doctrine\ORM\EntityManager;

class CarroRepository
{

    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function buscaPorId($id) //: CarroEntity
    {
        return $this->entityManager->find(CarroEntity::class,$id);
    }

    public function buscarTodos($limite=null, $posicao=null) //: CarroCollection
    {
        return $this->buscar([], $limite, $posicao);
    }

    public function buscarPor(array $params, $limite=null, $posicao=null) //: CarroColletion
    {
        return $this->buscar($params, $limite, $posicao);
    }

    private function buscar(array $params, $limite, $posicao)
    {
        $repository = $this->entityManager->getRepository(CarroEntity::class);
        $carroCollection = new CarroCollection();
        $result =   $repository->findBy($params, [], $limite, $posicao);
        foreach($result as $data)
            $carroCollection->add($data);

        return $carroCollection;
    }

    public function novo(CarroEntity $entidade) //: CarroEntity
    {
        $this->entityManager->persist($entidade);
        $this->entityManager->flush();
        $entidade->getId();
        return $entidade;
    }

    public function getArray(CarroEntity $entity)
    {
        return (new CarroCollection())->getArray($entity);
    }

    public function alterar(CarroEntity $entidade) //: CarroEntity
    {
        $this->entityManager->persist($entidade);
        $this->entityManager->flush();
        return $entidade;
    }

    public function apagar($id) //: bool
    {
        $entidade = $this->entityManager->find(CarroEntity::class,$id);

        if($entidade)
        {
            $this->entityManager->remove($entidade);
            $this->entityManager->flush();
            return true;
        }

        return false;
    }

}