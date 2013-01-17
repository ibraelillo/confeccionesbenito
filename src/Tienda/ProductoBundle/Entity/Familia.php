<?php
/**
 * Created by JetBrains PhpStorm.
 * @author: Ibrael
 * Date: 16/01/13
 * Time: 13:07
 */

namespace Tienda\ProductoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 *
 * @ORM\Entity
 */
class Familia
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


    /**
     * @var $proveedor Empresa proveedora del articulo
     * @ORM\ManyToOne(targetEntity="Tienda\ProductoBundle\Entity\Familia", inversedBy="subfamilias")
     */
    private $padre;

    /**
     * @var
     * @ORM\OneToMany(targetEntity="Tienda\ProductoBundle\Entity\Familia", mappedBy="proveedor")
     */
    private $subfamilias;


    public function __toString(){
        return $this->getNombre();
    }

    public function getIsSubFamilia()
    {
        return $this->getPadre()== null;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->subfamilias = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Familia
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

    /**
     * Set padre
     *
     * @param \Tienda\ProductoBundle\Entity\Familia $padre
     * @return Familia
     */
    public function setPadre(\Tienda\ProductoBundle\Entity\Familia $padre = null)
    {
        $this->padre = $padre;
    
        return $this;
    }

    /**
     * Get padre
     *
     * @return \Tienda\ProductoBundle\Entity\Familia 
     */
    public function getPadre()
    {
        return $this->padre;
    }

    /**
     * Add subfamilias
     *
     * @param \Tienda\ProductoBundle\Entity\Familia $subfamilias
     * @return Familia
     */
    public function addSubfamilia(\Tienda\ProductoBundle\Entity\Familia $subfamilias)
    {
        $this->subfamilias[] = $subfamilias;
    
        return $this;
    }

    /**
     * Remove subfamilias
     *
     * @param \Tienda\ProductoBundle\Entity\Familia $subfamilias
     */
    public function removeSubfamilia(\Tienda\ProductoBundle\Entity\Familia $subfamilias)
    {
        $this->subfamilias->removeElement($subfamilias);
    }

    /**
     * Get subfamilias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubfamilias()
    {
        return $this->subfamilias;
    }
}