<?php

namespace App\Entity;

use App\Repository\GiteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GiteRepository::class)]
class Gite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom_gite = null;

    #[ORM\Column(length: 255)]
    private ?string $ville = null;

    #[ORM\Column(length: 255)]
    private ?string $region = null;

    #[ORM\Column(length: 255)]
    private ?string $departement = null;

    #[ORM\Column]
    private ?int $nombre_chambre = null;

    #[ORM\Column]
    private ?int $surface = null;

    #[ORM\Column]
    private ?int $couchage = null;

    #[ORM\Column]
    private ?bool $animaux = null;

    #[ORM\ManyToOne(inversedBy: 'id_giteS')]
    private ?Service $service = null;

    #[ORM\ManyToOne(inversedBy: 'gites')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Proprio $id_proprio ;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomGite(): ?string
    {
        return $this->Nom_gite;
    }

    public function setNomGite(string $Nom_gite): static
    {
        $this->Nom_gite = $Nom_gite;

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

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(string $region): static
    {
        $this->region = $region;

        return $this;
    }

    public function getDepartement(): ?string
    {
        return $this->departement;
    }

    public function setDepartement(string $departement): static
    {
        $this->departement = $departement;

        return $this;
    }

    public function getNombreChambre(): ?int
    {
        return $this->nombre_chambre;
    }

    public function setNombreChambre(int $nombre_chambre): static
    {
        $this->nombre_chambre = $nombre_chambre;

        return $this;
    }

    public function getSurface(): ?int
    {
        return $this->surface;
    }

    public function setSurface(int $surface): static
    {
        $this->surface = $surface;

        return $this;
    }

    public function getCouchage(): ?int
    {
        return $this->couchage;
    }

    public function setCouchage(int $couchage): static
    {
        $this->couchage = $couchage;

        return $this;
    }

    public function isAnimaux(): ?bool
    {
        return $this->animaux;
    }

    public function setAnimaux(bool $animaux): static
    {
        $this->animaux = $animaux;

        return $this;
    }

    public function getService(): ?Service
    {
        return $this->service;
    }

    public function setService(?Service $service): static
    {
        $this->service = $service;

        return $this;
    }

    public function getIdProprio(): ?Proprio
    {
        return $this->id_proprio;
    }

    public function setIdProprio( $id_proprio): static
    {
        $this->id_proprio = $id_proprio;

        return $this;
    }
}
