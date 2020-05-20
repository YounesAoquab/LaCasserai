<?php

namespace App\Entity;

use App\Repository\SeizoenRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SeizoenRepository::class)
 */
class Seizoen
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Omschrijving;

    /**
     * @ORM\Column(type="date")
     */
    private $Begindatum;

    /**
     * @ORM\Column(type="date")
     */
    private $Einddatum;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Korting;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOmschrijving(): ?string
    {
        return $this->Omschrijving;
    }

    public function setOmschrijving(string $Omschrijving): self
    {
        $this->Omschrijving = $Omschrijving;

        return $this;
    }

    public function getBegindatum(): ?\DateTimeInterface
    {
        return $this->Begindatum;
    }

    public function setBegindatum(\DateTimeInterface $Begindatum): self
    {
        $this->Begindatum = $Begindatum;

        return $this;
    }

    public function getEinddatum(): ?\DateTimeInterface
    {
        return $this->Einddatum;
    }

    public function setEinddatum(\DateTimeInterface $Einddatum): self
    {
        $this->Einddatum = $Einddatum;

        return $this;
    }

    public function getKorting(): ?string
    {
        return $this->Korting;
    }

    public function setKorting(string $Korting): self
    {
        $this->Korting = $Korting;

        return $this;
    }
}
