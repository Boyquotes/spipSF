<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpipJobsLiens
 *
 * @ORM\Table(name="spip_jobs_liens", indexes={@ORM\Index(name="id_job", columns={"id_job"})})
 * @ORM\Entity
 */
class SpipJobsLiens
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_job", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idJob = '0';

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

    public function getIdJob(): ?string
    {
        return $this->idJob;
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
