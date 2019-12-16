<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpipRubriques
 *
 * @ORM\Table(name="spip_rubriques", indexes={@ORM\Index(name="id_parent", columns={"id_parent"}), @ORM\Index(name="lang", columns={"lang"})})
 * @ORM\Entity
 */
class SpipRubriques
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_rubrique", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRubrique;

    /**
     * @var int
     *
     * @ORM\Column(name="id_parent", type="bigint", nullable=false)
     */
    private $idParent = '0';

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
     * @ORM\Column(name="texte", type="text", nullable=false)
     */
    private $texte;

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
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=10, nullable=false)
     */
    private $statut = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

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
     * @var string
     *
     * @ORM\Column(name="statut_tmp", type="string", length=10, nullable=false)
     */
    private $statutTmp = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_tmp", type="datetime", nullable=false)
     */
    private $dateTmp;

    /**
     * @var int
     *
     * @ORM\Column(name="profondeur", type="smallint", nullable=false)
     */
    private $profondeur = '0';

    public function getIdRubrique(): ?string
    {
        return $this->idRubrique;
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

    public function getStatutTmp(): ?string
    {
        return $this->statutTmp;
    }

    public function setStatutTmp(string $statutTmp): self
    {
        $this->statutTmp = $statutTmp;

        return $this;
    }

    public function getDateTmp(): ?\DateTimeInterface
    {
        return $this->dateTmp;
    }

    public function setDateTmp(\DateTimeInterface $dateTmp): self
    {
        $this->dateTmp = $dateTmp;

        return $this;
    }

    public function getProfondeur(): ?int
    {
        return $this->profondeur;
    }

    public function setProfondeur(int $profondeur): self
    {
        $this->profondeur = $profondeur;

        return $this;
    }


}
