<?php

namespace App\Entity;

use App\Repository\RéservationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RéservationRepository::class)]
class Réservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $numréserv = null;

    #[ORM\Column(length: 255)]
    private ?string $dateréserv = null;

    #[ORM\Column(length: 255)]
    private ?string $nomclient = null;

    #[ORM\Column(length: 255)]
    private ?string $prénomclient = null;

    #[ORM\Column(length: 255)]
    private ?string $rueclient = null;

    #[ORM\Column(length: 255)]
    private ?string $cpclient = null;

    #[ORM\Column(length: 255)]
    private ?string $villeclient = null;

    #[ORM\Column(length: 255)]
    private ?string $telclient = null;

    #[ORM\Column(length: 255)]
    private ?string $numchequeacompte = null;

    #[ORM\Column(length: 255)]
    private ?string $montantacompte = null;

    #[ORM\Column(length: 255)]
    private ?string $etatréserv = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumréserv(): ?string
    {
        return $this->numréserv;
    }

    public function setNumréserv(string $numréserv): static
    {
        $this->numréserv = $numréserv;

        return $this;
    }

    public function getDateréserv(): ?string
    {
        return $this->dateréserv;
    }

    public function setDateréserv(string $dateréserv): static
    {
        $this->dateréserv = $dateréserv;

        return $this;
    }

    public function getNomclient(): ?string
    {
        return $this->nomclient;
    }

    public function setNomclient(string $nomclient): static
    {
        $this->nomclient = $nomclient;

        return $this;
    }

    public function getPrénomclient(): ?string
    {
        return $this->prénomclient;
    }

    public function setPrénomclient(string $prénomclient): static
    {
        $this->prénomclient = $prénomclient;

        return $this;
    }

    public function getRueclient(): ?string
    {
        return $this->rueclient;
    }

    public function setRueclient(string $rueclient): static
    {
        $this->rueclient = $rueclient;

        return $this;
    }

    public function getCpclient(): ?string
    {
        return $this->cpclient;
    }

    public function setCpclient(string $cpclient): static
    {
        $this->cpclient = $cpclient;

        return $this;
    }

    public function getVilleclient(): ?string
    {
        return $this->villeclient;
    }

    public function setVilleclient(string $villeclient): static
    {
        $this->villeclient = $villeclient;

        return $this;
    }

    public function getTelclient(): ?string
    {
        return $this->telclient;
    }

    public function setTelclient(string $telclient): static
    {
        $this->telclient = $telclient;

        return $this;
    }

    public function getNumchequeacompte(): ?string
    {
        return $this->numchequeacompte;
    }

    public function setNumchequeacompte(string $numchequeacompte): static
    {
        $this->numchequeacompte = $numchequeacompte;

        return $this;
    }

    public function getMontantacompte(): ?string
    {
        return $this->montantacompte;
    }

    public function setMontantacompte(string $montantacompte): static
    {
        $this->montantacompte = $montantacompte;

        return $this;
    }

    public function getEtatréserv(): ?string
    {
        return $this->etatréserv;
    }

    public function setEtatréserv(string $etatréserv): static
    {
        $this->etatréserv = $etatréserv;

        return $this;
    }
}
