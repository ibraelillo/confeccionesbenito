<?php
/**
 * Created by JetBrains PhpStorm.
 * @author: Ibrael
 * Date: 17/01/13
 * Time: 00:17
 */
namespace Tienda\ProductoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 *
 * @ORM\Entity
 */
class Talla
{
    /**
     * @var $id Identificador unico del articulo
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var
     * @ORM\Column(type="string", length=20)
     */
    private $talla;


    public function __toString()
    {
        return $this->getTalla();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set talla
     *
     * @param string $talla
     * @return Talla
     */
    public function setTalla($talla)
    {
        $this->talla = $talla;
    
        return $this;
    }

    /**
     * Get talla
     *
     * @return string 
     */
    public function getTalla()
    {
        return $this->talla;
    }
}