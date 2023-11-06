<?php

namespace App\Entity;

use App\Repository\ImmeubleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImmeubleRepository::class)]
class Immeuble
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $num_immeuble = null;

    #[ORM\Column(length: 255)]
    private ?string $nomimmeuble = null;

    #[ORM\Column(length: 255)]
    private ?string $rueimmeuble = null;

    #[ORM\Column(length: 255)]
    private ?string $cp = null;

    #[ORM\Column(length: 255)]
    private ?string $ville = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumImmeuble(): ?string
    {
        return $this->num_immeuble;
    }

    public function setNumImmeuble(string $num_immeuble): static
    {
        $this->num_immeuble = $num_immeuble;

        return $this;
    }

    public function getNomimmeuble(): ?string
    {
        return $this->nomimmeuble;
    }

    public function setNomimmeuble(string $nomimmeuble): static
    {
        $this->nomimmeuble = $nomimmeuble;

        return $this;
    }

    public function getRueimmeuble(): ?string
    {
        return $this->rueimmeuble;
    }

    public function setRueimmeuble(string $rueimmeuble): static
    {
        $this->rueimmeuble = $rueimmeuble;

        return $this;
    }

    public function getCp(): ?string
    {
        return $this->cp;
    }

    public function setCp(string $cp): static
    {
        $this->cp = $cp;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }
}
