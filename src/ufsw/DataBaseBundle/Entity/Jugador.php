<?php

namespace ufsw\DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jugador
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ufsw\DataBaseBundle\Entity\JugadorRepository")
 */
class Jugador
{
    /**
     * @ORM\OneToOne(targetEntity="ufsw\DataBaseBundle\Entity\Usuario")
     * @ORM\JoinColumn(name="id", referencedColumnName="id") 
     * @ORM\Id
     */
    private $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="ufsw\DataBaseBundle\Entity\Equipo", inversedBy="jugadores")
     * @ORM\JoinColumn(name="equipo_id", referencedColumnName="id")
     */
    private $equipo;

    /**
     * @ORM\oneToMany(targetEntity="ufsw\DataBaseBundle\Entity\Estadistica", mappedBy="jugador")
     */
    private $estadisticas;

    public function __construct()
    {
        $this->estadisticas = new ArrayCollection();
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
     * Set equipo
     *
     * @param $equipo
     * @return Jugador
     */
    public function setEquipo(Equipo $equipo)
    {
        $this->equipo = $equipo;

        return $this;
    }

    /**
     * Get equipo
     *
     * @return ufsw\DataBaseBundle\Entity\Equipo 
     */
    public function getEquipo()
    {
        return $this->equipo;
    }

    /**
     * Set estadisticas
     *
     * @param string $estadisticas
     * @return Jugador
     */
    public function setEstadisticas($estadisticas)
    {
        $this->estadisticas = $estadisticas;

        return $this;
    }

    /**
     * Get estadisticas
     *
     * @return string 
     */
    public function getEstadisticas()
    {
        return $this->estadisticas;
    }
    
    /**
     * Add estadistica
     *
     */
    public function addEstadistica(Estadistica $estadistica)
    {
    
    	$this->estadisticas->add($estadistica);
    }
    
    
    /**
     * Remove estadistica
     *
     */
    public function removeEstadistica(Estadistica $estadistica)
    {
    	$this->estadisticas->removeElement($estadistica);
    }
}
