<?php

namespace TExAPITest\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Carros")
 */

class CarroEntity extends AutomovelEntityAbstract
{

    /**
     * @orm\Column(type="string", length=20)
     */
    private $modelo;

    /**
     * @return mixed
     */
    public function getModelo() //: string
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo) //: self
    {
        $this->modelo = $modelo;
    }

}