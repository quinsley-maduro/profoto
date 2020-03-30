<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FactuurRepository")
 */
class Factuur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Klant")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Klant_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Factuurdatum;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Vervaldatum;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Inzakeopdracht;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Korting;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKlantId(): ?Klant
    {
        return $this->Klant_id;
    }

    public function setKlantId(?Klant $Klant_id): self
    {
        $this->Klant_id = $Klant_id;

        return $this;
    }

    public function getFactuurdatum(): ?string
    {
        return $this->Factuurdatum;
    }

    public function setFactuurdatum(string $Factuurdatum): self
    {
        $this->Factuurdatum = $Factuurdatum;

        return $this;
    }

    public function getVervaldatum(): ?string
    {
        return $this->Vervaldatum;
    }

    public function setVervaldatum(string $Vervaldatum): self
    {
        $this->Vervaldatum = $Vervaldatum;

        return $this;
    }

    public function getInzakeopdracht(): ?string
    {
        return $this->Inzakeopdracht;
    }

    public function setInzakeopdracht(string $Inzakeopdracht): self
    {
        $this->Inzakeopdracht = $Inzakeopdracht;

        return $this;
    }

    public function getKorting(): ?string
    {
        return $this->Korting;
    }

    public function setKorting(string $Korting): self
    {
        $this->Korting = $Korting;

        return $this;
    }
}
