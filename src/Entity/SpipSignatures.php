<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpipSignatures
 *
 * @ORM\Table(name="spip_signatures", indexes={@ORM\Index(name="id_petition", columns={"id_petition"}), @ORM\Index(name="statut", columns={"statut"})})
 * @ORM\Entity
 */
class SpipSignatures
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_signature", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSignature;

    /**
     * @var int
     *
     * @ORM\Column(name="id_petition", type="bigint", nullable=false)
     */
    private $idPetition = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_time", type="datetime", nullable=false, options={"default"="0000-00-00 00:00:00"})
     */
    private $dateTime = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="nom_email", type="text", length=65535, nullable=false)
     */
    private $nomEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="ad_email", type="text", length=65535, nullable=false)
     */
    private $adEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_site", type="text", length=65535, nullable=false)
     */
    private $nomSite;

    /**
     * @var string
     *
     * @ORM\Column(name="url_site", type="text", length=65535, nullable=false)
     */
    private $urlSite;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=16777215, nullable=false)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=10, nullable=false)
     */
    private $statut = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="maj", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $maj = 'CURRENT_TIMESTAMP';

    public function getIdSignature(): ?string
    {
        return $this->idSignature;
    }

    public function getIdPetition(): ?string
    {
        return $this->idPetition;
    }

    public function setIdPetition(string $idPetition): self
    {
        $this->idPetition = $idPetition;

        return $this;
    }

    public function getDateTime(): ?\DateTimeInterface
    {
        return $this->dateTime;
    }

    public function setDateTime(\DateTimeInterface $dateTime): self
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    public function getNomEmail(): ?string
    {
        return $this->nomEmail;
    }

    public function setNomEmail(string $nomEmail): self
    {
        $this->nomEmail = $nomEmail;

        return $this;
    }

    public function getAdEmail(): ?string
    {
        return $this->adEmail;
    }

    public function setAdEmail(string $adEmail): self
    {
        $this->adEmail = $adEmail;

        return $this;
    }

    public function getNomSite(): ?string
    {
        return $this->nomSite;
    }

    public function setNomSite(string $nomSite): self
    {
        $this->nomSite = $nomSite;

        return $this;
    }

    public function getUrlSite(): ?string
    {
        return $this->urlSite;
    }

    public function setUrlSite(string $urlSite): self
    {
        $this->urlSite = $urlSite;

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
