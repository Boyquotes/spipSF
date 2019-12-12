<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpipVisites
 *
 * @ORM\Table(name="spip_visites")
 * @ORM\Entity
 */
class SpipVisites
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="visites", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $visites = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="maj", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $maj = 'CURRENT_TIMESTAMP';

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
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
