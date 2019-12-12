<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpipGroupesMots
 *
 * @ORM\Table(name="spip_groupes_mots")
 * @ORM\Entity
 */
class SpipGroupesMots
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_groupe", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGroupe;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="text", length=65535, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptif", type="text", length=65535, nullable=false)
     */
    private $descriptif;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text", length=0, nullable=false)
     */
    private $texte;

    /**
     * @var string
     *
     * @ORM\Column(name="unseul", type="string", length=3, nullable=false)
     */
    private $unseul = '';

    /**
     * @var string
     *
     * @ORM\Column(name="obligatoire", type="string", length=3, nullable=false)
     */
    private $obligatoire = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tables_liees", type="text", length=65535, nullable=false)
     */
    private $tablesLiees;

    /**
     * @var string
     *
     * @ORM\Column(name="minirezo", type="string", length=3, nullable=false)
     */
    private $minirezo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="comite", type="string", length=3, nullable=false)
     */
    private $comite = '';

    /**
     * @var string
     *
     * @ORM\Column(name="forum", type="string", length=3, nullable=false)
     */
    private $forum = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="maj", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $maj = 'CURRENT_TIMESTAMP';

    public function getIdGroupe(): ?string
    {
        return $this->idGroupe;
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

    public function getDescriptif(): ?string
    {
        return $this->descriptif;
    }

    public function setDescriptif(string $descriptif): self
    {
        $this->descriptif = $descriptif;

        return $this;
    }

    public function getTexte(): ?string
    {
        return $this->texte;
    }

    public function setTexte(string $texte): self
    {
        $this->texte = $texte;

        return $this;
    }

    public function getUnseul(): ?string
    {
        return $this->unseul;
    }

    public function setUnseul(string $unseul): self
    {
        $this->unseul = $unseul;

        return $this;
    }

    public function getObligatoire(): ?string
    {
        return $this->obligatoire;
    }

    public function setObligatoire(string $obligatoire): self
    {
        $this->obligatoire = $obligatoire;

        return $this;
    }

    public function getTablesLiees(): ?string
    {
        return $this->tablesLiees;
    }

    public function setTablesLiees(string $tablesLiees): self
    {
        $this->tablesLiees = $tablesLiees;

        return $this;
    }

    public function getMinirezo(): ?string
    {
        return $this->minirezo;
    }

    public function setMinirezo(string $minirezo): self
    {
        $this->minirezo = $minirezo;

        return $this;
    }

    public function getComite(): ?string
    {
        return $this->comite;
    }

    public function setComite(string $comite): self
    {
        $this->comite = $comite;

        return $this;
    }

    public function getForum(): ?string
    {
        return $this->forum;
    }

    public function setForum(string $forum): self
    {
        $this->forum = $forum;

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
