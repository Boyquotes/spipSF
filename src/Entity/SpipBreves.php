<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpipBreves
 *
 * @ORM\Table(name="spip_breves", indexes={@ORM\Index(name="id_rubrique", columns={"id_rubrique"})})
 * @ORM\Entity
 */
class SpipBreves
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_breve", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBreve;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_heure", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $dateHeure = '0000-00-00 00:00:00';

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
     * @ORM\Column(name="lien_titre", type="text", length=65535, nullable=false)
     */
    private $lienTitre;

    /**
     * @var string
     *
     * @ORM\Column(name="lien_url", type="text", length=65535, nullable=false)
     */
    private $lienUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=6, nullable=false)
     */
    private $statut = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="id_rubrique", type="bigint", nullable=false)
     */
    private $idRubrique = '0';

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
     * @var \DateTime
     *
     * @ORM\Column(name="maj", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $maj = 'CURRENT_TIMESTAMP';

    public function getIdBreve(): ?string
    {
        return $this->idBreve;
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

    public function getLienTitre(): ?string
    {
        return $this->lienTitre;
    }

    public function setLienTitre(string $lienTitre): self
    {
        $this->lienTitre = $lienTitre;

        return $this;
    }

    public function getLienUrl(): ?string
    {
        return $this->lienUrl;
    }

    public function setLienUrl(string $lienUrl): self
    {
        $this->lienUrl = $lienUrl;

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

    public function getIdRubrique(): ?string
    {
        return $this->idRubrique;
    }

    public function setIdRubrique(string $idRubrique): self
    {
        $this->idRubrique = $idRubrique;

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
