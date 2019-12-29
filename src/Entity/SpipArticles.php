<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * SpipArticles
 *
 * @ApiResource(
 * collectionOperations={"get"},
 * itemOperations={"get"}
 * )
 * @ORM\Table(name="spip_articles", indexes={@ORM\Index(name="lang", columns={"lang"}), @ORM\Index(name="id_trad", columns={"id_trad"}), @ORM\Index(name="id_secteur", columns={"id_secteur"}), @ORM\Index(name="id_article", columns={"id_article"}), @ORM\Index(name="statut", columns={"statut", "date"})})
 * @ORM\Entity
 */
class SpipArticles
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_article", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="surtitre", type="text", length=65535, nullable=false)
     */
    private $surtitre;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="text", length=65535, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="soustitre", type="text", length=65535, nullable=false)
     */
    private $soustitre;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SpipRubriques", inversedBy="articles")
     * @ORM\JoinColumn(nullable=false, name="id_rubrique", referencedColumnName="id_rubrique")
     */
    private $SpipRubrique;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptif", type="text", length=65535, nullable=false)
     */
    private $descriptif;

    /**
     * @var string
     *
     * @ORM\Column(name="chapo", type="text", length=16777215, nullable=false)
     */
    private $chapo;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text", length=0, nullable=false)
     */
    private $texte;

    /**
     * @var string
     *
     * @ORM\Column(name="ps", type="text", length=16777215, nullable=false)
     */
    private $ps;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $date = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=10, nullable=false)
     */
    private $statut = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="id_secteur", type="bigint", nullable=false)
     */
    private $idSecteur = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="maj", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $maj = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="export", type="string", length=10, nullable=true, options={"default"="oui"})
     */
    private $export = 'oui';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_redac", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $dateRedac = '0000-00-00 00:00:00';

    /**
     * @var int
     *
     * @ORM\Column(name="visites", type="integer", nullable=false)
     */
    private $visites = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="referers", type="integer", nullable=false)
     */
    private $referers = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="popularite", type="float", precision=10, scale=0, nullable=false)
     */
    private $popularite = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="accepter_forum", type="string", length=3, nullable=false, options={"fixed"=true})
     */
    private $accepterForum = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modif", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $dateModif = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="lang", type="string", length=10, nullable=false)
     */
    private $lang = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="langue_choisie", type="string", length=3, nullable=true, options={"default"="non"})
     */
    private $langueChoisie = 'non';

    /**
     * @var int
     *
     * @ORM\Column(name="id_trad", type="bigint", nullable=false)
     */
    private $idTrad = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nom_site", type="text", length=255, nullable=false)
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
     * @ORM\Column(name="virtuel", type="text", length=65535, nullable=false)
     */
    private $virtuel;

//    private $rubrique;

    public function getIdArticle(): ?string
    {
        return $this->idArticle;
    }

    public function getSurtitre(): ?string
    {
        return $this->surtitre;
    }

    public function setSurtitre(string $surtitre): self
    {
        $this->surtitre = $surtitre;

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

    public function getSoustitre(): ?string
    {
        return $this->soustitre;
    }

    public function setSoustitre(string $soustitre): self
    {
        $this->soustitre = $soustitre;

        return $this;
    }
/*
    public function getIdRubrique(): ?string
    {
        return $this->idRubrique;
    }

    public function setIdRubrique(string $idRubrique): self
    {
        $this->idRubrique = $idRubrique;

        return $this;
    }
*/
    public function getDescriptif(): ?string
    {
        return $this->descriptif;
    }

    public function setDescriptif(string $descriptif): self
    {
        $this->descriptif = $descriptif;

        return $this;
    }

    public function getChapo(): ?string
    {
        return $this->chapo;
    }

    public function setChapo(string $chapo): self
    {
        $this->chapo = $chapo;

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

    public function getPs(): ?string
    {
        return $this->ps;
    }

    public function setPs(string $ps): self
    {
        $this->ps = $ps;

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

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

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

    public function getMaj(): ?\DateTimeInterface
    {
        return $this->maj;
    }

    public function setMaj(\DateTimeInterface $maj): self
    {
        $this->maj = $maj;

        return $this;
    }

    public function getExport(): ?string
    {
        return $this->export;
    }

    public function setExport(?string $export): self
    {
        $this->export = $export;

        return $this;
    }

    public function getDateRedac(): ?\DateTimeInterface
    {
        return $this->dateRedac;
    }

    public function setDateRedac(\DateTimeInterface $dateRedac): self
    {
        $this->dateRedac = $dateRedac;

        return $this;
    }

    public function getVisites(): ?int
    {
        return $this->visites;
    }

    public function setVisites(int $visites): self
    {
        $this->visites = $visites;

        return $this;
    }

    public function getReferers(): ?int
    {
        return $this->referers;
    }

    public function setReferers(int $referers): self
    {
        $this->referers = $referers;

        return $this;
    }

    public function getPopularite(): ?float
    {
        return $this->popularite;
    }

    public function setPopularite(float $popularite): self
    {
        $this->popularite = $popularite;

        return $this;
    }

    public function getAccepterForum(): ?string
    {
        return $this->accepterForum;
    }

    public function setAccepterForum(string $accepterForum): self
    {
        $this->accepterForum = $accepterForum;

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

    public function getLang(): ?string
    {
        return $this->lang;
    }

    public function setLang(string $lang): self
    {
        $this->lang = $lang;

        return $this;
    }

    public function getLangueChoisie(): ?string
    {
        return $this->langueChoisie;
    }

    public function setLangueChoisie(?string $langueChoisie): self
    {
        $this->langueChoisie = $langueChoisie;

        return $this;
    }

    public function getIdTrad(): ?string
    {
        return $this->idTrad;
    }

    public function setIdTrad(string $idTrad): self
    {
        $this->idTrad = $idTrad;

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

    public function getVirtuel(): ?string
    {
        return $this->virtuel;
    }

    public function setVirtuel(string $virtuel): self
    {
        $this->virtuel = $virtuel;

        return $this;
    }

    public function getRubrique(): ?SpipRubriques
    {
        return $this->SpipRubrique;
    }

    public function setRubrique(?SpipRubriques $rubrique): self
    {
        $this->SpipRubrique = $rubrique;

        return $this;
    }


}
