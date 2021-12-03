<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommissairePriseur
 *
 * @ORM\Table(name="commissaire_priseur")
 * @ORM\Entity
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


}
