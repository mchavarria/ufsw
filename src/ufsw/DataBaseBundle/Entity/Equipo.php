<?php

namespace ufsw\DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ufsw\DataBaseBundle\Entity\EquipoRepository")
 */
class Equipo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;

    /**
     * @ORM\ManyToOne(targetEntity="ufsw\DataBaseBundle\Entity\Pais")
     * @ORM\JoinColumn(name="pais_id", referencedColumnName="id")
     */
    private $pais;

    /**
     * @ORM\ManyToOne(targetEntity="ufsw\DataBaseBundle\Entity\Provincia")
     * @ORM\JoinColumn(name="provincia_id", referencedColumnName="id")
     */
    private $provincia;

    /**
     * @ORM\ManyToOne(targetEntity="ufsw\DataBaseBundle\Entity\Ciudad")
     * @ORM\JoinColumn(name="ciudad_id", referencedColumnName="id")
     */
    private $ciudad;

    /**
     * @ORM\oneToMany(targetEntity="ufsw\DataBaseBundle\Entity\Jugador", mappedBy="equipo")
     */
    private $jugadores;

    public function __construct()
    {
        $this->jugadores = new ArrayCollection();
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
     * @return Equipo
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
     * Set pais
     *
     * @param $pais
     * @return Equipo
     */
    public function setPais(Pais $pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return ufsw\DataBaseBundle\Entity\Pais 
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set provincia
     *
     * @param $provincia
     * @return Equipo
     */
    public function setProvincia(Provincia $provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return ufsw\DataBaseBundle\Entity\Provincia 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set ciudad
     *
     * @param $ciudad
     * @return Equipo
     */
    public function setCiudad(Ciudad $ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return ufsw\DataBaseBundle\Entity\Ciudad 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set jugadores
     *
     * @param string $jugadores
     * @return Equipo
     */
    public function setJugadores($jugadores)
    {
        $this->jugadores = $jugadores;

        return $this;
    }

    /**
     * Get jugadores
     *
     * @return string 
     */
    public function getJugadores()
    {
        return $this->jugadores;
    }
    
    /**
     * Add jugadores
     *
     */
    public function addJugador(Jugador $jugador)
    {
    
    	$this->jugadores->add($jugador);
    }
    
    
    /**
     * Remove jugadores
     *
     */
    public function removeJugador(Jugador $jugador)
    {
    	$this->jugadores->removeElement($jugador);
    }
}
