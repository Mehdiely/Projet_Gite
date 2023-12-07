<?php

namespace App\Entity;

use App\Repository\ServiceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ServiceRepository::class)]
class Service
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $loc_linge = null;

    #[ORM\Column(nullable: true)]
    private ?int $prix_loc_linge = null;

    #[ORM\Column]
    private ?bool $menage = null;

    #[ORM\Column(nullable: true)]
    private ?int $prix_menage = null;

    #[ORM\Column]
    private ?bool $internet = null;

    #[ORM\Column(nullable: true)]
    private ?int $prix_internet = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Gite $id_giteS = null;

    #[ORM\Column]
    private ?bool $Animaux = null;

    #[ORM\Column(nullable: true)]
    private ?int $animaux_prix = null;

  

  
    public function getId(): ?int
    {
        return $this->id;
    }

    public function isLocLinge(): ?bool
    {
        return $this->loc_linge;
    }

    public function setLocLinge(bool $loc_linge): static
    {
        $this->loc_linge = $loc_linge;

        return $this;
    }

    public function getPrixLocLinge(): ?int
    {
        return $this->prix_loc_linge;
    }

    public function setPrixLocLinge(?int $prix_loc_linge): static
    {
        $this->prix_loc_linge = $prix_loc_linge;

        return $this;
    }

    public function isMenage(): ?bool
    {
        return $this->menage;
    }

    public function setMenage(bool $menage): static
    {
        $this->menage = $menage;

        return $this;
    }

    public function getPrixMenage(): ?int
    {
        return $this->prix_menage;
    }

    public function setPrixMenage(?int $prix_menage): static
    {
        $this->prix_menage = $prix_menage;

        return $this;
    }

    public function isInternet(): ?bool
    {
        return $this->internet;
    }

    public function setInternet(bool $internet): static
    {
        $this->internet = $internet;

        return $this;
    }

    public function getPrixInternet(): ?int
    {
        return $this->prix_internet;
    }

    public function setPrixInternet(?int $prix_internet): static
    {
        $this->prix_internet = $prix_internet;

        return $this;
    }

    public function getIdGiteS(): ?Gite
    {
        return $this->id_giteS;
    }

    public function setIdGiteS(Gite $id_giteS): static
    {
        $this->id_giteS = $id_giteS;

        return $this;
    }

    public function isAnimaux(): ?bool
    {
        return $this->Animaux;
    }

    public function setAnimaux(bool $Animaux): static
    {
        $this->Animaux = $Animaux;

        return $this;
    }

    public function getAnimauxPrix(): ?int
    {
        return $this->animaux_prix;
    }

    public function setAnimauxPrix(?int $animaux_prix): static
    {
        $this->animaux_prix = $animaux_prix;

        return $this;
    }

}
