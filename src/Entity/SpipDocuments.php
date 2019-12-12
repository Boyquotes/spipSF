<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpipDocuments
 *
 * @ORM\Table(name="spip_documents", indexes={@ORM\Index(name="id_vignette", columns={"id_vignette"}), @ORM\Index(name="mode", columns={"mode"}), @ORM\Index(name="extension", columns={"extension"})})
 * @ORM\Entity
 */
class SpipDocuments
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_document", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDocument;

    /**
     * @var int
     *
     * @ORM\Column(name="id_vignette", type="bigint", nullable=false)
     */
    private $idVignette = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="extension", type="string", length=10, nullable=false)
     */
    private $extension = '';

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="text", length=65535, nullable=false)
     */
    private $titre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $date = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="descriptif", type="text", length=65535, nullable=false)
     */
    private $descriptif;

    /**
     * @var string
     *
     * @ORM\Column(name="fichier", type="text", length=65535, nullable=false)
     */
    private $fichier;

    /**
     * @var int|null
     *
     * @ORM\Column(name="taille", type="bigint", nullable=true)
     */
    private $taille;

    /**
     * @var int|null
     *
     * @ORM\Column(name="largeur", type="integer", nullable=true)
     */
    private $largeur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hauteur", type="integer", nullable=true)
     */
    private $hauteur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duree", type="integer", nullable=true)
     */
    private $duree;

    /**
     * @var string
     *
     * @ORM\Column(name="media", type="string", length=10, nullable=false, options={"default"="file"})
     */
    private $media = 'file';

    /**
     * @var string
     *
     * @ORM\Column(name="mode", type="string", length=10, nullable=false, options={"default"="document"})
     */
    private $mode = 'document';

    /**
     * @var string|null
     *
     * @ORM\Column(name="distant", type="string", length=3, nullable=true, options={"default"="non"})
     */
    private $distant = 'non';

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=10, nullable=false)
     */
    private $statut = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="credits", type="text", length=65535, nullable=false)
     */
    private $credits;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_publication", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $datePublication = '0000-00-00 00:00:00';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="brise", type="boolean", nullable=true)
     */
    private $brise = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="maj", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $maj = 'CURRENT_TIMESTAMP';

    public function getIdDocument(): ?string
    {
        return $this->idDocument;
    }

    public function getIdVignette(): ?string
    {
        return $this->idVignette;
    }

    public function setIdVignette(string $idVignette): self
    {
        $this->idVignette = $idVignette;

        return $this;
    }

    public function getExtension(): ?string
    {
        return $this->extension;
    }

    public function setExtension(string $extension): self
    {
        $this->extension = $extension;

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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

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

    public function getFichier(): ?string
    {
        return $this->fichier;
    }

    public function setFichier(string $fichier): self
    {
        $this->fichier = $fichier;

        return $this;
    }

    public function getTaille(): ?string
    {
        return $this->taille;
    }

    public function setTaille(?string $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getLargeur(): ?int
    {
        return $this->largeur;
    }

    public function setLargeur(?int $largeur): self
    {
        $this->largeur = $largeur;

        return $this;
    }

    public function getHauteur(): ?int
    {
        return $this->hauteur;
    }

    public function setHauteur(?int $hauteur): self
    {
        $this->hauteur = $hauteur;

        return $this;
    }

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(?int $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getMedia(): ?string
    {
        return $this->media;
    }

    public function setMedia(string $media): self
    {
        $this->media = $media;

        return $this;
    }

    public function getMode(): ?string
    {
        return $this->mode;
    }

    public function setMode(string $mode): self
    {
        $this->mode = $mode;

        return $this;
    }

    public function getDistant(): ?string
    {
        return $this->distant;
    }

    public function setDistant(?string $distant): self
    {
        $this->distant = $distant;

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

    public function getCredits(): ?string
    {
        return $this->credits;
    }

    public function setCredits(string $credits): self
    {
        $this->credits = $credits;

        return $this;
    }

    public function getDatePublication(): ?\DateTimeInterface
    {
        return $this->datePublication;
    }

    public function setDatePublication(\DateTimeInterface $datePublication): self
    {
        $this->datePublication = $datePublication;

        return $this;
    }

    public function getBrise(): ?bool
    {
        return $this->brise;
    }

    public function setBrise(?bool $brise): self
    {
        $this->brise = $brise;

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
