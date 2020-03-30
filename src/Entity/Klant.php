<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KlantRepository")
 */
class Klant
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Klantnaam;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Btwnummer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Adress;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Plaats;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Postcode;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKlantnaam(): ?string
    {
        return $this->Klantnaam;
    }

    public function setKlantnaam(string $Klantnaam): self
    {
        $this->Klantnaam = $Klantnaam;

        return $this;
    }

    public function getBtwnummer(): ?string
    {
        return $this->Btwnummer;
    }

    public function setBtwnummer(string $Btwnummer): self
    {
        $this->Btwnummer = $Btwnummer;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->Adress;
    }

    public function setAdress(string $Adress): self
    {
        $this->Adress = $Adress;

        return $this;
    }

    public function getPlaats(): ?string
    {
        return $this->Plaats;
    }

    public function setPlaats(string $Plaats): self
    {
        $this->Plaats = $Plaats;

        return $this;
    }

    public function getPostcode(): ?string
    {
        return $this->Postcode;
    }

    public function setPostcode(string $Postcode): self
    {
        $this->Postcode = $Postcode;
    }

    public function __toString()
    {
        return $this->id."". $this->getId();
    }
}
