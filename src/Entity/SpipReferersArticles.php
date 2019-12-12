<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpipReferersArticles
 *
 * @ORM\Table(name="spip_referers_articles", indexes={@ORM\Index(name="referer_md5", columns={"referer_md5"})})
 * @ORM\Entity
 */
class SpipReferersArticles
{
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
     * @ORM\Column(name="referer_md5", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $refererMd5;

    /**
     * @var string
     *
     * @ORM\Column(name="referer", type="string", length=255, nullable=false)
     */
    private $referer = '';

    /**
     * @var int
     *
     * @ORM\Column(name="visites", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $visites;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="maj", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $maj = 'CURRENT_TIMESTAMP';

    public function getIdArticle(): ?int
    {
        return $this->idArticle;
    }

    public function getRefererMd5(): ?string
    {
        return $this->refererMd5;
    }

    public function getReferer(): ?string
    {
        return $this->referer;
    }

    public function setReferer(string $referer): self
    {
        $this->referer = $referer;

        return $this;
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
