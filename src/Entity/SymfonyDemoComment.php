<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SymfonyDemoComment
 *
 * @ORM\Table(name="symfony_demo_comment", indexes={@ORM\Index(name="IDX_53AD8F83F675F31B", columns={"author_id"}), @ORM\Index(name="IDX_53AD8F834B89032C", columns={"post_id"})})
 * @ORM\Entity
 */
class SymfonyDemoComment
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
     * @ORM\Column(name="content", type="text", length=0, nullable=false)
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="published_at", type="datetime", nullable=false)
     */
    private $publishedAt;

    /**
     * @var \SymfonyDemoPost
     *
     * @ORM\ManyToOne(targetEntity="SymfonyDemoPost")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="post_id", referencedColumnName="id")
     * })
     */
    private $post;

    /**
     * @var \SymfonyDemoUser
     *
     * @ORM\ManyToOne(targetEntity="SymfonyDemoUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     * })
     */
    private $author;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getPublishedAt(): ?\DateTimeInterface
    {
        return $this->publishedAt;
    }

    public function setPublishedAt(\DateTimeInterface $publishedAt): self
    {
        $this->publishedAt = $publishedAt;

        return $this;
    }

    public function getPost(): ?SymfonyDemoPost
    {
        return $this->post;
    }

    public function setPost(?SymfonyDemoPost $post): self
    {
        $this->post = $post;

        return $this;
    }

    public function getAuthor(): ?SymfonyDemoUser
    {
        return $this->author;
    }

    public function setAuthor(?SymfonyDemoUser $author): self
    {
        $this->author = $author;

        return $this;
    }


}
