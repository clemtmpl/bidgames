<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RequisitionDeVente
 *
 * @ORM\Table(name="requisition_de_vente")
 * @ORM\Entity
 */
class RequisitionDeVente
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="REQUISITION_DESC", type="text", length=65535, nullable=true)
     */
    private $requisitionDesc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DATE_REQUISITION", type="date", nullable=true)
     */
    private $dateRequisition;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LIEU", type="string", length=250, nullable=true, options={"fixed"=true})
     */
    private $lieu;

    /**
     * @var string
     *
     * @ORM\Column(name="REQUISITION_ID", type="string", length=250, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $requisitionId;


}
