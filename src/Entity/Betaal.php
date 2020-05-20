<?php

namespace App\Entity;

use App\Repository\BetaalRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BetaalRepository::class)
 */
class Betaal
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Reservering::class, cascade={"persist", "remove"})
     */
    private $Betaal_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $User_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Soort;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Rekeningnummer;

    /**
     * @ORM\Column(type="date")
     */
    private $Betaaldate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBetaalId(): ?Reservering
    {
        return $this->Betaal_id;
    }

    public function setBetaalId(?Reservering $Betaal_id): self
    {
        $this->Betaal_id = $Betaal_id;

        return $this;
    }

    public function getUserId(): ?string
    {
        return $this->User_id;
    }

    public function setUserId(string $User_id): self
    {
        $this->User_id = $User_id;

        return $this;
    }

    public function getSoort(): ?string
    {
        return $this->Soort;
    }

    public function setSoort(string $Soort): self
    {
        $this->Soort = $Soort;

        return $this;
    }

    public function getRekeningnummer(): ?string
    {
        return $this->Rekeningnummer;
    }

    public function setRekeningnummer(string $Rekeningnummer): self
    {
        $this->Rekeningnummer = $Rekeningnummer;

        return $this;
    }

    public function getBetaaldate(): ?\DateTimeInterface
    {
        return $this->Betaaldate;
    }

    public function setBetaaldate(\DateTimeInterface $Betaaldate): self
    {
        $this->Betaaldate = $Betaaldate;

        return $this;
    }
}
