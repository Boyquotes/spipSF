<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpipReferers
 *
 * @ORM\Table(name="spip_referers")
 * @ORM\Entity
 */
class SpipReferers
{
    /**
     * @var int
     *
     * @ORM\Column(name="referer_md5", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $refererMd5;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="referer", type="string", length=255, nullable=true)
     */
    private $referer;

    /**
     * @var int
     *
     * @ORM\Column(name="visites", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $visites;

    /**
     * @var int
     *
     * @ORM\Column(name="visites_jour", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $visitesJour;

    /**
     * @var int
     *
     * @ORM\Column(name="visites_veille", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $visitesVeille;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="maj", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $maj = 'CURRENT_TIMESTAMP';

    public function getRefererMd5(): ?string
    {
        return $this->refererMd5;
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

    public function getReferer(): ?string
    {
        return $this->referer;
    }

    public function setReferer(?string $referer): self
    {
        $this->referer = $referer;

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

    public function getVisitesJour(): ?int
    {
        return $this->visitesJour;
    }

    public function setVisitesJour(int $visitesJour): self
    {
        $this->visitesJour = $visitesJour;

        return $this;
    }

    public function getVisitesVeille(): ?int
    {
        return $this->visitesVeille;
    }

    public function setVisitesVeille(int $visitesVeille): self
    {
        $this->visitesVeille = $visitesVeille;

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
