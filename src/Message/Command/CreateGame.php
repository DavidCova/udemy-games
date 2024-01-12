<?php

namespace App\Message\Command;

class CreateGame
{

    private $homeTeam;
    private $awayTeam;

    public function __construct($homeTeam, $awayTeam)
    {
        $this->homeTeam = $homeTeam;
        $this->awayTeam = $awayTeam;}

    public function getHomeTeam()
    {
        return $this->homeTeam;
    }

    public function getAwayTeam()
    {
        return $this->awayTeam;
    }

}
