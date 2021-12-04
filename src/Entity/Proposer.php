<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proposer
 *
 * @ORM\Table(name="proposer")
 * @ORM\Entity(repositoryClass="App\Repository\ProposerRepository")
 */
class Proposer
{
    /**
     * @var string
     *
     * @ORM\Column(name="ARTICLE_ID", type="string", length=250, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $articleId;

    /**
     * @var string
     *
     * @ORM\Column(name="VENTE_ID", type="string", length=250, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $venteId;

    public function getArticleId(): ?string
    {
        return $this->articleId;
    }

    public function getVenteId(): ?string
    {
        return $this->venteId;
    }


}
