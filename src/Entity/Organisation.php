<?php

namespace App\Entity;

use App\Repository\OrganisationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrganisationRepository::class)
 */
class Organisation
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
    private $Name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Adress;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Zip;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $City;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Country;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Website;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Phone_nr;

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="Organisation_id")
     */
    private $stop;

    public function __construct()
    {
        $this->stop = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->Adress;
    }

    public function setAdress(string $Adress): self
    {
        $this->Adress = $Adress;

        return $this;
    }

    public function getZip(): ?string
    {
        return $this->Zip;
    }

    public function setZip(string $Zip): self
    {
        $this->Zip = $Zip;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->City;
    }

    public function setCity(string $City): self
    {
        $this->City = $City;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->Country;
    }

    public function setCountry(string $Country): self
    {
        $this->Country = $Country;

        return $this;
    }

    public function getWebsite(): ?string
    {
        return $this->Website;
    }

    public function setWebsite(string $Website): self
    {
        $this->Website = $Website;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getPhoneNr(): ?string
    {
        return $this->Phone_nr;
    }

    public function setPhoneNr(string $Phone_nr): self
    {
        $this->Phone_nr = $Phone_nr;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getStop(): Collection
    {
        return $this->stop;
    }

    public function addStop(User $stop): self
    {
        if (!$this->stop->contains($stop)) {
            $this->stop[] = $stop;
            $stop->setOrganisationId($this);
        }

        return $this;
    }

    public function removeStop(User $stop): self
    {
        if ($this->stop->contains($stop)) {
            $this->stop->removeElement($stop);
            // set the owning side to null (unless already changed)
            if ($stop->getOrganisationId() === $this) {
                $stop->setOrganisationId(null);
            }
        }

        return $this;
    }
}
