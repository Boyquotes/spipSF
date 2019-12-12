<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpipPetitions
 *
 * @ORM\Table(name="spip_petitions", uniqueConstraints={@ORM\UniqueConstraint(name="id_article", columns={"id_article"})})
 * @ORM\Entity
 */
class SpipPetitions
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_petition", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPetition;

    /**
     * @var int
     *
     * @ORM\Column(name="id_article", type="bigint", nullable=false)
     */
    private $idArticle = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="email_unique", type="string", length=3, nullable=false, options={"fixed"=true})
     */
    private $emailUnique = '';

    /**
     * @var string
     *
     * @ORM\Column(name="site_obli", type="string", length=3, nullable=false, options={"fixed"=true})
     */
    private $siteObli = '';

    /**
     * @var string
     *
     * @ORM\Column(name="site_unique", type="string", length=3, nullable=false, options={"fixed"=true})
     */
    private $siteUnique = '';

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=3, nullable=false, options={"fixed"=true})
     */
    private $message = '';

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="text", length=0, nullable=false)
     */
    private $texte;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=10, nullable=false, options={"default"="publie"})
     */
    private $statut = 'publie';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="maj", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $maj = 'CURRENT_TIMESTAMP';

    public function getIdPetition(): ?string
    {
        return $this->idPetition;
    }

    public function getIdArticle(): ?string
    {
        return $this->idArticle;
    }

    public function setIdArticle(string $idArticle): self
    {
        $this->idArticle = $idArticle;

        return $this;
    }

    public function getEmailUnique(): ?string
    {
        return $this->emailUnique;
    }

    public function setEmailUnique(string $emailUnique): self
    {
        $this->emailUnique = $emailUnique;

        return $this;
    }

    public function getSiteObli(): ?string
    {
        return $this->siteObli;
    }

    public function setSiteObli(string $siteObli): self
    {
        $this->siteObli = $siteObli;

        return $this;
    }

    public function getSiteUnique(): ?string
    {
        return $this->siteUnique;
    }

    public function setSiteUnique(string $siteUnique): self
    {
        $this->siteUnique = $siteUnique;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getTexte(): ?string
    {
        return $this->texte;
    }

    public function setTexte(string $texte): self
    {
        $this->texte = $texte;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

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
