<?php

namespace ufsw\DataBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Partido
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="ufsw\DataBaseBundle\Entity\PartidoRepository")
 */
class Partido
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
     * @ORM\ManyToOne(targetEntity="UFSW\DataBaseBundle\Entity\Torneo", inversedBy="partidos")
     * @ORM\JoinColumn(name="torneo_id", referencedColumnName="id")
     */
    private $torneo;

    /**
     * @var string
     *
     * @ORM\Column(name="resultado", type="string", length=255)
     */
    private $resultado;

    /**
     * @var integer
     *
     * @ORM\Column(name="cancha", type="integer")
     */
    private $cancha;

    /**
     * @var string
     *
     * @ORM\Column(name="estadisticas", type="string", length=255)
     */
    private $estadisticas;


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
     * Set torneo
     *
     * @param string $torneo
     * @return Partido
     */
    public function setTorneo($torneo)
    {
        $this->torneo = $torneo;

        return $this;
    }

    /**
     * Get torneo
     *
     * @return string 
     */
    public function getTorneo()
    {
        return $this->torneo;
    }

    /**
     * Set resultado
     *
     * @param string $resultado
     * @return Partido
     */
    public function setResultado($resultado)
    {
        $this->resultado = $resultado;

        return $this;
    }

    /**
     * Get resultado
     *
     * @return string 
     */
    public function getResultado()
    {
        return $this->resultado;
    }

    /**
     * Set cancha
     *
     * @param integer $cancha
     * @return Partido
     */
    public function setCancha($cancha)
    {
        $this->cancha = $cancha;

        return $this;
    }

    /**
     * Get cancha
     *
     * @return integer 
     */
    public function getCancha()
    {
        return $this->cancha;
    }

    /**
     * Set estadisticas
     *
     * @param string $estadisticas
     * @return Partido
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
}
