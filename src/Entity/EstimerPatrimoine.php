<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstimerPatrimoine
 *
 * @ORM\Table(name="estimer_patrimoine")
 * @ORM\Entity(repositoryClass="App\Repository\EstimerPatrimoineRepository")
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

    public function getCommissaire(): ?string
    {
        return $this->commissaire;
    }

    public function getPersonneId(): ?string
    {
        return $this->personneId;
    }

    public function getDureeEstimation(): ?string
    {
        return $this->dureeEstimation;
    }

    public function setDureeEstimation(?string $dureeEstimation): self
    {
        $this->dureeEstimation = $dureeEstimation;

        return $this;
    }

    public function getFraisAnnexe(): ?string
    {
        return $this->fraisAnnexe;
    }

    public function setFraisAnnexe(?string $fraisAnnexe): self
    {
        $this->fraisAnnexe = $fraisAnnexe;

        return $this;
    }

    public function getFraisDeplacement(): ?string
    {
        return $this->fraisDeplacement;
    }

    public function setFraisDeplacement(?string $fraisDeplacement): self
    {
        $this->fraisDeplacement = $fraisDeplacement;

        return $this;
    }

    public function getNbreBiens(): ?int
    {
        return $this->nbreBiens;
    }

    public function setNbreBiens(?int $nbreBiens): self
    {
        $this->nbreBiens = $nbreBiens;

        return $this;
    }


}
