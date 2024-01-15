<?php

namespace App\Message\Event;

/**
 * Represents an event indicating the creation of a game.
 */
class GameCreatedEvent
{
    /**
     * @var string $homeTeam The home team participating in the created game.
     */
    protected $homeTeam;

    /**
     * @var string $awayTeam The away team participating in the created game.
     */
    protected $awayTeam;

    /**
     * GameCreatedEvent constructor.
     *
     * @param string $homeTeam The home team participating in the created game.
     * @param string $awayTeam The away team participating in the created game.
     */
    public function __construct($homeTeam, $awayTeam)
    {
        $this->homeTeam = $homeTeam;
        $this->awayTeam = $awayTeam;
    }

    /**
     * Gets the home team participating in the created game.
     *
     * @return string The home team.
     */
    public function getHomeTeam()
    {
        return $this->homeTeam;
    }

    /**
     * Gets the away team participating in the created game.
     *
     * @return string The away team.
     */
    public function getAwayTeam()
    {
        return $this->awayTeam;
    }

}
