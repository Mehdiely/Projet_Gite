<?php

namespace App\Entity;


use App\Repository\EquipementExtRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EquipementExtRepository::class)]
class EquipementExt
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $terasse = null;

    #[ORM\Column(nullable: true)]
    private ?int $terasse_prix = null;

    #[ORM\Column]
    private ?bool $bbq = null;

    #[ORM\Column(nullable: true)]
    private ?int $bbq_prix = null;

    #[ORM\Column]
    private ?bool $piscine_priv = null;

    #[ORM\Column(nullable: true)]
    private ?int $piscine_priv_prix = null;

    #[ORM\Column]
    private ?bool $piscine_part = null;

    #[ORM\Column(nullable: true)]
    private ?int $piscine_part_prix = null;

    #[ORM\Column]
    private ?bool $tennis = null;

    #[ORM\Column(nullable: true)]
    private ?int $tennis_prix = null;

    #[ORM\Column]
    private ?bool $pingpong = null;

    #[ORM\Column(nullable: true)]
    private ?int $pingpong_prix = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Gite $id_giteEEX = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isTerasse(): ?bool
    {
        return $this->terasse;
    }

    public function setTerasse(bool $terasse): static
    {
        $this->terasse = $terasse;

        return $this;
    }

    public function getTerassePrix(): ?int
    {
        return $this->terasse_prix;
    }

    public function setTerassePrix(?int $terasse_prix): static
    {
        $this->terasse_prix = $terasse_prix;

        return $this;
    }

    public function isBbq(): ?bool
    {
        return $this->bbq;
    }

    public function setBbq(bool $bbq): static
    {
        $this->bbq = $bbq;

        return $this;
    }

    public function getBbqPrix(): ?int
    {
        return $this->bbq_prix;
    }

    public function setBbqPrix(?int $bbq_prix): static
    {
        $this->bbq_prix = $bbq_prix;

        return $this;
    }

    public function isPiscinePriv(): ?bool
    {
        return $this->piscine_priv;
    }

    public function setPiscinePriv(bool $piscine_priv): static
    {
        $this->piscine_priv = $piscine_priv;

        return $this;
    }

    public function getPiscinePrivPrix(): ?int
    {
        return $this->piscine_priv_prix;
    }

    public function setPiscinePrivPrix(?int $piscine_priv_prix): static
    {
        $this->piscine_priv_prix = $piscine_priv_prix;

        return $this;
    }

    public function isPiscinePart(): ?bool
    {
        return $this->piscine_part;
    }

    public function setPiscinePart(bool $piscine_part): static
    {
        $this->piscine_part = $piscine_part;

        return $this;
    }

    public function getPiscinePartPrix(): ?int
    {
        return $this->piscine_part_prix;
    }

    public function setPiscinePartPrix(?int $piscine_part_prix): static
    {
        $this->piscine_part_prix = $piscine_part_prix;

        return $this;
    }

    public function isTennis(): ?bool
    {
        return $this->tennis;
    }

    public function setTennis(bool $tennis): static
    {
        $this->tennis = $tennis;

        return $this;
    }

    public function getTennisPrix(): ?int
    {
        return $this->tennis_prix;
    }

    public function setTennisPrix(?int $tennis_prix): static
    {
        $this->tennis_prix = $tennis_prix;

        return $this;
    }

    public function isPingpong(): ?bool
    {
        return $this->pingpong;
    }

    public function setPingpong(bool $pingpong): static
    {
        $this->pingpong = $pingpong;

        return $this;
    }

    public function getPingpongPrix(): ?int
    {
        return $this->pingpong_prix;
    }

    public function setPingpongPrix(?int $pingpong_prix): static
    {
        $this->pingpong_prix = $pingpong_prix;

        return $this;
    }

    public function getIdGiteEEX(): ?Gite
    {
        return $this->id_giteEEX;
    }

    public function setIdGiteEEX(Gite $id_giteEEX): static
    {
        $this->id_giteEEX = $id_giteEEX;

        return $this;
    }
}
