<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpipUrls
 *
 * @ORM\Table(name="spip_urls", indexes={@ORM\Index(name="type", columns={"type", "id_objet"}), @ORM\Index(name="langue", columns={"langue"}), @ORM\Index(name="url", columns={"url"})})
 * @ORM\Entity
 */
class SpipUrls
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_parent", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idParent = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=25, nullable=false, options={"default"="article"})
     */
    private $type = 'article';

    /**
     * @var int
     *
     * @ORM\Column(name="id_objet", type="bigint", nullable=false)
     */
    private $idObjet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $date = '0000-00-00 00:00:00';

    /**
     * @var int
     *
     * @ORM\Column(name="segments", type="smallint", nullable=false, options={"default"="1"})
     */
    private $segments = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="perma", type="boolean", nullable=false)
     */
    private $perma = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="langue", type="string", length=10, nullable=false)
     */
    private $langue = '';

    public function getIdParent(): ?string
    {
        return $this->idParent;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getIdObjet(): ?string
    {
        return $this->idObjet;
    }

    public function setIdObjet(string $idObjet): self
    {
        $this->idObjet = $idObjet;

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

    public function getSegments(): ?int
    {
        return $this->segments;
    }

    public function setSegments(int $segments): self
    {
        $this->segments = $segments;

        return $this;
    }

    public function getPerma(): ?bool
    {
        return $this->perma;
    }

    public function setPerma(bool $perma): self
    {
        $this->perma = $perma;

        return $this;
    }

    public function getLangue(): ?string
    {
        return $this->langue;
    }

    public function setLangue(string $langue): self
    {
        $this->langue = $langue;

        return $this;
    }


}
