<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Regler
 *
 * @ORM\Table(name="regler")
 * @ORM\Entity(repositoryClass="App\Repository\ReglerRepository")
 */
class Regler
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATE_REGLEMENT", type="date", nullable=true)
     */
    private $dateReglement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MONTANT_REGLEMENT", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $montantReglement;

    public function getPersonneId(): ?string
    {
        return $this->personneId;
    }

    public function getVenteId(): ?string
    {
        return $this->venteId;
    }

    public function getDateReglement(): ?\DateTimeInterface
    {
        return $this->dateReglement;
    }

    public function setDateReglement(?\DateTimeInterface $dateReglement): self
    {
        $this->dateReglement = $dateReglement;

        return $this;
    }

    public function getMontantReglement(): ?string
    {
        return $this->montantReglement;
    }

    public function setMontantReglement(?string $montantReglement): self
    {
        $this->montantReglement = $montantReglement;

        return $this;
    }


}
