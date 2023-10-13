<?php

namespace App\Entity;

use App\Repository\DtesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DtesRepository::class)
 */
class Dtes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $tipoDte;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $codigoControl;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $codigoGeneracion;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $sello;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $fechaGeneracion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipoDte(): ?string
    {
        return $this->tipoDte;
    }

    public function setTipoDte(?string $tipoDte): self
    {
        $this->tipoDte = $tipoDte;

        return $this;
    }

    public function getCodigoControl(): ?string
    {
        return $this->codigoControl;
    }

    public function setCodigoControl(?string $codigoControl): self
    {
        $this->codigoControl = $codigoControl;

        return $this;
    }

    public function getCodigoGeneracion(): ?string
    {
        return $this->codigoGeneracion;
    }

    public function setCodigoGeneracion(?string $codigoGeneracion): self
    {
        $this->codigoGeneracion = $codigoGeneracion;

        return $this;
    }

    public function getSello(): ?string
    {
        return $this->sello;
    }

    public function setSello(?string $sello): self
    {
        $this->sello = $sello;

        return $this;
    }

    public function getFechaGeneracion(): ?\DateTimeInterface
    {
        return $this->fechaGeneracion;
    }

    public function setFechaGeneracion(?\DateTimeInterface $fechaGeneracion): self
    {
        $this->fechaGeneracion = $fechaGeneracion;

        return $this;
    }
}
