<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpipAuteursLiens
 *
 * @ORM\Table(name="spip_auteurs_liens", indexes={@ORM\Index(name="id_auteur", columns={"id_auteur"}), @ORM\Index(name="id_objet", columns={"id_objet"}), @ORM\Index(name="objet", columns={"objet"})})
 * @ORM\Entity
 */
class SpipAuteursLiens
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_auteur", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAuteur = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="id_objet", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idObjet = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="string", length=25, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $objet = '';

    /**
     * @var string
     *
     * @ORM\Column(name="vu", type="string", length=6, nullable=false, options={"default"="non"})
     */
    private $vu = 'non';

    public function getIdAuteur(): ?string
    {
        return $this->idAuteur;
    }

    public function getIdObjet(): ?string
    {
        return $this->idObjet;
    }

    public function getObjet(): ?string
    {
        return $this->objet;
    }

    public function getVu(): ?string
    {
        return $this->vu;
    }

    public function setVu(string $vu): self
    {
        $this->vu = $vu;

        return $this;
    }


}
