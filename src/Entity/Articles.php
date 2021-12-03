<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articles
 *
 * @ORM\Table(name="articles")
 * @ORM\Entity
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


}
