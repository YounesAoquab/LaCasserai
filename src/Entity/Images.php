<?php

namespace App\Entity;

use App\Repository\ImagesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ImagesRepository::class)
 */
class Images
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
     * @ORM\Column(type="string", length=255)
     */
    private $Imagefile;

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

    public function getImagefile(): ?string
    {
        return $this->Imagefile;
    }

    public function setImagefile(string $Imagefile): self
    {
        $this->Imagefile = $Imagefile;

        return $this;
    }
}
