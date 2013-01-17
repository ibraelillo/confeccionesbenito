<?php
/**
 * Created by JetBrains PhpStorm.
 * @author: Ibrael
 * Date: 17/01/13
 * Time: 00:31
 */
namespace Tienda\ProductoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 *
 * @ORM\Entity
 */
class Direccion
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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cp;

    /**
     * @var
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $entreCalles;


    /**
     * @var
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $calle;

    /**
     * @var
     * @ORM\Column(type="string", length=255)
     */
    private $numero;

    /**
     * @var
     * @ORM\Column(type="string", length=255)
     */
    private $poblacion;

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


    public function __toString()
    {
        $dir = "";
        if( $this->calle )
            $dir .= "Calle ".$calle;

        if( $this->entreCalles )
            $dir .= " entre ".$this->entreCalles;

        $dir .=sprintf(" #%s, %s %s, %s, %s", $this->numero, $this->cp, $this->poblacion, $this->provincia, $this->pais );

        return $dir;
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
     * Set cp
     *
     * @param string $cp
     * @return Direccion
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
     * Set entreCalles
     *
     * @param string $entreCalles
     * @return Direccion
     */
    public function setEntreCalles($entreCalles)
    {
        $this->entreCalles = $entreCalles;
    
        return $this;
    }

    /**
     * Get entreCalles
     *
     * @return string 
     */
    public function getEntreCalles()
    {
        return $this->entreCalles;
    }

    /**
     * Set numero
     *
     * @param string $numero
     * @return Direccion
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    
        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set poblacion
     *
     * @param string $poblacion
     * @return Direccion
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
     * Set provincia
     *
     * @param string $provincia
     * @return Direccion
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
     * @return Direccion
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
     * Set calle
     *
     * @param string $calle
     * @return Direccion
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;
    
        return $this;
    }

    /**
     * Get calle
     *
     * @return string 
     */
    public function getCalle()
    {
        return $this->calle;
    }
}