<?php

namespace App\Entity;

use App\Repository\ProfilRepository;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;


/**
 * @ORM\Entity(repositoryClass=ProfilRepository::class)
 */

class Profil implements \JsonSerializable
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
    private $NomProfil;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ProfilDesc;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ProfilSys;

    

         /**
     * @var \DateTime $DateCreat
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */

    private $DateCreat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */

     
    private $UserCreat;

   /**
     * @var \DateTime $DateModif
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
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

    public function getNomProfil(): ?string
    {
        return $this->NomProfil;
    }

    public function setNomProfil(string $NomProfil): self
    {
        $this->NomProfil = $NomProfil;

        return $this;
    }

    public function getProfilDesc(): ?string
    {
        return $this->ProfilDesc;
    }

    public function setProfilDesc(?string $ProfilDesc): self
    {
        $this->ProfilDesc = $ProfilDesc;

        return $this;
    }

    public function getProfilSys(): ?int
    {
        return $this->ProfilSys;
    }

    public function setProfilSys(?int $ProfilSys): self
    {
        $this->ProfilSys = $ProfilSys;

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
   * @throws \Exception
   * @ORM\PrePersist()
   */
  public function beforeSave(){

    $this->DateCreat = new \DateTime('now', new \DateTimeZone('Africa/Tunis'));
    $this->DateModif = new \DateTime('now', new \DateTimeZone('Africa/Tunis'));

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
     "NomProfil" => $this->getNomProfil(),
     "ProfilDesc" => $this->getProfilDesc()
    ];
   }
}
