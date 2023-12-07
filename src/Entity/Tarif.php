<?php

namespace App\Entity;

use App\Repository\TarifRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TarifRepository::class)]
class Tarif
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $loc_hiver = null;

    #[ORM\Column]
    private ?int $loc_ete = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Gite $id_giteT = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLocHiver(): ?int
    {
        return $this->loc_hiver;
    }

    public function setLocHiver(int $loc_hiver): static
    {
        $this->loc_hiver = $loc_hiver;

        return $this;
    }

    public function getLocEte(): ?int
    {
        return $this->loc_ete;
    }

    public function setLocEte(int $loc_ete): static
    {
        $this->loc_ete = $loc_ete;

        return $this;
    }

    public function getIdGiteT(): ?Gite
    {
        return $this->id_giteT;
    }

    public function setIdGiteT(Gite $id_giteT): static
    {
        $this->id_giteT = $id_giteT;

        return $this;
    }
}
