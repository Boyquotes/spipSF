<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpipMots
 *
 * @ORM\Table(name="spip_mots", indexes={@ORM\Index(name="id_groupe", columns={"id_groupe"})})
 * @ORM\Entity
 */
class SpipMots
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_mot", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMot;

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
     * @var int
     *
     * @ORM\Column(name="id_groupe", type="bigint", nullable=false)
     */
    private $idGroupe = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="text", length=65535, nullable=false)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="maj", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $maj = 'CURRENT_TIMESTAMP';

    public function getIdMot(): ?string
    {
        return $this->idMot;
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

    public function getIdGroupe(): ?string
    {
        return $this->idGroupe;
    }

    public function setIdGroupe(string $idGroupe): self
    {
        $this->idGroupe = $idGroupe;

        return $this;
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
