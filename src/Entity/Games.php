<?php

namespace App\Entity;

use App\Repository\GamesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GamesRepository::class)]
class Games
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = NULL;

    #[ORM\Column(length: 255)]
    private ?string $homeTeam = NULL;

    #[ORM\Column(length: 255)]
    private ?string $awayTeam = NULL;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $result = NULL;

    /*        #[ORM\Column(type: 'datetime')] // Add this line for the date property
    private ?\DateTimeInterface $matchDate = NULL; */

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHomeTeam(): ?string
    {
        return $this->homeTeam;
    }

    public function setHomeTeam(string $homeTeam): static
    {
        $this->homeTeam = $homeTeam;

        return $this;
    }

    public function getAwayTeam(): ?string
    {
        return $this->awayTeam;
    }

    public function setAwayTeam(string $awayTeam): static
    {
        $this->awayTeam = $awayTeam;

        return $this;
    }

    public function getResult(): ?string
    {
        return $this->result;
    }

    public function setResult(?string $result): static
    {
        $this->result = $result;

        return $this;
    }

    /*
    public function getMatchDate(): ?\DateTimeInterface
    {
        return $this->matchDate;
    }

    public function setMatchDate(?\DateTimeInterface $matchDate): static
    {
        $this->matchDate = $matchDate;

        return $this;
    } */

}
