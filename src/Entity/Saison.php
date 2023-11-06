<?php

namespace App\Entity;

use App\Repository\SaisonRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SaisonRepository::class)]
class Saison
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $numsaison = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumsaison(): ?string
    {
        return $this->numsaison;
    }

    public function setNumsaison(string $numsaison): static
    {
        $this->numsaison = $numsaison;

        return $this;
    }
}
