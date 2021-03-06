<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Restaurante
 *
 * @ORM\Table(name="restaurante")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RestauranteRepository")
 */
class Restaurante
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="localidad", type="string", length=255)
     */
    private $localidad;

    /**
     * @ORM\OneToMany(targetEntity="Platos", mappedBy="restaurante")
     */
     private $platos;

    public function __construct()
    {
        $this->platos = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Restaurante
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
     * Set localidad
     *
     * @param string $localidad
     *
     * @return Restaurante
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return string
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Add plato
     *
     * @param \AppBundle\Entity\Platos $plato
     *
     * @return Restaurante
     */
    public function addPlato(\AppBundle\Entity\Platos $plato)
    {
        $this->platos[] = $plato;

        return $this;
    }

    /**
     * Remove plato
     *
     * @param \AppBundle\Entity\Platos $plato
     */
    public function removePlato(\AppBundle\Entity\Platos $plato)
    {
        $this->platos->removeElement($plato);
    }

    /**
     * Get platos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlatos()
    {
        return $this->platos;
    }
    public function __toString()
    {
        return '';
    }
}
