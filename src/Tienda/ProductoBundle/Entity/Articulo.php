<?php
/**
 * @author: Ibrael
 * Date: 16/01/13
 * Time: 11:51
 * To change this template use File | Settings | File Templates.
 *
 * @desc Describe las caracterisitcas de un articulo en la tienda
 *
 */
namespace Tienda\ProductoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity(repositoryClass="Tienda\ProductoBundle\Repository\ArticuloRepository")
 */
class Articulo
{

    /**
     * @var $id Identificador unico del articulo
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var $proveedor Empresa proveedora del articulo
     * @ORM\ManyToOne(targetEntity="Tienda\ProductoBundle\Entity\Proveedor", inversedBy="productos")
     */
    private $proveedor;

    /**
     * @var $referencia Referencia en el catalogo
     */
    private $referencia;

    /**
     * @var $description Descripcion corta del articulo
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * Precio al que se compra el articulo
     * @ORM\Column(type="decimal", scale=2)
     */
    private $precio_compra;

    /**
     * Precio al que se vende el articulo
     * @var
     * @ORM\Column(type="decimal", scale=2)
     */
    private $precio_venta;

    /**
     * @var
     * precio en epoca de rebajas
     * @ORM\Column(type="decimal", scale=2)
     */
    private $precio_rebaja;

    /**
     * @var
     * Familia general del articulo
     */
    private $gran_familia;

    /**
     * @var
     * clasificacion dentro de la familia general
     */
    private $familia;

    /**
     * @var
     * Clasificacion especifica
     */
    private $sub_familia;

    /**
     * @var
     * Foto del articulo si esta disponible
     * @ORM\Column(type="string", length=255)
     */
    private $imagen;

    /**
     * @var
     * Colores en los que esta disponible
     * @ORM\Column(type="string", length=255)
     */
    private $color;

    /**
     * @var
     * Tamanos disponibles
     * @ORM\Column(type="string", length=255)
     */
    private $talla;

    /**
     * @var
     * Temporada en la que estuvo de moda
     */
    private $temporada;



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
     * Set description
     *
     * @param string $description
     * @return Articulo
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set precio_compra
     *
     * @param float $precioCompra
     * @return Articulo
     */
    public function setPrecioCompra($precioCompra)
    {
        $this->precio_compra = $precioCompra;
    
        return $this;
    }

    /**
     * Get precio_compra
     *
     * @return float 
     */
    public function getPrecioCompra()
    {
        return $this->precio_compra;
    }

    /**
     * Set precio_venta
     *
     * @param float $precioVenta
     * @return Articulo
     */
    public function setPrecioVenta($precioVenta)
    {
        $this->precio_venta = $precioVenta;
    
        return $this;
    }

    /**
     * Get precio_venta
     *
     * @return float 
     */
    public function getPrecioVenta()
    {
        return $this->precio_venta;
    }

    /**
     * Set precio_rebaja
     *
     * @param float $precioRebaja
     * @return Articulo
     */
    public function setPrecioRebaja($precioRebaja)
    {
        $this->precio_rebaja = $precioRebaja;
    
        return $this;
    }

    /**
     * Get precio_rebaja
     *
     * @return float 
     */
    public function getPrecioRebaja()
    {
        return $this->precio_rebaja;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     * @return Articulo
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    
        return $this;
    }

    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set color
     *
     * @param string $color
     * @return Articulo
     */
    public function setColor($color)
    {
        if(is_array( $color))
            $color = implode($color, ', ');

        $this->color = $color;
    
        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return explode($this->color, ', ');
    }

    /**
     * Set talla
     *
     * @param string $talla
     * @return Articulo
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

    /**
     * Set proveedor
     *
     * @param \Tienda\ProductoBundle\Entity\Proveedor $proveedor
     * @return Articulo
     */
    public function setProveedor(\Tienda\ProductoBundle\Entity\Proveedor $proveedor = null)
    {
        $this->proveedor = $proveedor;
    
        return $this;
    }

    /**
     * Get proveedor
     *
     * @return \Tienda\ProductoBundle\Entity\Proveedor 
     */
    public function getProveedor()
    {
        return $this->proveedor;
    }
}