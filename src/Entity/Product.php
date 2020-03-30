<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
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
    private $Productomschrijving;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Productbtw;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Productprijs;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductomschrijving(): ?string
    {
        return $this->Productomschrijving;
    }

    public function setProductomschrijving(string $Productomschrijving): self
    {
        $this->Productomschrijving = $Productomschrijving;

        return $this;
    }

    public function getProductbtw(): ?string
    {
        return $this->Productbtw;
    }

    public function setProductbtw(string $Productbtw): self
    {
        $this->Productbtw = $Productbtw;

        return $this;
    }

    public function getProductprijs(): ?string
    {
        return $this->Productprijs;
    }

    public function setProductprijs(string $Productprijs): self
    {
        $this->Productprijs = $Productprijs;

        return $this;
    }
}
