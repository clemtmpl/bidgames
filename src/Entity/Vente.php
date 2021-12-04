<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Vente
 *
 * @ORM\Table(name="vente")
 * @ORM\Entity(repositoryClass="App\Repository\VenteRepository")
 */
class Vente
{
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATES_VENTES", type="date", nullable=true)
     */
    private $datesVentes;

    /**
     * @var string
     *
     * @ORM\Column(name="VENTE_ID", type="string", length=250, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $venteId;

    /**
     * @var string
     *
     * @ORM\Column(name="COMMISSAIRE", type="string", length=250, nullable=false, options={"fixed"=true})
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
     * @ORM\Column(name="FRAIS_ADJUDICATION", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $fraisAdjudication;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FRAIS_LIVRAISON", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $fraisLivraison;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TYPE_VENTE", type="string", length=250, nullable=true, options={"fixed"=true})
     */
    private $typeVente;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CATEGORIE_VENTE", type="string", length=250, nullable=true, options={"fixed"=true})
     */
    private $categorieVente;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRIX_ADJUGE", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $prixAdjuge;

    public function getDatesVentes(): ?\DateTimeInterface
    {
        return $this->datesVentes;
    }

    public function setDatesVentes(?\DateTimeInterface $datesVentes): self
    {
        $this->datesVentes = $datesVentes;

        return $this;
    }

    public function getVenteId(): ?string
    {
        return $this->venteId;
    }

    public function getCommissaire(): ?string
    {
        return $this->commissaire;
    }

    public function setCommissaire(string $commissaire): self
    {
        $this->commissaire = $commissaire;

        return $this;
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

    public function getFraisAdjudication(): ?string
    {
        return $this->fraisAdjudication;
    }

    public function setFraisAdjudication(?string $fraisAdjudication): self
    {
        $this->fraisAdjudication = $fraisAdjudication;

        return $this;
    }

    public function getFraisLivraison(): ?string
    {
        return $this->fraisLivraison;
    }

    public function setFraisLivraison(?string $fraisLivraison): self
    {
        $this->fraisLivraison = $fraisLivraison;

        return $this;
    }

    public function getTypeVente(): ?string
    {
        return $this->typeVente;
    }

    public function setTypeVente(?string $typeVente): self
    {
        $this->typeVente = $typeVente;

        return $this;
    }

    public function getCategorieVente(): ?string
    {
        return $this->categorieVente;
    }

    public function setCategorieVente(?string $categorieVente): self
    {
        $this->categorieVente = $categorieVente;

        return $this;
    }

    public function getPrixAdjuge(): ?string
    {
        return $this->prixAdjuge;
    }

    public function setPrixAdjuge(?string $prixAdjuge): self
    {
        $this->prixAdjuge = $prixAdjuge;

        return $this;
    }

}
