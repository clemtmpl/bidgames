<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RequisitionDeVente
 *
 * @ORM\Table(name="requisition_de_vente")
 * @ORM\Entity(repositoryClass="App\Repository\RequisitionDeVenteRepository")
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

    public function getRequisitionDesc(): ?string
    {
        return $this->requisitionDesc;
    }

    public function setRequisitionDesc(?string $requisitionDesc): self
    {
        $this->requisitionDesc = $requisitionDesc;

        return $this;
    }

    public function getDateRequisition(): ?\DateTimeInterface
    {
        return $this->dateRequisition;
    }

    public function setDateRequisition(?\DateTimeInterface $dateRequisition): self
    {
        $this->dateRequisition = $dateRequisition;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(?string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getRequisitionId(): ?string
    {
        return $this->requisitionId;
    }


}
