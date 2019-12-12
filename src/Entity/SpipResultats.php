<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpipResultats
 *
 * @ORM\Table(name="spip_resultats")
 * @ORM\Entity
 */
class SpipResultats
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="recherche", type="string", length=16, nullable=false, options={"fixed"=true})
     */
    private $recherche = '';

    /**
     * @var int
     *
     * @ORM\Column(name="points", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $points = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="table_objet", type="string", length=30, nullable=false)
     */
    private $tableObjet = '';

    /**
     * @var string
     *
     * @ORM\Column(name="serveur", type="string", length=16, nullable=false, options={"fixed"=true})
     */
    private $serveur = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="maj", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $maj = 'CURRENT_TIMESTAMP';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRecherche(): ?string
    {
        return $this->recherche;
    }

    public function setRecherche(string $recherche): self
    {
        $this->recherche = $recherche;

        return $this;
    }

    public function getPoints(): ?int
    {
        return $this->points;
    }

    public function setPoints(int $points): self
    {
        $this->points = $points;

        return $this;
    }

    public function getTableObjet(): ?string
    {
        return $this->tableObjet;
    }

    public function setTableObjet(string $tableObjet): self
    {
        $this->tableObjet = $tableObjet;

        return $this;
    }

    public function getServeur(): ?string
    {
        return $this->serveur;
    }

    public function setServeur(string $serveur): self
    {
        $this->serveur = $serveur;

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
