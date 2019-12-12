<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpipMotsLiens
 *
 * @ORM\Table(name="spip_mots_liens", indexes={@ORM\Index(name="id_mot", columns={"id_mot"}), @ORM\Index(name="id_objet", columns={"id_objet"}), @ORM\Index(name="objet", columns={"objet"})})
 * @ORM\Entity
 */
class SpipMotsLiens
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_mot", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idMot = '0';

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

    public function getIdMot(): ?string
    {
        return $this->idMot;
    }

    public function getIdObjet(): ?string
    {
        return $this->idObjet;
    }

    public function getObjet(): ?string
    {
        return $this->objet;
    }


}
