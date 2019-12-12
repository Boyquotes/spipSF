<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpipDepots
 *
 * @ORM\Table(name="spip_depots")
 * @ORM\Entity
 */
class SpipDepots
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_depot", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDepot;

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
     * @ORM\Column(name="type", type="string", length=10, nullable=false)
     */
    private $type = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url_serveur", type="string", length=255, nullable=false)
     */
    private $urlServeur = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url_brouteur", type="string", length=255, nullable=false)
     */
    private $urlBrouteur = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url_archives", type="string", length=255, nullable=false)
     */
    private $urlArchives = '';

    /**
     * @var string
     *
     * @ORM\Column(name="url_commits", type="string", length=255, nullable=false)
     */
    private $urlCommits = '';

    /**
     * @var string
     *
     * @ORM\Column(name="xml_paquets", type="string", length=255, nullable=false)
     */
    private $xmlPaquets = '';

    /**
     * @var string
     *
     * @ORM\Column(name="sha_paquets", type="string", length=40, nullable=false)
     */
    private $shaPaquets = '';

    /**
     * @var int
     *
     * @ORM\Column(name="nbr_paquets", type="integer", nullable=false)
     */
    private $nbrPaquets = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="nbr_plugins", type="integer", nullable=false)
     */
    private $nbrPlugins = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="nbr_autres", type="integer", nullable=false)
     */
    private $nbrAutres = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="maj", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $maj = 'CURRENT_TIMESTAMP';

    public function getIdDepot(): ?string
    {
        return $this->idDepot;
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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getUrlServeur(): ?string
    {
        return $this->urlServeur;
    }

    public function setUrlServeur(string $urlServeur): self
    {
        $this->urlServeur = $urlServeur;

        return $this;
    }

    public function getUrlBrouteur(): ?string
    {
        return $this->urlBrouteur;
    }

    public function setUrlBrouteur(string $urlBrouteur): self
    {
        $this->urlBrouteur = $urlBrouteur;

        return $this;
    }

    public function getUrlArchives(): ?string
    {
        return $this->urlArchives;
    }

    public function setUrlArchives(string $urlArchives): self
    {
        $this->urlArchives = $urlArchives;

        return $this;
    }

    public function getUrlCommits(): ?string
    {
        return $this->urlCommits;
    }

    public function setUrlCommits(string $urlCommits): self
    {
        $this->urlCommits = $urlCommits;

        return $this;
    }

    public function getXmlPaquets(): ?string
    {
        return $this->xmlPaquets;
    }

    public function setXmlPaquets(string $xmlPaquets): self
    {
        $this->xmlPaquets = $xmlPaquets;

        return $this;
    }

    public function getShaPaquets(): ?string
    {
        return $this->shaPaquets;
    }

    public function setShaPaquets(string $shaPaquets): self
    {
        $this->shaPaquets = $shaPaquets;

        return $this;
    }

    public function getNbrPaquets(): ?int
    {
        return $this->nbrPaquets;
    }

    public function setNbrPaquets(int $nbrPaquets): self
    {
        $this->nbrPaquets = $nbrPaquets;

        return $this;
    }

    public function getNbrPlugins(): ?int
    {
        return $this->nbrPlugins;
    }

    public function setNbrPlugins(int $nbrPlugins): self
    {
        $this->nbrPlugins = $nbrPlugins;

        return $this;
    }

    public function getNbrAutres(): ?int
    {
        return $this->nbrAutres;
    }

    public function setNbrAutres(int $nbrAutres): self
    {
        $this->nbrAutres = $nbrAutres;

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
