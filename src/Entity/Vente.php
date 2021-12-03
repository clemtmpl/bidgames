<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Vente
 *
 * @ORM\Table(name="vente")
 * @ORM\Entity
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

}
