<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpipTypesDocuments
 *
 * @ORM\Table(name="spip_types_documents", indexes={@ORM\Index(name="inclus", columns={"inclus"})})
 * @ORM\Entity
 */
class SpipTypesDocuments
{
    /**
     * @var string
     *
     * @ORM\Column(name="extension", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $extension = '';

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="text", length=65535, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptif", type="text", length=65535, nullable=false)
     */
    private $descriptif;

    /**
     * @var string
     *
     * @ORM\Column(name="mime_type", type="string", length=100, nullable=false)
     */
    private $mimeType = '';

    /**
     * @var string
     *
     * @ORM\Column(name="inclus", type="string", length=255, nullable=false, options={"default"="non"})
     */
    private $inclus = 'non';

    /**
     * @var string
     *
     * @ORM\Column(name="upload", type="string", length=255, nullable=false, options={"default"="oui"})
     */
    private $upload = 'oui';

    /**
     * @var string
     *
     * @ORM\Column(name="media_defaut", type="string", length=10, nullable=false, options={"default"="file"})
     */
    private $mediaDefaut = 'file';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="maj", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $maj = 'CURRENT_TIMESTAMP';

    public function getExtension(): ?string
    {
        return $this->extension;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescriptif(): ?string
    {
        return $this->descriptif;
    }

    public function setDescriptif(string $descriptif): self
    {
        $this->descriptif = $descriptif;

        return $this;
    }

    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    public function setMimeType(string $mimeType): self
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    public function getInclus(): ?string
    {
        return $this->inclus;
    }

    public function setInclus(string $inclus): self
    {
        $this->inclus = $inclus;

        return $this;
    }

    public function getUpload(): ?string
    {
        return $this->upload;
    }

    public function setUpload(string $upload): self
    {
        $this->upload = $upload;

        return $this;
    }

    public function getMediaDefaut(): ?string
    {
        return $this->mediaDefaut;
    }

    public function setMediaDefaut(string $mediaDefaut): self
    {
        $this->mediaDefaut = $mediaDefaut;

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
