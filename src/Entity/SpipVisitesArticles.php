<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpipVisitesArticles
 *
 * @ORM\Table(name="spip_visites_articles")
 * @ORM\Entity
 */
class SpipVisitesArticles
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="id_article", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idArticle;

    /**
     * @var int
     *
     * @ORM\Column(name="visites", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $visites = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="maj", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $maj = 'CURRENT_TIMESTAMP';

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function getIdArticle(): ?int
    {
        return $this->idArticle;
    }

    public function getVisites(): ?int
    {
        return $this->visites;
    }

    public function setVisites(int $visites): self
    {
        $this->visites = $visites;

        return $this;
    }

    public function getMaj(): ?\DateTimeInterface
    {
        return $this->maj;
    }

    public function setMaj(\DateTimeInterface $maj): self
    {
        $this->maj = $maj;

        return $this;
    }


}
