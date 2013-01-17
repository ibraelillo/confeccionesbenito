<?php
/**
 * Created by JetBrains PhpStorm.
 * @author: Ibrael
 * Date: 17/01/13
 * Time: 00:27
 */
namespace Tienda\ProductoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 *
 * @ORM\Entity
 */
class Temporada
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
    private $etapa;

    /**
     * @var
     * @ORM\Column(type="integer", length=4)
     */
    private $anno;

    public function __toString()
    {
        return sprintf("%s/%s", $this->etapa, $this->anno);
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
     * Set etapa
     *
     * @param string $etapa
     * @return Temporada
     */
    public function setEtapa($etapa)
    {
        $this->etapa = $etapa;
    
        return $this;
    }

    /**
     * Get etapa
     *
     * @return string 
     */
    public function getEtapa()
    {
        return $this->etapa;
    }

    /**
     * Set anno
     *
     * @param integer $anno
     * @return Temporada
     */
    public function setAnno($anno)
    {
        $this->anno = $anno;
    
        return $this;
    }

    /**
     * Get anno
     *
     * @return integer 
     */
    public function getAnno()
    {
        return $this->anno;
    }
}