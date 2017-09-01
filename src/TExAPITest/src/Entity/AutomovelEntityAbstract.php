<?php

namespace TExAPITest\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\MappedSuperclass
 */

abstract class AutomovelEntityAbstract
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @orm\Column(type="string", length=8)
     */
    private $placa;

    /**
     * @orm\Column(type="integer")
     */
    private $rodas;



    /**
     * @return mixed
     */
    public function getId() //:int
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id) //:self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlaca() //:string
    {
        return $this->placa;
    }

    /**
     * @param mixed $placa
     */
    public function setPlaca($placa) //:self
    {
        $this->placa = $placa;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRodas() //:int
    {
        return $this->rodas;
    }

    /**
     * @param mixed $rodas
     */
    public function setRodas($rodas) //:self
    {
        $this->rodas = $rodas;
        return $this;
    }


}