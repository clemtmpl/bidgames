<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participer
 *
 * @ORM\Table(name="participer")
 * @ORM\Entity
 */
class Participer
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


}
