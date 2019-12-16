<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpipSyndic
 *
 * @ORM\Table(name="spip_syndic", indexes={@ORM\Index(name="id_rubrique", columns={"id_rubrique"}), @ORM\Index(name="id_secteur", columns={"id_secteur"}), @ORM\Index(name="statut", columns={"statut", "date_syndic"})})
 * @ORM\Entity
 */
class SpipSyndic
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_syndic", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSyndic;

    /**
     * @var int
     *
     * @ORM\Column(name="id_rubrique", type="bigint", nullable=false)
     */
    private $idRubrique = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="id_secteur", type="bigint", nullable=false)
     */
    private $idSecteur = '0';

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
     * @ORM\Column(name="url_syndic", type="text", length=65535, nullable=false)
     */
    private $urlSyndic;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptif", type="text", length=65535, nullable=false)
     */
    private $descriptif;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="maj", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $maj = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="syndication", type="string", length=3, nullable=false)
     */
    private $syndication = '';

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=10, nullable=false)
     */
    private $statut = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $date = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_syndic", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $dateSyndic = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_index", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $dateIndex = '0000-00-00 00:00:00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="moderation", type="string", length=3, nullable=true, options={"default"="non"})
     */
    private $moderation = 'non';

    /**
     * @var string|null
     *
     * @ORM\Column(name="miroir", type="string", length=3, nullable=true, options={"default"="non"})
     */
    private $miroir = 'non';

    /**
     * @var string|null
     *
     * @ORM\Column(name="oubli", type="string", length=3, nullable=true, options={"default"="non"})
     */
    private $oubli = 'non';

    /**
     * @var string|null
     *
     * @ORM\Column(name="resume", type="string", length=3, nullable=true, options={"default"="oui"})
     */
    private $resume = 'oui';

    public function getIdSyndic(): ?string
    {
        return $this->idSyndic;
    }

    public function getIdRubrique(): ?string
    {
        return $this->idRubrique;
    }

    public function setIdRubrique(string $idRubrique): self
    {
        $this->idRubrique = $idRubrique;

        return $this;
    }

    public function getIdSecteur(): ?string
    {
        return $this->idSecteur;
    }

    public function setIdSecteur(string $idSecteur): self
    {
        $this->idSecteur = $idSecteur;

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

    public function getUrlSyndic(): ?string
    {
        return $this->urlSyndic;
    }

    public function setUrlSyndic(string $urlSyndic): self
    {
        $this->urlSyndic = $urlSyndic;

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

    public function getMaj(): ?\DateTimeInterface
    {
        return $this->maj;
    }

    public function setMaj(\DateTimeInterface $maj): self
    {
        $this->maj = $maj;

        return $this;
    }

    public function getSyndication(): ?string
    {
        return $this->syndication;
    }

    public function setSyndication(string $syndication): self
    {
        $this->syndication = $syndication;

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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getDateSyndic(): ?\DateTimeInterface
    {
        return $this->dateSyndic;
    }

    public function setDateSyndic(\DateTimeInterface $dateSyndic): self
    {
        $this->dateSyndic = $dateSyndic;

        return $this;
    }

    public function getDateIndex(): ?\DateTimeInterface
    {
        return $this->dateIndex;
    }

    public function setDateIndex(\DateTimeInterface $dateIndex): self
    {
        $this->dateIndex = $dateIndex;

        return $this;
    }

    public function getModeration(): ?string
    {
        return $this->moderation;
    }

    public function setModeration(?string $moderation): self
    {
        $this->moderation = $moderation;

        return $this;
    }

    public function getMiroir(): ?string
    {
        return $this->miroir;
    }

    public function setMiroir(?string $miroir): self
    {
        $this->miroir = $miroir;

        return $this;
    }

    public function getOubli(): ?string
    {
        return $this->oubli;
    }

    public function setOubli(?string $oubli): self
    {
        $this->oubli = $oubli;

        return $this;
    }

    public function getResume(): ?string
    {
        return $this->resume;
    }

    public function setResume(?string $resume): self
    {
        $this->resume = $resume;

        return $this;
    }


}
