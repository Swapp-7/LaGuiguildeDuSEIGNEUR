<?php

namespace App\Entity;

use App\Repository\CharacterRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CharacterRepository::class)]
class Character
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = 1;

    #[ORM\Column(length: 20)]
    private ?string $name = 'Mamanayau';

    #[ORM\Column(length: 50)]
    private ?string $surname = 'Poussière de bissap';

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $caste = 'Magicien';

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $knowledge = 'Sciences';

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $intellingence = 180;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $strength = 180;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $image = '/seigneur/anfauglith.webp';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): static
    {
        $this->surname = $surname;

        return $this;
    }

    public function getCaste(): ?string
    {
        return $this->caste;
    }

    public function setCaste(?string $caste): static
    {
        $this->caste = $caste;

        return $this;
    }

    public function getKnowledge(): ?string
    {
        return $this->knowledge;
    }

    public function setKnowledge(?string $knowledge): static
    {
        $this->knowledge = $knowledge;

        return $this;
    }

    public function getIntellingence(): ?int
    {
        return $this->intellingence;
    }

    public function setIntellingence(?int $intellingence): static
    {
        $this->intellingence = $intellingence;

        return $this;
    }

    public function getStrength(): ?int
    {
        return $this->strength;
    }

    public function setStrength(?int $strength): static
    {
        $this->strength = $strength;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function toArray()
    {
        return get_object_vars($this);
    }
}

// class Character
// {
//     private ?int $id = 1;
//     private ?string $name = 'MAMAnfauglith';
//     private ?string $surname = 'Poussière de bissap';
//     private ?string $caste = 'Magicien';
//     private ?string $knowledge = 'Sciences';
//     private ?int $intelligence = 180;
//     private ?int $strength = 180;
//     private ?string $image = '/Seigneur/anfauglith.webp';

//     
// }
