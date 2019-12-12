<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpipDocumentsLiens
 *
 * @ORM\Table(name="spip_documents_liens", indexes={@ORM\Index(name="id_document", columns={"id_document"}), @ORM\Index(name="id_objet", columns={"id_objet"}), @ORM\Index(name="objet", columns={"objet"})})
 * @ORM\Entity
 */
class SpipDocumentsLiens
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_document", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idDocument = '0';

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
     * @ORM\Column(name="vu", type="string", length=255, nullable=false, options={"default"="non"})
     */
    private $vu = 'non';

    /**
     * @var int
     *
     * @ORM\Column(name="rang_lien", type="integer", nullable=false)
     */
    private $rangLien = '0';

    public function getIdDocument(): ?string
    {
        return $this->idDocument;
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

    public function getRangLien(): ?int
    {
        return $this->rangLien;
    }

    public function setRangLien(int $rangLien): self
    {
        $this->rangLien = $rangLien;

        return $this;
    }


}
