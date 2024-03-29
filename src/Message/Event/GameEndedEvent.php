<?php

namespace App\Message\Event;

class GameEndedEvent
{
    private string $homeTeam;
    private string $awayTeam;

    public function __construct(string $homeTeam, string $awayTeam)
    {
        $this->homeTeam = $homeTeam;
        $this->awayTeam = $awayTeam;
    }

    public function getHomeTeam(): string
    {
        return $this->homeTeam;
    }

    public function getAwayTeam(): string
    {
        return $this->awayTeam;
    }

}
