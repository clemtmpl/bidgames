<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdreAchatFixe
 *
 * @ORM\Table(name="ordre_achat_fixe")
 * @ORM\Entity(repositoryClass="App\Repository\OrdreAchatFixeRepository")
 */
class OrdreAchatFixe
{
    /**
     * @var string
     *
     * @ORM\Column(name="UTI_PERSONNE_ID", type="string", length=250, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $utiPersonneId;

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
     * @ORM\Column(name="MONTANT_MAX_ORDRE_FIXE", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $montantMaxOrdreFixe;

    public function getUtiPersonneId(): ?string
    {
        return $this->utiPersonneId;
    }

    public function getPersonneId(): ?string
    {
        return $this->personneId;
    }

    public function getVenteId(): ?string
    {
        return $this->venteId;
    }

    public function getMontantMaxOrdreFixe(): ?string
    {
        return $this->montantMaxOrdreFixe;
    }

    public function setMontantMaxOrdreFixe(?string $montantMaxOrdreFixe): self
    {
        $this->montantMaxOrdreFixe = $montantMaxOrdreFixe;

        return $this;
    }


}
