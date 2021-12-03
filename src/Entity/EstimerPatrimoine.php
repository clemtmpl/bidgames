<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstimerPatrimoine
 *
 * @ORM\Table(name="estimer_patrimoine")
 * @ORM\Entity
 */
class EstimerPatrimoine
{
    /**
     * @var string
     *
     * @ORM\Column(name="COMMISSAIRE", type="string", length=250, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $commissaire;

    /**
     * @var string
     *
     * @ORM\Column(name="PERSONNE_ID", type="string", length=250, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $personneId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DUREE_ESTIMATION", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $dureeEstimation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FRAIS_ANNEXE", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $fraisAnnexe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FRAIS_DEPLACEMENT", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $fraisDeplacement;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NBRE_BIENS", type="integer", nullable=true)
     */
    private $nbreBiens;


}
