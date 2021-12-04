<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommissairePriseur
 *
 * @ORM\Table(name="commissaire_priseur")
 * @ORM\Entity(repositoryClass="App\Repository\CommissairePriseurRepository")
 */
class CommissairePriseur
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="STATUT", type="string", length=250, nullable=true, options={"fixed"=true})
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMISSAIRE", type="string", length=250, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $commissaire;

    /**
     * @var string|null
     *
     * @ORM\Column(name="REGION", type="string", length=250, nullable=true, options={"fixed"=true})
     */
    private $region;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DEPARTEMENT", type="string", length=250, nullable=true, options={"fixed"=true})
     */
    private $departement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ADRESSE_ID", type="string", length=250, nullable=true)
     */
    private $adresseId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VILLES", type="string", length=250, nullable=true, options={"fixed"=true})
     */
    private $villes;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CODE_POSTAL", type="integer", nullable=true)
     */
    private $codePostal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRENOM", type="string", length=250, nullable=true, options={"fixed"=true})
     */
    private $prenom;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATE_NAISSANCE", type="date", nullable=true)
     */
    private $dateNaissance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EMAIL", type="string", length=250, nullable=true, options={"fixed"=true})
     */
    private $email;

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getCommissaire(): ?string
    {
        return $this->commissaire;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(?string $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function getDepartement(): ?string
    {
        return $this->departement;
    }

    public function setDepartement(?string $departement): self
    {
        $this->departement = $departement;

        return $this;
    }

    public function getAdresseId(): ?string
    {
        return $this->adresseId;
    }

    public function setAdresseId(?string $adresseId): self
    {
        $this->adresseId = $adresseId;

        return $this;
    }

    public function getVilles(): ?string
    {
        return $this->villes;
    }

    public function setVilles(?string $villes): self
    {
        $this->villes = $villes;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->codePostal;
    }

    public function setCodePostal(?int $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(?\DateTimeInterface $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }


}
