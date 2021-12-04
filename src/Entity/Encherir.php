<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Encherir
 *
 * @ORM\Table(name="encherir")
 * @ORM\Entity(repositoryClass="App\Repository\EncherirRepository")
 */
class Encherir
{
    /**
     * @var string
     *
     * @ORM\Column(name="PERSONNE_ID", type="string", length=250, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $personneId;

    /**
     * @var string
     *
     * @ORM\Column(name="VENTE_ID", type="string", length=250, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $venteId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MONTANT_ENCHERE", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $montantEnchere;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATE_ENCHERE", type="datetime", nullable=true)
     */
    private $dateEnchere;

    public function getPersonneId(): ?string
    {
        return $this->personneId;
    }

    public function getVenteId(): ?string
    {
        return $this->venteId;
    }

    public function getMontantEnchere(): ?string
    {
        return $this->montantEnchere;
    }

    public function setMontantEnchere(?string $montantEnchere): self
    {
        $this->montantEnchere = $montantEnchere;

        return $this;
    }

    public function getDateEnchere(): ?\DateTimeInterface
    {
        return $this->dateEnchere;
    }

    public function setDateEnchere(?\DateTimeInterface $dateEnchere): self
    {
        $this->dateEnchere = $dateEnchere;

        return $this;
    }


}
