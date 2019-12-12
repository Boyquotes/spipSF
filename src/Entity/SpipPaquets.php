<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpipPaquets
 *
 * @ORM\Table(name="spip_paquets", indexes={@ORM\Index(name="id_plugin", columns={"id_plugin"})})
 * @ORM\Entity
 */
class SpipPaquets
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_paquet", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPaquet;

    /**
     * @var int
     *
     * @ORM\Column(name="id_plugin", type="bigint", nullable=false)
     */
    private $idPlugin;

    /**
     * @var string
     *
     * @ORM\Column(name="prefixe", type="string", length=30, nullable=false)
     */
    private $prefixe = '';

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255, nullable=false)
     */
    private $logo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=24, nullable=false)
     */
    private $version = '';

    /**
     * @var string
     *
     * @ORM\Column(name="version_base", type="string", length=24, nullable=false)
     */
    private $versionBase = '';

    /**
     * @var string
     *
     * @ORM\Column(name="compatibilite_spip", type="string", length=24, nullable=false)
     */
    private $compatibiliteSpip = '';

    /**
     * @var string
     *
     * @ORM\Column(name="branches_spip", type="string", length=255, nullable=false)
     */
    private $branchesSpip = '';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="text", length=65535, nullable=false)
     */
    private $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="credit", type="text", length=65535, nullable=false)
     */
    private $credit;

    /**
     * @var string
     *
     * @ORM\Column(name="licence", type="text", length=65535, nullable=false)
     */
    private $licence;

    /**
     * @var string
     *
     * @ORM\Column(name="copyright", type="text", length=65535, nullable=false)
     */
    private $copyright;

    /**
     * @var string
     *
     * @ORM\Column(name="lien_doc", type="text", length=65535, nullable=false)
     */
    private $lienDoc;

    /**
     * @var string
     *
     * @ORM\Column(name="lien_demo", type="text", length=65535, nullable=false)
     */
    private $lienDemo;

    /**
     * @var string
     *
     * @ORM\Column(name="lien_dev", type="text", length=65535, nullable=false)
     */
    private $lienDev;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=16, nullable=false)
     */
    private $etat = '';

    /**
     * @var int
     *
     * @ORM\Column(name="etatnum", type="integer", nullable=false)
     */
    private $etatnum = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="dependances", type="text", length=65535, nullable=false)
     */
    private $dependances;

    /**
     * @var string
     *
     * @ORM\Column(name="procure", type="text", length=65535, nullable=false)
     */
    private $procure;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_crea", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $dateCrea = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modif", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $dateModif = '0000-00-00 00:00:00';

    /**
     * @var int
     *
     * @ORM\Column(name="id_depot", type="bigint", nullable=false)
     */
    private $idDepot = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nom_archive", type="string", length=255, nullable=false)
     */
    private $nomArchive = '';

    /**
     * @var int
     *
     * @ORM\Column(name="nbo_archive", type="integer", nullable=false)
     */
    private $nboArchive = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="maj_archive", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $majArchive = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="src_archive", type="string", length=255, nullable=false)
     */
    private $srcArchive = '';

    /**
     * @var string
     *
     * @ORM\Column(name="traductions", type="text", length=65535, nullable=false)
     */
    private $traductions;

    /**
     * @var string
     *
     * @ORM\Column(name="actif", type="string", length=3, nullable=false, options={"default"="non"})
     */
    private $actif = 'non';

    /**
     * @var string
     *
     * @ORM\Column(name="installe", type="string", length=3, nullable=false, options={"default"="non"})
     */
    private $installe = 'non';

    /**
     * @var int
     *
     * @ORM\Column(name="recent", type="integer", nullable=false)
     */
    private $recent = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="maj_version", type="string", length=255, nullable=false)
     */
    private $majVersion = '';

    /**
     * @var string
     *
     * @ORM\Column(name="superieur", type="string", length=3, nullable=false, options={"default"="non"})
     */
    private $superieur = 'non';

    /**
     * @var string
     *
     * @ORM\Column(name="obsolete", type="string", length=3, nullable=false, options={"default"="non"})
     */
    private $obsolete = 'non';

    /**
     * @var string
     *
     * @ORM\Column(name="attente", type="string", length=3, nullable=false, options={"default"="non"})
     */
    private $attente = 'non';

    /**
     * @var string
     *
     * @ORM\Column(name="constante", type="string", length=30, nullable=false)
     */
    private $constante = '';

    /**
     * @var string
     *
     * @ORM\Column(name="signature", type="string", length=32, nullable=false)
     */
    private $signature = '';

    public function getIdPaquet(): ?string
    {
        return $this->idPaquet;
    }

    public function getIdPlugin(): ?string
    {
        return $this->idPlugin;
    }

    public function setIdPlugin(string $idPlugin): self
    {
        $this->idPlugin = $idPlugin;

        return $this;
    }

    public function getPrefixe(): ?string
    {
        return $this->prefixe;
    }

    public function setPrefixe(string $prefixe): self
    {
        $this->prefixe = $prefixe;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function getVersionBase(): ?string
    {
        return $this->versionBase;
    }

    public function setVersionBase(string $versionBase): self
    {
        $this->versionBase = $versionBase;

        return $this;
    }

    public function getCompatibiliteSpip(): ?string
    {
        return $this->compatibiliteSpip;
    }

    public function setCompatibiliteSpip(string $compatibiliteSpip): self
    {
        $this->compatibiliteSpip = $compatibiliteSpip;

        return $this;
    }

    public function getBranchesSpip(): ?string
    {
        return $this->branchesSpip;
    }

    public function setBranchesSpip(string $branchesSpip): self
    {
        $this->branchesSpip = $branchesSpip;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

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

    public function getCredit(): ?string
    {
        return $this->credit;
    }

    public function setCredit(string $credit): self
    {
        $this->credit = $credit;

        return $this;
    }

    public function getLicence(): ?string
    {
        return $this->licence;
    }

    public function setLicence(string $licence): self
    {
        $this->licence = $licence;

        return $this;
    }

    public function getCopyright(): ?string
    {
        return $this->copyright;
    }

    public function setCopyright(string $copyright): self
    {
        $this->copyright = $copyright;

        return $this;
    }

    public function getLienDoc(): ?string
    {
        return $this->lienDoc;
    }

    public function setLienDoc(string $lienDoc): self
    {
        $this->lienDoc = $lienDoc;

        return $this;
    }

    public function getLienDemo(): ?string
    {
        return $this->lienDemo;
    }

    public function setLienDemo(string $lienDemo): self
    {
        $this->lienDemo = $lienDemo;

        return $this;
    }

    public function getLienDev(): ?string
    {
        return $this->lienDev;
    }

    public function setLienDev(string $lienDev): self
    {
        $this->lienDev = $lienDev;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getEtatnum(): ?int
    {
        return $this->etatnum;
    }

    public function setEtatnum(int $etatnum): self
    {
        $this->etatnum = $etatnum;

        return $this;
    }

    public function getDependances(): ?string
    {
        return $this->dependances;
    }

    public function setDependances(string $dependances): self
    {
        $this->dependances = $dependances;

        return $this;
    }

    public function getProcure(): ?string
    {
        return $this->procure;
    }

    public function setProcure(string $procure): self
    {
        $this->procure = $procure;

        return $this;
    }

    public function getDateCrea(): ?\DateTimeInterface
    {
        return $this->dateCrea;
    }

    public function setDateCrea(\DateTimeInterface $dateCrea): self
    {
        $this->dateCrea = $dateCrea;

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

    public function getIdDepot(): ?string
    {
        return $this->idDepot;
    }

    public function setIdDepot(string $idDepot): self
    {
        $this->idDepot = $idDepot;

        return $this;
    }

    public function getNomArchive(): ?string
    {
        return $this->nomArchive;
    }

    public function setNomArchive(string $nomArchive): self
    {
        $this->nomArchive = $nomArchive;

        return $this;
    }

    public function getNboArchive(): ?int
    {
        return $this->nboArchive;
    }

    public function setNboArchive(int $nboArchive): self
    {
        $this->nboArchive = $nboArchive;

        return $this;
    }

    public function getMajArchive(): ?\DateTimeInterface
    {
        return $this->majArchive;
    }

    public function setMajArchive(\DateTimeInterface $majArchive): self
    {
        $this->majArchive = $majArchive;

        return $this;
    }

    public function getSrcArchive(): ?string
    {
        return $this->srcArchive;
    }

    public function setSrcArchive(string $srcArchive): self
    {
        $this->srcArchive = $srcArchive;

        return $this;
    }

    public function getTraductions(): ?string
    {
        return $this->traductions;
    }

    public function setTraductions(string $traductions): self
    {
        $this->traductions = $traductions;

        return $this;
    }

    public function getActif(): ?string
    {
        return $this->actif;
    }

    public function setActif(string $actif): self
    {
        $this->actif = $actif;

        return $this;
    }

    public function getInstalle(): ?string
    {
        return $this->installe;
    }

    public function setInstalle(string $installe): self
    {
        $this->installe = $installe;

        return $this;
    }

    public function getRecent(): ?int
    {
        return $this->recent;
    }

    public function setRecent(int $recent): self
    {
        $this->recent = $recent;

        return $this;
    }

    public function getMajVersion(): ?string
    {
        return $this->majVersion;
    }

    public function setMajVersion(string $majVersion): self
    {
        $this->majVersion = $majVersion;

        return $this;
    }

    public function getSuperieur(): ?string
    {
        return $this->superieur;
    }

    public function setSuperieur(string $superieur): self
    {
        $this->superieur = $superieur;

        return $this;
    }

    public function getObsolete(): ?string
    {
        return $this->obsolete;
    }

    public function setObsolete(string $obsolete): self
    {
        $this->obsolete = $obsolete;

        return $this;
    }

    public function getAttente(): ?string
    {
        return $this->attente;
    }

    public function setAttente(string $attente): self
    {
        $this->attente = $attente;

        return $this;
    }

    public function getConstante(): ?string
    {
        return $this->constante;
    }

    public function setConstante(string $constante): self
    {
        $this->constante = $constante;

        return $this;
    }

    public function getSignature(): ?string
    {
        return $this->signature;
    }

    public function setSignature(string $signature): self
    {
        $this->signature = $signature;

        return $this;
    }


}
