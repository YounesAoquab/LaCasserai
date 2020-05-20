<?php

namespace App\Entity;

use App\Repository\KamerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=KamerRepository::class)
 */
class Kamer
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Extras::class, inversedBy="Kamer")
     */
    private $extras;

    /**
     * @ORM\ManyToOne(targetEntity=Soort::class)
     */
    private $Soort_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Prijs;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getExtras(): ?Extras
    {
        return $this->extras;
    }

    public function setExtras(?Extras $extras): self
    {
        $this->extras = $extras;

        return $this;
    }

    public function getSoortId(): ?Soort
    {
        return $this->Soort_id;
    }

    public function setSoortId(?Soort $Soort_id): self
    {
        $this->Soort_id = $Soort_id;

        return $this;
    }

    public function getPrijs(): ?string
    {
        return $this->Prijs;
    }

    public function setPrijs(string $Prijs): self
    {
        $this->Prijs = $Prijs;

        return $this;
    }
}
