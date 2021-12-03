<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Signer
 *
 * @ORM\Table(name="signer")
 * @ORM\Entity
 */
class Signer
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
     * @ORM\Column(name="REQUISITION_ID", type="string", length=250, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $requisitionId;

    /**
     * @var string
     *
     * @ORM\Column(name="ARTICLE_ID", type="string", length=250, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $articleId;


}
