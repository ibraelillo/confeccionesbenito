<?php
/**
 * Created by JetBrains PhpStorm.
 * @author: Ibrael
 * Date: 16/01/13
 * Time: 12:21
 */
namespace Tienda\ProductoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 *
 * @ORM\Entity
 */
class Proveedor
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
     * @var
     * @ORM\Column(type="string", length=255)
     */
    private $nif;

    /**
     * @var
     * @ORM\Column(type="string", length=255)
     */
    private $poblacion;

    /**
     * @var
     * @ORM\Column(type="string", length=255)
     */
    private $estado;

    /**
     * @var
     * @ORM\Column(type="string", length=255)
     */
    private $provincia;

    /**
     * @var
     * @ORM\Column(type="string", length=255)
     */
    private $pais;

    /**
     * @var
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fax;

    /**
     * @var
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telefono;

    /**
     * @var
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cp;

    /**
     * @var
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $logo;

    /**
     * @var
     * @ORM\OneToMany(targetEntity="Tienda\ProductoBundle\Entity\Articulo", mappedBy="proveedor")
     */
    private $productos;



    /**
     * Constructor
     */
    public function __construct()
    {
        $this->productos = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Proveedor
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Proveedor
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return Proveedor
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    
        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Add productos
     *
     * @param \Tienda\ProductoBundle\Entity\Articulo $productos
     * @return Proveedor
     */
    public function addProducto(\Tienda\ProductoBundle\Entity\Articulo $productos)
    {
        $this->productos[] = $productos;
    
        return $this;
    }

    /**
     * Remove productos
     *
     * @param \Tienda\ProductoBundle\Entity\Articulo $productos
     */
    public function removeProducto(\Tienda\ProductoBundle\Entity\Articulo $productos)
    {
        $this->productos->removeElement($productos);
    }

    /**
     * Get productos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProductos()
    {
        return $this->productos;
    }

    /**
     * Set poblacion
     *
     * @param string $poblacion
     * @return Proveedor
     */
    public function setPoblacion($poblacion)
    {
        $this->poblacion = $poblacion;
    
        return $this;
    }

    /**
     * Get poblacion
     *
     * @return string 
     */
    public function getPoblacion()
    {
        return $this->poblacion;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Proveedor
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     * @return Proveedor
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;
    
        return $this;
    }

    /**
     * Get provincia
     *
     * @return string 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set pais
     *
     * @param string $pais
     * @return Proveedor
     */
    public function setPais($pais)
    {
        $this->pais = $pais;
    
        return $this;
    }

    /**
     * Get pais
     *
     * @return string 
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Proveedor
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Proveedor
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    
        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Proveedor
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set cp
     *
     * @param string $cp
     * @return Proveedor
     */
    public function setCp($cp)
    {
        $this->cp = $cp;
    
        return $this;
    }

    /**
     * Get cp
     *
     * @return string 
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set nif
     *
     * @param string $nif
     * @return Proveedor
     */
    public function setNif($nif)
    {
        $this->nif = $nif;
    
        return $this;
    }

    /**
     * Get nif
     *
     * @return string 
     */
    public function getNif()
    {
        return $this->nif;
    }
}