<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements \JsonSerializable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Login;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Pwd;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $EtatActiv;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $EtatConnect;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $IsAdminOng;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $DateDernCon;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $DateCreat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $UserCreat;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $DateModif;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $UserModif;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogin(): ?string
    {
        return $this->Login;
    }

    public function setLogin(string $Login): self
    {
        $this->Login = $Login;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getPwd(): ?string
    {
        return $this->$Pwd;
    }

    public function setPwd(?string $Pwd): self
    {
        $this->Pwd = $Pwd;

        return $this;
    }

    public function getEtatActiv(): ?bool
    {
        return $this->EtatActiv;
    }

    public function setEtatActiv(?bool $EtatActiv): self
    {
        $this->EtatActiv = $EtatActiv;

        return $this;
    }

    public function getEtatConnect(): ?bool
    {
        return $this->EtatConnect;
    }

    public function setEtatConnect(?bool $EtatConnect): self
    {
        $this->EtatConnect = $EtatConnect;

        return $this;
    }

    public function getIsAdminOng(): ?bool
    {
        return $this->IsAdminOng;
    }

    public function setIsAdminOng(?bool $IsAdminOng): self
    {
        $this->IsAdminOng = $IsAdminOng;

        return $this;
    }

    public function getDateDernCon(): ?\DateTimeInterface
    {
        return $this->DateDernCon;
    }

    public function setDateDernCon(?\DateTimeInterface $DateDernCon): self
    {
        $this->DateDernCon = $DateDernCon;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getDateCreat(): ?\DateTimeInterface
    {
        return $this->DateCreat;
    }

    public function setDateCreat(?\DateTimeInterface $DateCreat): self
    {
        $this->DateCreat = $DateCreat;

        return $this;
    }

    public function getUserCreat(): ?string
    {
        return $this->UserCreat;
    }

    public function setUserCreat(?string $UserCreat): self
    {
        $this->UserCreat = $UserCreat;

        return $this;
    }

    public function getDateModif(): ?\DateTimeInterface
    {
        return $this->DateModif;
    }

    public function setDateModif(?\DateTimeInterface $DateModif): self
    {
        $this->DateModif = $DateModif;

        return $this;
    }

    public function getUserModif(): ?string
    {
        return $this->UserModif;
    }

    public function setUserModif(?string $UserModif): self
    {
        $this->UserModif = $UserModif;

        return $this;
    }
/**
    * Specify data which should be serialized to JSON
    * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
    * @return mixed data which can be serialized by <b>json_encode</b>,
    * which is a value of any type other than a resource.
    * @since 5.4.0
    */
    public function jsonSerialize()
    {
     return [
      "Login" => $this->getLogin(),
      "Nom" => $this->getNom(),
      "Prenom" => $this->getPrenom()
     ];
    }
}
