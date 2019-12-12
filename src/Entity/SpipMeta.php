<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpipMeta
 *
 * @ORM\Table(name="spip_meta")
 * @ORM\Entity
 */
class SpipMeta
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="valeur", type="text", length=65535, nullable=true)
     */
    private $valeur;

    /**
     * @var string
     *
     * @ORM\Column(name="impt", type="string", length=255, nullable=false, options={"default"="oui"})
     */
    private $impt = 'oui';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="maj", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $maj = 'CURRENT_TIMESTAMP';

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function getValeur(): ?string
    {
        return $this->valeur;
    }

    public function setValeur(?string $valeur): self
    {
        $this->valeur = $valeur;

        return $this;
    }

    public function getImpt(): ?string
    {
        return $this->impt;
    }

    public function setImpt(string $impt): self
    {
        $this->impt = $impt;

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
