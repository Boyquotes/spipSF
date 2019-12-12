<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpipSyndicArticles
 *
 * @ORM\Table(name="spip_syndic_articles", indexes={@ORM\Index(name="id_syndic", columns={"id_syndic"}), @ORM\Index(name="statut", columns={"statut"}), @ORM\Index(name="url", columns={"url"})})
 * @ORM\Entity
 */
class SpipSyndicArticles
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_syndic_article", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSyndicArticle;

    /**
     * @var int
     *
     * @ORM\Column(name="id_syndic", type="bigint", nullable=false)
     */
    private $idSyndic = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="text", length=65535, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="text", length=65535, nullable=false)
     */
    private $url;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $date = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="lesauteurs", type="text", length=65535, nullable=false)
     */
    private $lesauteurs;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="maj", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $maj = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=10, nullable=false)
     */
    private $statut = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="descriptif", type="text", length=65535, nullable=false)
     */
    private $descriptif;

    /**
     * @var string
     *
     * @ORM\Column(name="lang", type="string", length=10, nullable=false)
     */
    private $lang = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url_source", type="text", length=255, nullable=false)
     */
    private $urlSource;

    /**
     * @var string
     *
     * @ORM\Column(name="source", type="text", length=255, nullable=false)
     */
    private $source;

    /**
     * @var string
     *
     * @ORM\Column(name="tags", type="text", length=65535, nullable=false)
     */
    private $tags;

    public function getIdSyndicArticle(): ?string
    {
        return $this->idSyndicArticle;
    }

    public function getIdSyndic(): ?string
    {
        return $this->idSyndic;
    }

    public function setIdSyndic(string $idSyndic): self
    {
        $this->idSyndic = $idSyndic;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getLesauteurs(): ?string
    {
        return $this->lesauteurs;
    }

    public function setLesauteurs(string $lesauteurs): self
    {
        $this->lesauteurs = $lesauteurs;

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

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getDescriptif(): ?string
    {
        return $this->descriptif;
    }

    public function setDescriptif(string $descriptif): self
    {
        $this->descriptif = $descriptif;

        return $this;
    }

    public function getLang(): ?string
    {
        return $this->lang;
    }

    public function setLang(string $lang): self
    {
        $this->lang = $lang;

        return $this;
    }

    public function getUrlSource(): ?string
    {
        return $this->urlSource;
    }

    public function setUrlSource(string $urlSource): self
    {
        $this->urlSource = $urlSource;

        return $this;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(string $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function getTags(): ?string
    {
        return $this->tags;
    }

    public function setTags(string $tags): self
    {
        $this->tags = $tags;

        return $this;
    }


}
