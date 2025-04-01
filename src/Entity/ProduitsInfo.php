<?php

namespace App\Entity;

use App\Repository\ProduitsInfoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitsInfoRepository::class)]
class ProduitsInfo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(type: 'text')]
    private ?string $bio = null;

    #[ORM\Column(type: 'text')]
    private ?string $ingredients = null;

    #[ORM\Column(length: 100)]
    private ?string $categorie = null;

    #[ORM\Column(length: 100)]
    private ?string $type = null;

    // ===== Getters & Setters ===== //

    public function getId(): ?int { return $this->id; }

    public function getImage(): ?string { return $this->image; }
    public function setImage(string $image): self { $this->image = $image; return $this; }

    public function getTitre(): ?string { return $this->titre; }
    public function setTitre(string $titre): self { $this->titre = $titre; return $this; }

    public function getBio(): ?string { return $this->bio; }
    public function setBio(string $bio): self { $this->bio = $bio; return $this; }

    public function getIngredients(): ?string { return $this->ingredients; }
    public function setIngredients(string $ingredients): self { $this->ingredients = $ingredients; return $this; }

    public function getCategorie(): ?string { return $this->categorie; }
    public function setCategorie(string $categorie): self { $this->categorie = $categorie; return $this; }

    public function getType(): ?string { return $this->type; }
    public function setType(string $type): self { $this->type = $type; return $this; }
}
