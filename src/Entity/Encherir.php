<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Encherir
 *
 * @ORM\Table(name="encherir")
 * @ORM\Entity
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


}
