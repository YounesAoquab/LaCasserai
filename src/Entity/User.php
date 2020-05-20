<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User
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
    private $Username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Username_cononice;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Email_canonical;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Enabled;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Salt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Last_login;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Confirmation_token;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Password_requestes;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Roles;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Last_activity;

    /**
     * @ORM\Column(type="integer")
     */
    private $Tel_nr;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Mobile_nr;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $First_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Insertion_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Last_name;

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
    private $Function;

    /**
     * @ORM\ManyToOne(targetEntity=Organisation::class)
     */
    private $Organisation_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->Username;
    }

    public function setUsername(string $Username): self
    {
        $this->Username = $Username;

        return $this;
    }

    public function getUsernameCononice(): ?string
    {
        return $this->Username_cononice;
    }

    public function setUsernameCononice(string $Username_cononice): self
    {
        $this->Username_cononice = $Username_cononice;

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

    public function getEmailCanonical(): ?string
    {
        return $this->Email_canonical;
    }

    public function setEmailCanonical(string $Email_canonical): self
    {
        $this->Email_canonical = $Email_canonical;

        return $this;
    }

    public function getEnabled(): ?string
    {
        return $this->Enabled;
    }

    public function setEnabled(string $Enabled): self
    {
        $this->Enabled = $Enabled;

        return $this;
    }

    public function getSalt(): ?string
    {
        return $this->Salt;
    }

    public function setSalt(string $Salt): self
    {
        $this->Salt = $Salt;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->Password;
    }

    public function setPassword(string $Password): self
    {
        $this->Password = $Password;

        return $this;
    }

    public function getLastLogin(): ?string
    {
        return $this->Last_login;
    }

    public function setLastLogin(string $Last_login): self
    {
        $this->Last_login = $Last_login;

        return $this;
    }

    public function getConfirmationToken(): ?string
    {
        return $this->Confirmation_token;
    }

    public function setConfirmationToken(string $Confirmation_token): self
    {
        $this->Confirmation_token = $Confirmation_token;

        return $this;
    }

    public function getPasswordRequestes(): ?string
    {
        return $this->Password_requestes;
    }

    public function setPasswordRequestes(string $Password_requestes): self
    {
        $this->Password_requestes = $Password_requestes;

        return $this;
    }

    public function getRoles(): ?string
    {
        return $this->Roles;
    }

    public function setRoles(string $Roles): self
    {
        $this->Roles = $Roles;

        return $this;
    }

    public function getLastActivity(): ?string
    {
        return $this->Last_activity;
    }

    public function setLastActivity(string $Last_activity): self
    {
        $this->Last_activity = $Last_activity;

        return $this;
    }

    public function getTelNr(): ?int
    {
        return $this->Tel_nr;
    }

    public function setTelNr(int $Tel_nr): self
    {
        $this->Tel_nr = $Tel_nr;

        return $this;
    }

    public function getMobileNr(): ?string
    {
        return $this->Mobile_nr;
    }

    public function setMobileNr(string $Mobile_nr): self
    {
        $this->Mobile_nr = $Mobile_nr;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->First_name;
    }

    public function setFirstName(string $First_name): self
    {
        $this->First_name = $First_name;

        return $this;
    }

    public function getInsertionName(): ?string
    {
        return $this->Insertion_name;
    }

    public function setInsertionName(string $Insertion_name): self
    {
        $this->Insertion_name = $Insertion_name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->Last_name;
    }

    public function setLastName(string $Last_name): self
    {
        $this->Last_name = $Last_name;

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

    public function getFunction(): ?string
    {
        return $this->Function;
    }

    public function setFunction(string $Function): self
    {
        $this->Function = $Function;

        return $this;
    }

    public function getOrganisationId(): ?Organisation
    {
        return $this->Organisation_id;
    }

    public function setOrganisationId(?Organisation $Organisation_id): self
    {
        $this->Organisation_id = $Organisation_id;

        return $this;
    }
}
