<?php

namespace App\Entity;

use App\Repository\SoortRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SoortRepository::class)
 */
class Soort
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
     * @ORM\Column(type="string", length=255)
     */
    private $Meerprijs;

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

    public function getMeerprijs(): ?string
    {
        return $this->Meerprijs;
    }

    public function setMeerprijs(string $Meerprijs): self
    {
        $this->Meerprijs = $Meerprijs;

        return $this;
    }
}
