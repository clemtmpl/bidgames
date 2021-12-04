<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articles
 *
 * @ORM\Table(name="articles")
 * @ORM\Entity(repositoryClass="App\Repository\ArticlesRepository")
 */
class Articles
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="TYPES_ART", type="string", length=250, nullable=true, options={"fixed"=true})
     */
    private $typesArt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRIX_RESERVE", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $prixReserve;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PHOTOS", type="blob", length=0, nullable=true)
     */
    private $photos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NUMERO", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $numero;

    /**
     * @var int|null
     *
     * @ORM\Column(name="LOT", type="integer", nullable=true)
     */
    private $lot;

    /**
     * @var int|null
     *
     * @ORM\Column(name="REF_CATA", type="integer", nullable=true)
     */
    private $refCata;

    /**
     * @var string
     *
     * @ORM\Column(name="ARTICLE_ID", type="string", length=250, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $articleId;

    /**
     * @var string
     *
     * @ORM\Column(name="PERSONNE_ID", type="string", length=250, nullable=false)
     */
    private $personneId;

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
     * @ORM\Column(name="STYLE", type="string", length=250, nullable=true, options={"fixed"=true})
     */
    private $style;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PRIX_ESTIMATION", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $prixEstimation;

    public function getTypesArt(): ?string
    {
        return $this->typesArt;
    }

    public function setTypesArt(?string $typesArt): self
    {
        $this->typesArt = $typesArt;

        return $this;
    }

    public function getPrixReserve(): ?string
    {
        return $this->prixReserve;
    }

    public function setPrixReserve(?string $prixReserve): self
    {
        $this->prixReserve = $prixReserve;

        return $this;
    }

    public function getPhotos()
    {
        return $this->photos;
    }

    public function setPhotos($photos): self
    {
        $this->photos = $photos;

        return $this;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(?string $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getLot(): ?int
    {
        return $this->lot;
    }

    public function setLot(?int $lot): self
    {
        $this->lot = $lot;

        return $this;
    }

    public function getRefCata(): ?int
    {
        return $this->refCata;
    }

    public function setRefCata(?int $refCata): self
    {
        $this->refCata = $refCata;

        return $this;
    }

    public function getArticleId(): ?string
    {
        return $this->articleId;
    }

    public function getPersonneId(): ?string
    {
        return $this->personneId;
    }

    public function setPersonneId(string $personneId): self
    {
        $this->personneId = $personneId;

        return $this;
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

    public function getStyle(): ?string
    {
        return $this->style;
    }

    public function setStyle(?string $style): self
    {
        $this->style = $style;

        return $this;
    }

    public function getPrixEstimation(): ?string
    {
        return $this->prixEstimation;
    }

    public function setPrixEstimation(?string $prixEstimation): self
    {
        $this->prixEstimation = $prixEstimation;

        return $this;
    }


}
