<?php

namespace ufsw\DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estadistica
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ufsw\DataBaseBundle\Entity\EstadisticaRepository")
 */
class Estadistica
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="ufsw\DataBaseBundle\Entity\Jugador", inversedBy="estadisticas")
     * @ORM\JoinColumn(name="jugador_id", referencedColumnName="id")
     */
    private $jugador;

    /**
     * @var integer
     *
     * @ORM\Column(name="goles", type="integer")
     */
    private $goles;

    /**
     * @var integer
     *
     * @ORM\Column(name="defensa", type="integer")
     */
    private $defensas;

    /**
     * @var integer
     *
     * @ORM\Column(name="asistencias", type="integer")
     */
    private $asistencias;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="ufsw\DataBaseBundle\Entity\Partido", inversedBy="estadisticas")
     * @ORM\JoinColumn(name="jugador_id", referencedColumnName="id")
     */
    private $partido;

    /**
     * Set jugador
     *
     * @param $jugador
     * @return Estadistica
     */
    public function setJugador(Jugador $jugador)
    {
        $this->jugador = $jugador;

        return $this;
    }

    /**
     * Get jugador
     *
     * @return ufsw\DataBaseBundle\Entity\Jugador 
     */
    public function getJugador()
    {
        return $this->jugador;
    }

    /**
     * Set goles
     *
     * @param integer $goles
     * @return Estadistica
     */
    public function setGoles($goles)
    {
        $this->goles = $goles;

        return $this;
    }

    /**
     * Get goles
     *
     * @return integer 
     */
    public function getGoles()
    {
        return $this->goles;
    }

    /**
     * Set defensas
     *
     * @param integer $defensas
     * @return Estadistica
     */
    public function setDefensas($defensas)
    {
        $this->defensas = $defensas;

        return $this;
    }

    /**
     * Get defensas
     *
     * @return integer 
     */
    public function getDefensas()
    {
        return $this->defensas;
    }

    /**
     * Set asistencias
     *
     * @param integer $asistencias
     * @return Estadistica
     */
    public function setAsistencias($asistencias)
    {
        $this->asistencias = $asistencias;

        return $this;
    }

    /**
     * Get asistencias
     *
     * @return integer 
     */
    public function getAsistencias()
    {
        return $this->asistencias;
    }

    /**
     * Set partido
     *
     * @param $partido
     * @return Estadistica
     */
    public function setPartido(Partido $partido)
    {
        $this->partido = $partido;

        return $this;
    }

    /**
     * Get partido
     *
     * @return ufsw\DataBaseBundle\Entity\Partido 
     */
    public function getPartido()
    {
        return $this->partido;
    }
}
