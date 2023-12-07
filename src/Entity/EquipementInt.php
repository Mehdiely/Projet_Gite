<?php

namespace App\Entity;

use App\Repository\EquipementIntRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EquipementIntRepository::class)]
class EquipementInt
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $Lave_vaiss = null;

    #[ORM\Column(nullable: true)]
    private ?int $lave_vaiss_prix = null;

    #[ORM\Column]
    private ?bool $lave_linge = null;

    #[ORM\Column(nullable: true)]
    private ?int $lave_linge_prix = null;

    #[ORM\Column]
    private ?bool $climatisation = null;

    #[ORM\Column(nullable: true)]
    private ?int $climatisation_prix = null;

    #[ORM\Column]
    private ?bool $tele = null;

    #[ORM\Column(nullable: true)]
    private ?int $tele_prix = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Gite $gite_idEI = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isLaveVaiss(): ?bool
    {
        return $this->Lave_vaiss;
    }

    public function setLaveVaiss(bool $Lave_vaiss): static
    {
        $this->Lave_vaiss = $Lave_vaiss;

        return $this;
    }

    public function getLaveVaissPrix(): ?int
    {
        return $this->lave_vaiss_prix;
    }

    public function setLaveVaissPrix(?int $lave_vaiss_prix): static
    {
        $this->lave_vaiss_prix = $lave_vaiss_prix;

        return $this;
    }

    public function isLaveLinge(): ?bool
    {
        return $this->lave_linge;
    }

    public function setLaveLinge(bool $lave_linge): static
    {
        $this->lave_linge = $lave_linge;

        return $this;
    }

    public function getLaveLingePrix(): ?int
    {
        return $this->lave_linge_prix;
    }

    public function setLaveLingePrix(?int $lave_linge_prix): static
    {
        $this->lave_linge_prix = $lave_linge_prix;

        return $this;
    }

    public function isClimatisation(): ?bool
    {
        return $this->climatisation;
    }

    public function setClimatisation(bool $climatisation): static
    {
        $this->climatisation = $climatisation;

        return $this;
    }

    public function getClimatisationPrix(): ?int
    {
        return $this->climatisation_prix;
    }

    public function setClimatisationPrix(?int $climatisation_prix): static
    {
        $this->climatisation_prix = $climatisation_prix;

        return $this;
    }

    public function isTele(): ?bool
    {
        return $this->tele;
    }

    public function setTele(bool $tele): static
    {
        $this->tele = $tele;

        return $this;
    }

    public function getTelePrix(): ?int
    {
        return $this->tele_prix;
    }

    public function setTelePrix(?int $tele_prix): static
    {
        $this->tele_prix = $tele_prix;

        return $this;
    }

    public function getGiteIdEI(): ?Gite
    {
        return $this->gite_idEI;
    }

    public function setGiteIdEI(Gite $gite_idEI): static
    {
        $this->gite_idEI = $gite_idEI;

        return $this;
    }
}
