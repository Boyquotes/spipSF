<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpipVersions
 *
 * @ORM\Table(name="spip_versions", indexes={@ORM\Index(name="id_version", columns={"id_version"}), @ORM\Index(name="id_objet", columns={"id_objet"}), @ORM\Index(name="objet", columns={"objet"})})
 * @ORM\Entity
 */
class SpipVersions
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_version", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idVersion = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="id_objet", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idObjet = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="string", length=25, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $objet = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $date = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="id_auteur", type="string", length=23, nullable=false)
     */
    private $idAuteur = '';

    /**
     * @var string
     *
     * @ORM\Column(name="titre_version", type="text", length=65535, nullable=false)
     */
    private $titreVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="permanent", type="string", length=3, nullable=false, options={"fixed"=true})
     */
    private $permanent = '';

    /**
     * @var string
     *
     * @ORM\Column(name="champs", type="text", length=65535, nullable=false)
     */
    private $champs;

    public function getIdVersion(): ?string
    {
        return $this->idVersion;
    }

    public function getIdObjet(): ?string
    {
        return $this->idObjet;
    }

    public function getObjet(): ?string
    {
        return $this->objet;
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

    public function getIdAuteur(): ?string
    {
        return $this->idAuteur;
    }

    public function setIdAuteur(string $idAuteur): self
    {
        $this->idAuteur = $idAuteur;

        return $this;
    }

    public function getTitreVersion(): ?string
    {
        return $this->titreVersion;
    }

    public function setTitreVersion(string $titreVersion): self
    {
        $this->titreVersion = $titreVersion;

        return $this;
    }

    public function getPermanent(): ?string
    {
        return $this->permanent;
    }

    public function setPermanent(string $permanent): self
    {
        $this->permanent = $permanent;

        return $this;
    }

    public function getChamps(): ?string
    {
        return $this->champs;
    }

    public function setChamps(string $champs): self
    {
        $this->champs = $champs;

        return $this;
    }


}
