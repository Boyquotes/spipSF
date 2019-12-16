<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpipAuteurs
 *
 * @ORM\Table(name="spip_auteurs", indexes={@ORM\Index(name="login", columns={"login"}), @ORM\Index(name="statut", columns={"statut"}), @ORM\Index(name="en_ligne", columns={"en_ligne"})})
 * @ORM\Entity
 */
class SpipAuteurs
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_auteur", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAuteur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="text", length=65535, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bio", type="text", length=65535, nullable=true)
     */
    private $bio;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="text", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_site", type="text", length=255, nullable=true)
     */
    private $nomSite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url_site", type="text", length=65535, nullable=true)
     */
    private $urlSite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="login", type="string", length=255, nullable=true)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="pass", type="text", length=255, nullable=false)
     */
    private $pass;

    /**
     * @var string|null
     *
     * @ORM\Column(name="low_sec", type="text", length=255, nullable=true)
     */
    private $lowSec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="statut", type="string", length=255, nullable=true)
     */
    private $statut;

    /**
     * @var string|null
     *
     * @ORM\Column(name="webmestre", type="string", length=3, nullable=true, options={"default"="non"})
     */
    private $webmestre = 'non';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="maj", type="datetime", nullable=true)
     */
    private $maj;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pgp", type="text", length=65535, nullable=true)
     */
    private $pgp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="htpass", type="text", length=255, nullable=true)
     */
    private $htpass;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="en_ligne", type="datetime", nullable=true)
     */
    private $enLigne;

    /**
     * @var string|null
     *
     * @ORM\Column(name="alea_actuel", type="text", length=255, nullable=true)
     */
    private $aleaActuel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="alea_futur", type="text", length=255, nullable=true)
     */
    private $aleaFutur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prefs", type="text", length=65535, nullable=true)
     */
    private $prefs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cookie_oubli", type="text", length=255, nullable=true)
     */
    private $cookieOubli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="source", type="string", length=10, nullable=true, options={"default"="spip"})
     */
    private $source = 'spip';

    /**
     * @var string|null
     *
     * @ORM\Column(name="lang", type="string", length=10, nullable=true)
     */
    private $lang;

    /**
     * @var string|null
     *
     * @ORM\Column(name="imessage", type="string", length=3, nullable=true)
     */
    private $imessage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="messagerie", type="string", length=3, nullable=true)
     */
    private $messagerie;

    public function getIdAuteur(): ?string
    {
        return $this->idAuteur;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getBio(): ?string
    {
        return $this->bio;
    }

    public function setBio(?string $bio): self
    {
        $this->bio = $bio;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getNomSite(): ?string
    {
        return $this->nomSite;
    }

    public function setNomSite(?string $nomSite): self
    {
        $this->nomSite = $nomSite;

        return $this;
    }

    public function getUrlSite(): ?string
    {
        return $this->urlSite;
    }

    public function setUrlSite(?string $urlSite): self
    {
        $this->urlSite = $urlSite;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(?string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getPass(): ?string
    {
        return $this->pass;
    }

    public function setPass(string $pass): self
    {
        $this->pass = $pass;

        return $this;
    }

    public function getLowSec(): ?string
    {
        return $this->lowSec;
    }

    public function setLowSec(?string $lowSec): self
    {
        $this->lowSec = $lowSec;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getWebmestre(): ?string
    {
        return $this->webmestre;
    }

    public function setWebmestre(?string $webmestre): self
    {
        $this->webmestre = $webmestre;

        return $this;
    }

    public function getMaj(): ?\DateTimeInterface
    {
        return $this->maj;
    }

    public function setMaj(?\DateTimeInterface $maj): self
    {
        $this->maj = $maj;

        return $this;
    }

    public function getPgp(): ?string
    {
        return $this->pgp;
    }

    public function setPgp(?string $pgp): self
    {
        $this->pgp = $pgp;

        return $this;
    }

    public function getHtpass(): ?string
    {
        return $this->htpass;
    }

    public function setHtpass(?string $htpass): self
    {
        $this->htpass = $htpass;

        return $this;
    }

    public function getEnLigne(): ?\DateTimeInterface
    {
        return $this->enLigne;
    }

    public function setEnLigne(?\DateTimeInterface $enLigne): self
    {
        $this->enLigne = $enLigne;

        return $this;
    }

    public function getAleaActuel(): ?string
    {
        return $this->aleaActuel;
    }

    public function setAleaActuel(?string $aleaActuel): self
    {
        $this->aleaActuel = $aleaActuel;

        return $this;
    }

    public function getAleaFutur(): ?string
    {
        return $this->aleaFutur;
    }

    public function setAleaFutur(?string $aleaFutur): self
    {
        $this->aleaFutur = $aleaFutur;

        return $this;
    }

    public function getPrefs(): ?string
    {
        return $this->prefs;
    }

    public function setPrefs(?string $prefs): self
    {
        $this->prefs = $prefs;

        return $this;
    }

    public function getCookieOubli(): ?string
    {
        return $this->cookieOubli;
    }

    public function setCookieOubli(?string $cookieOubli): self
    {
        $this->cookieOubli = $cookieOubli;

        return $this;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function getLang(): ?string
    {
        return $this->lang;
    }

    public function setLang(?string $lang): self
    {
        $this->lang = $lang;

        return $this;
    }

    public function getImessage(): ?string
    {
        return $this->imessage;
    }

    public function setImessage(?string $imessage): self
    {
        $this->imessage = $imessage;

        return $this;
    }

    public function getMessagerie(): ?string
    {
        return $this->messagerie;
    }

    public function setMessagerie(?string $messagerie): self
    {
        $this->messagerie = $messagerie;

        return $this;
    }


}
