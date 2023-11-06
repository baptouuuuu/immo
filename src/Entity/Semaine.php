<?php

namespace App\Entity;

use App\Repository\SemaineRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SemaineRepository::class)]
class Semaine
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $année = null;

    #[ORM\Column(length: 255)]
    private ?string $numsemaine = null;

    #[ORM\Column(length: 255)]
    private ?string $datedébut = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAnnée(): ?string
    {
        return $this->année;
    }

    public function setAnnée(string $année): static
    {
        $this->année = $année;

        return $this;
    }

    public function getNumsemaine(): ?string
    {
        return $this->numsemaine;
    }

    public function setNumsemaine(string $numsemaine): static
    {
        $this->numsemaine = $numsemaine;

        return $this;
    }

    public function getDatedébut(): ?string
    {
        return $this->datedébut;
    }

    public function setDatedébut(string $datedébut): static
    {
        $this->datedébut = $datedébut;

        return $this;
    }
}
