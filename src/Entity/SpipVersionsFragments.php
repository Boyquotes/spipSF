<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpipVersionsFragments
 *
 * @ORM\Table(name="spip_versions_fragments")
 * @ORM\Entity
 */
class SpipVersionsFragments
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_fragment", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idFragment = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="version_min", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $versionMin = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="id_objet", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idObjet;

    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="string", length=25, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $objet = '';

    /**
     * @var int
     *
     * @ORM\Column(name="version_max", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $versionMax = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="compress", type="boolean", nullable=false)
     */
    private $compress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fragment", type="blob", length=0, nullable=true)
     */
    private $fragment;

    public function getIdFragment(): ?int
    {
        return $this->idFragment;
    }

    public function getVersionMin(): ?int
    {
        return $this->versionMin;
    }

    public function getIdObjet(): ?string
    {
        return $this->idObjet;
    }

    public function getObjet(): ?string
    {
        return $this->objet;
    }

    public function getVersionMax(): ?int
    {
        return $this->versionMax;
    }

    public function setVersionMax(int $versionMax): self
    {
        $this->versionMax = $versionMax;

        return $this;
    }

    public function getCompress(): ?bool
    {
        return $this->compress;
    }

    public function setCompress(bool $compress): self
    {
        $this->compress = $compress;

        return $this;
    }

    public function getFragment()
    {
        return $this->fragment;
    }

    public function setFragment($fragment): self
    {
        $this->fragment = $fragment;

        return $this;
    }


}
