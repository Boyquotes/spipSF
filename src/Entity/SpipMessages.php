<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpipMessages
 *
 * @ORM\Table(name="spip_messages", indexes={@ORM\Index(name="id_auteur", columns={"id_auteur"})})
 * @ORM\Entity
 */
class SpipMessages
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_message", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="text", length=65535, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text", length=0, nullable=false)
     */
    private $texte;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=6, nullable=false)
     */
    private $type = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_heure", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $dateHeure = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $dateFin = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="rv", type="string", length=3, nullable=false)
     */
    private $rv = '';

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=6, nullable=false)
     */
    private $statut = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="id_auteur", type="bigint", nullable=false)
     */
    private $idAuteur = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="destinataires", type="text", length=65535, nullable=false)
     */
    private $destinataires;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="maj", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $maj = 'CURRENT_TIMESTAMP';

    public function getIdMessage(): ?string
    {
        return $this->idMessage;
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

    public function getTexte(): ?string
    {
        return $this->texte;
    }

    public function setTexte(string $texte): self
    {
        $this->texte = $texte;

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

    public function getDateHeure(): ?\DateTimeInterface
    {
        return $this->dateHeure;
    }

    public function setDateHeure(\DateTimeInterface $dateHeure): self
    {
        $this->dateHeure = $dateHeure;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getRv(): ?string
    {
        return $this->rv;
    }

    public function setRv(string $rv): self
    {
        $this->rv = $rv;

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

    public function getIdAuteur(): ?string
    {
        return $this->idAuteur;
    }

    public function setIdAuteur(string $idAuteur): self
    {
        $this->idAuteur = $idAuteur;

        return $this;
    }

    public function getDestinataires(): ?string
    {
        return $this->destinataires;
    }

    public function setDestinataires(string $destinataires): self
    {
        $this->destinataires = $destinataires;

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
