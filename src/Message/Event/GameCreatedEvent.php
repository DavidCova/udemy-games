<?php

namespace App\Message\Event;

class GameCreatedEvent
{
    protected $homeTeam;
    protected $awayTeam;

    public function __construct($homeTeam, $awayTeam)
    {
        $this->homeTeam = $homeTeam;$this->awayTeam = $awayTeam;
    }

    public function getHomeTeam()
    {
        return $this->homeTeam;
    }

    public function getAwayTeam()
    {
        return $this->awayTeam;
    }

}
