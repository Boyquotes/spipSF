<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpipJobs
 *
 * @ORM\Table(name="spip_jobs", indexes={@ORM\Index(name="date", columns={"date"}), @ORM\Index(name="status", columns={"status"})})
 * @ORM\Entity
 */
class SpipJobs
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_job", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idJob;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptif", type="text", length=65535, nullable=false)
     */
    private $descriptif;

    /**
     * @var string
     *
     * @ORM\Column(name="fonction", type="string", length=255, nullable=false)
     */
    private $fonction;

    /**
     * @var string
     *
     * @ORM\Column(name="args", type="blob", length=0, nullable=false)
     */
    private $args;

    /**
     * @var string
     *
     * @ORM\Column(name="md5args", type="string", length=32, nullable=false, options={"fixed"=true})
     */
    private $md5args = '';

    /**
     * @var string
     *
     * @ORM\Column(name="inclure", type="string", length=255, nullable=false)
     */
    private $inclure;

    /**
     * @var int
     *
     * @ORM\Column(name="priorite", type="smallint", nullable=false)
     */
    private $priorite = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $date = '0000-00-00 00:00:00';

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=false, options={"default"="1"})
     */
    private $status = '1';

    public function getIdJob(): ?string
    {
        return $this->idJob;
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

    public function getFonction(): ?string
    {
        return $this->fonction;
    }

    public function setFonction(string $fonction): self
    {
        $this->fonction = $fonction;

        return $this;
    }

    public function getArgs()
    {
        return $this->args;
    }

    public function setArgs($args): self
    {
        $this->args = $args;

        return $this;
    }

    public function getMd5args(): ?string
    {
        return $this->md5args;
    }

    public function setMd5args(string $md5args): self
    {
        $this->md5args = $md5args;

        return $this;
    }

    public function getInclure(): ?string
    {
        return $this->inclure;
    }

    public function setInclure(string $inclure): self
    {
        $this->inclure = $inclure;

        return $this;
    }

    public function getPriorite(): ?int
    {
        return $this->priorite;
    }

    public function setPriorite(int $priorite): self
    {
        $this->priorite = $priorite;

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

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }


}
