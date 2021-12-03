<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdreAchatSecret
 *
 * @ORM\Table(name="ordre_achat_secret")
 * @ORM\Entity
 */
class OrdreAchatSecret
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
     * @ORM\Column(name="MONTANT_MAX_ENCHERE", type="decimal", precision=8, scale=0, nullable=true)
     */
    private $montantMaxEnchere;


}
