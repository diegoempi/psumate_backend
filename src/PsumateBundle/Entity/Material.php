<?php

namespace PsumateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Material
 *
 * @ORM\Table(name="material")
 * @ORM\Entity
 */
class Material
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="material_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_unidades", type="integer", nullable=false)
     */
    private $idUnidades;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_capitulos", type="integer", nullable=false)
     */
    private $idCapitulos;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=300, nullable=false)
     */
    private $url;

    /**
     * @var integer
     *
     * @ORM\Column(name="usr_suscripcion", type="integer", nullable=false)
     */
    private $usrSuscripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_de_creacion", type="datetime", nullable=false)
     */
    private $fechaDeCreacion;



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
     * Set idUnidades
     *
     * @param integer $idUnidades
     *
     * @return Material
     */
    public function setIdUnidades($idUnidades)
    {
        $this->idUnidades = $idUnidades;

        return $this;
    }

    /**
     * Get idUnidades
     *
     * @return integer
     */
    public function getIdUnidades()
    {
        return $this->idUnidades;
    }

    /**
     * Set idCapitulos
     *
     * @param integer $idCapitulos
     *
     * @return Material
     */
    public function setIdCapitulos($idCapitulos)
    {
        $this->idCapitulos = $idCapitulos;

        return $this;
    }

    /**
     * Get idCapitulos
     *
     * @return integer
     */
    public function getIdCapitulos()
    {
        return $this->idCapitulos;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Material
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
     *
     * @return Material
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
     * Set url
     *
     * @param string $url
     *
     * @return Material
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set usrSuscripcion
     *
     * @param integer $usrSuscripcion
     *
     * @return Material
     */
    public function setUsrSuscripcion($usrSuscripcion)
    {
        $this->usrSuscripcion = $usrSuscripcion;

        return $this;
    }

    /**
     * Get usrSuscripcion
     *
     * @return integer
     */
    public function getUsrSuscripcion()
    {
        return $this->usrSuscripcion;
    }

    /**
     * Set fechaDeCreacion
     *
     * @param \DateTime $fechaDeCreacion
     *
     * @return Material
     */
    public function setFechaDeCreacion($fechaDeCreacion)
    {
        $this->fechaDeCreacion = $fechaDeCreacion;

        return $this;
    }

    /**
     * Get fechaDeCreacion
     *
     * @return \DateTime
     */
    public function getFechaDeCreacion()
    {
        return $this->fechaDeCreacion;
    }
}
