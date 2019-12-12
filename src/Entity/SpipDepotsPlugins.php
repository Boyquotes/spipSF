<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpipDepotsPlugins
 *
 * @ORM\Table(name="spip_depots_plugins")
 * @ORM\Entity
 */
class SpipDepotsPlugins
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_depot", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idDepot;

    /**
     * @var int
     *
     * @ORM\Column(name="id_plugin", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idPlugin;

    public function getIdDepot(): ?string
    {
        return $this->idDepot;
    }

    public function getIdPlugin(): ?string
    {
        return $this->idPlugin;
    }


}
