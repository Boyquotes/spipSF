<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpipForum
 *
 * @ORM\Table(name="spip_forum", indexes={@ORM\Index(name="id_thread", columns={"id_thread"}), @ORM\Index(name="optimal", columns={"statut", "id_parent", "id_objet", "objet", "date_heure"}), @ORM\Index(name="id_parent", columns={"id_parent"}), @ORM\Index(name="id_auteur", columns={"id_auteur"})})
 * @ORM\Entity
 */
class SpipForum
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_forum", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idForum;

    /**
     * @var int
     *
     * @ORM\Column(name="id_objet", type="bigint", nullable=false)
     */
    private $idObjet = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="string", length=25, nullable=false)
     */
    private $objet = '';

    /**
     * @var int
     *
     * @ORM\Column(name="id_parent", type="bigint", nullable=false)
     */
    private $idParent = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="id_thread", type="bigint", nullable=false)
     */
    private $idThread = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_heure", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $dateHeure = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_thread", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $dateThread = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="text", length=65535, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text", length=16777215, nullable=false)
     */
    private $texte;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="text", length=65535, nullable=false)
     */
    private $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="email_auteur", type="text", length=65535, nullable=false)
     */
    private $emailAuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_site", type="text", length=65535, nullable=false)
     */
    private $nomSite;

    /**
     * @var string
     *
     * @ORM\Column(name="url_site", type="text", length=65535, nullable=false)
     */
    private $urlSite;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=8, nullable=false)
     */
    private $statut = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=40, nullable=false)
     */
    private $ip = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="maj", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $maj = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="id_auteur", type="bigint", nullable=false)
     */
    private $idAuteur = '0';

    public function getIdForum(): ?string
    {
        return $this->idForum;
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

    public function getObjet(): ?string
    {
        return $this->objet;
    }

    public function setObjet(string $objet): self
    {
        $this->objet = $objet;

        return $this;
    }

    public function getIdParent(): ?string
    {
        return $this->idParent;
    }

    public function setIdParent(string $idParent): self
    {
        $this->idParent = $idParent;

        return $this;
    }

    public function getIdThread(): ?string
    {
        return $this->idThread;
    }

    public function setIdThread(string $idThread): self
    {
        $this->idThread = $idThread;

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

    public function getDateThread(): ?\DateTimeInterface
    {
        return $this->dateThread;
    }

    public function setDateThread(\DateTimeInterface $dateThread): self
    {
        $this->dateThread = $dateThread;

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

    public function getTexte(): ?string
    {
        return $this->texte;
    }

    public function setTexte(string $texte): self
    {
        $this->texte = $texte;

        return $this;
    }

    public function getAuteur(): ?string
    {
        return $this->auteur;
    }

    public function setAuteur(string $auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }

    public function getEmailAuteur(): ?string
    {
        return $this->emailAuteur;
    }

    public function setEmailAuteur(string $emailAuteur): self
    {
        $this->emailAuteur = $emailAuteur;

        return $this;
    }

    public function getNomSite(): ?string
    {
        return $this->nomSite;
    }

    public function setNomSite(string $nomSite): self
    {
        $this->nomSite = $nomSite;

        return $this;
    }

    public function getUrlSite(): ?string
    {
        return $this->urlSite;
    }

    public function setUrlSite(string $urlSite): self
    {
        $this->urlSite = $urlSite;

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

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(string $ip): self
    {
        $this->ip = $ip;

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

    public function getIdAuteur(): ?string
    {
        return $this->idAuteur;
    }

    public function setIdAuteur(string $idAuteur): self
    {
        $this->idAuteur = $idAuteur;

        return $this;
    }


}
