<?php

namespace App\Entity;

use App\Repository\CafeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CafeRepository::class)]
class Cafe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomcafe = null;

    #[ORM\Column(length: 255)]
    private ?string $prix = null;

    #[ORM\Column(length: 255)]
    private ?string $paysorigine = null;

    #[ORM\Column(length: 255)]
    private ?string $descripition = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomcafe(): ?string
    {
        return $this->nomcafe;
    }

    public function setNomcafe(string $nomcafe): static
    {
        $this->nomcafe = $nomcafe;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getPaysorigine(): ?string
    {
        return $this->paysorigine;
    }

    public function setPaysorigine(string $paysorigine): static
    {
        $this->paysorigine = $paysorigine;

        return $this;
    }

    public function getDescripition(): ?string
    {
        return $this->descripition;
    }

    public function setDescripition(string $descripition): static
    {
        $this->descripition = $descripition;

        return $this;
    }
}
