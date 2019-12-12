<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpipPlugins
 *
 * @ORM\Table(name="spip_plugins", indexes={@ORM\Index(name="prefixe", columns={"prefixe"})})
 * @ORM\Entity
 */
class SpipPlugins
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_plugin", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPlugin;

    /**
     * @var string
     *
     * @ORM\Column(name="prefixe", type="string", length=30, nullable=false)
     */
    private $prefixe = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="slogan", type="text", length=65535, nullable=false)
     */
    private $slogan;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=100, nullable=false)
     */
    private $categorie = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tags", type="text", length=65535, nullable=false)
     */
    private $tags;

    /**
     * @var string
     *
     * @ORM\Column(name="vmax", type="string", length=24, nullable=false)
     */
    private $vmax = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_crea", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $dateCrea = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modif", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $dateModif = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="compatibilite_spip", type="string", length=24, nullable=false)
     */
    private $compatibiliteSpip = '';

    /**
     * @var string
     *
     * @ORM\Column(name="branches_spip", type="string", length=255, nullable=false)
     */
    private $branchesSpip = '';

    public function getIdPlugin(): ?string
    {
        return $this->idPlugin;
    }

    public function getPrefixe(): ?string
    {
        return $this->prefixe;
    }

    public function setPrefixe(string $prefixe): self
    {
        $this->prefixe = $prefixe;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getSlogan(): ?string
    {
        return $this->slogan;
    }

    public function setSlogan(string $slogan): self
    {
        $this->slogan = $slogan;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

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

    public function getVmax(): ?string
    {
        return $this->vmax;
    }

    public function setVmax(string $vmax): self
    {
        $this->vmax = $vmax;

        return $this;
    }

    public function getDateCrea(): ?\DateTimeInterface
    {
        return $this->dateCrea;
    }

    public function setDateCrea(\DateTimeInterface $dateCrea): self
    {
        $this->dateCrea = $dateCrea;

        return $this;
    }

    public function getDateModif(): ?\DateTimeInterface
    {
        return $this->dateModif;
    }

    public function setDateModif(\DateTimeInterface $dateModif): self
    {
        $this->dateModif = $dateModif;

        return $this;
    }

    public function getCompatibiliteSpip(): ?string
    {
        return $this->compatibiliteSpip;
    }

    public function setCompatibiliteSpip(string $compatibiliteSpip): self
    {
        $this->compatibiliteSpip = $compatibiliteSpip;

        return $this;
    }

    public function getBranchesSpip(): ?string
    {
        return $this->branchesSpip;
    }

    public function setBranchesSpip(string $branchesSpip): self
    {
        $this->branchesSpip = $branchesSpip;

        return $this;
    }


}
