<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * SymfonyDemoTag
 *
 * @ORM\Table(name="symfony_demo_tag")
 * @ORM\Entity
 */
class SymfonyDemoTag
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SymfonyDemoPost", mappedBy="tag")
     */
    private $post;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->post = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|SymfonyDemoPost[]
     */
    public function getPost(): Collection
    {
        return $this->post;
    }

    public function addPost(SymfonyDemoPost $post): self
    {
        if (!$this->post->contains($post)) {
            $this->post[] = $post;
            $post->addTag($this);
        }

        return $this;
    }

    public function removePost(SymfonyDemoPost $post): self
    {
        if ($this->post->contains($post)) {
            $this->post->removeElement($post);
            $post->removeTag($this);
        }

        return $this;
    }

}
