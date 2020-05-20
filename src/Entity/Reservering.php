<?php

namespace App\Entity;

use App\Repository\ReserveringRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReserveringRepository::class)
 */
class Reservering
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Kamer::class)
     */
    private $Kamer_id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     */
    private $User_id;

    /**
     * @ORM\Column(type="date")
     */
    private $Checkindate;

    /**
     * @ORM\Column(type="date")
     */
    private $Checkoutdate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Betaal_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Betaalmethode;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKamerId(): ?Kamer
    {
        return $this->Kamer_id;
    }

    public function setKamerId(?Kamer $Kamer_id): self
    {
        $this->Kamer_id = $Kamer_id;

        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->User_id;
    }

    public function setUserId(?User $User_id): self
    {
        $this->User_id = $User_id;

        return $this;
    }

    public function getCheckindate(): ?\DateTimeInterface
    {
        return $this->Checkindate;
    }

    public function setCheckindate(\DateTimeInterface $Checkindate): self
    {
        $this->Checkindate = $Checkindate;

        return $this;
    }

    public function getCheckoutdate(): ?\DateTimeInterface
    {
        return $this->Checkoutdate;
    }

    public function setCheckoutdate(\DateTimeInterface $Checkoutdate): self
    {
        $this->Checkoutdate = $Checkoutdate;

        return $this;
    }

    public function getBetaalId(): ?string
    {
        return $this->Betaal_id;
    }

    public function setBetaalId(string $Betaal_id): self
    {
        $this->Betaal_id = $Betaal_id;

        return $this;
    }

    public function getBetaalmethode(): ?string
    {
        return $this->Betaalmethode;
    }

    public function setBetaalmethode(string $Betaalmethode): self
    {
        $this->Betaalmethode = $Betaalmethode;

        return $this;
    }
}
