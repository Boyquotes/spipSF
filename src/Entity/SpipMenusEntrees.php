<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpipMenusEntrees
 *
 * @ORM\Table(name="spip_menus_entrees", indexes={@ORM\Index(name="id_menu", columns={"id_menu"})})
 * @ORM\Entity
 */
class SpipMenusEntrees
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_menus_entree", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMenusEntree;

    /**
     * @var int
     *
     * @ORM\Column(name="id_menu", type="bigint", nullable=false)
     */
    private $idMenu;

    /**
     * @var int
     *
     * @ORM\Column(name="rang", type="smallint", nullable=false, options={"default"="1"})
     */
    private $rang = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="type_entree", type="text", length=255, nullable=false)
     */
    private $typeEntree;

    /**
     * @var string
     *
     * @ORM\Column(name="parametres", type="text", length=65535, nullable=false)
     */
    private $parametres;

    public function getIdMenusEntree(): ?string
    {
        return $this->idMenusEntree;
    }

    public function getIdMenu(): ?string
    {
        return $this->idMenu;
    }

    public function setIdMenu(string $idMenu): self
    {
        $this->idMenu = $idMenu;

        return $this;
    }

    public function getRang(): ?int
    {
        return $this->rang;
    }

    public function setRang(int $rang): self
    {
        $this->rang = $rang;

        return $this;
    }

    public function getTypeEntree(): ?string
    {
        return $this->typeEntree;
    }

    public function setTypeEntree(string $typeEntree): self
    {
        $this->typeEntree = $typeEntree;

        return $this;
    }

    public function getParametres(): ?string
    {
        return $this->parametres;
    }

    public function setParametres(string $parametres): self
    {
        $this->parametres = $parametres;

        return $this;
    }


}
