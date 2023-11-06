<?php

namespace App\Entity;

use App\Repository\CatégorieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CatégorieRepository::class)]
class Catégorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $codecatégorie = null;

    #[ORM\Column(length: 255)]
    private ?string $libellécatégorie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodecatégorie(): ?string
    {
        return $this->codecatégorie;
    }

    public function setCodecatégorie(string $codecatégorie): static
    {
        $this->codecatégorie = $codecatégorie;

        return $this;
    }

    public function getLibellécatégorie(): ?string
    {
        return $this->libellécatégorie;
    }

    public function setLibellécatégorie(string $libellécatégorie): static
    {
        $this->libellécatégorie = $libellécatégorie;

        return $this;
    }
}
