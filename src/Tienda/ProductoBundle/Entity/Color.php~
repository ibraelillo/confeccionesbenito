<?php
/**
 * Created by JetBrains PhpStorm.
 * @author: Ibrael
 * Date: 17/01/13
 * Time: 00:10
 */
namespace Tienda\ProductoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 *
 * @ORM\Entity
 */
class Color
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
     * @ORM\Column(type="string", length=255)
     */
    private $nombre;

    public function __toString(){
        return $this->getNombre();
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
     * Set nombre
     *
     * @param string $nombre
     * @return Color
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }
}