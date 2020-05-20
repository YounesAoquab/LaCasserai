<?php

namespace App\Entity;

use App\Repository\ExtrasRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ExtrasRepository::class)
 */
class Extras
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=Kamer::class, mappedBy="extras")
     */
    private $Kamer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Omschrijving;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Meerprijs;

    public function __construct()
    {
        $this->Kamer = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Kamer[]
     */
    public function getKamer(): Collection
    {
        return $this->Kamer;
    }

    public function addKamer(Kamer $kamer): self
    {
        if (!$this->Kamer->contains($kamer)) {
            $this->Kamer[] = $kamer;
            $kamer->setExtras($this);
        }

        return $this;
    }

    public function removeKamer(Kamer $kamer): self
    {
        if ($this->Kamer->contains($kamer)) {
            $this->Kamer->removeElement($kamer);
            // set the owning side to null (unless already changed)
            if ($kamer->getExtras() === $this) {
                $kamer->setExtras(null);
            }
        }

        return $this;
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
