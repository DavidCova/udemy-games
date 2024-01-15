<?php

namespace App\Message\Command;

/**
 * Represents a command for creating a new game.
 */
class CreateGame
{
    /**
     * @var string The home team for the new game.
     */
    private $homeTeam;

    /**
     * @var string The away team for the new game.
     */
    private $awayTeam;

    /**
     * CreateGame constructor.
     *
     * @param string $homeTeam The home team for the new game.
     * @param string $awayTeam The away team for the new game.
     */
    public function __construct(string $homeTeam, string $awayTeam)
    {
        $this->homeTeam = $homeTeam;
        $this->awayTeam = $awayTeam;
    }

    /**
     * Gets the home team for the new game.
     *
     * @return string The home team.
     */
    public function getHomeTeam(): string
    {
        return $this->homeTeam;
    }

    /**
     * Gets the away team for the new game.
     *
     * @return string The away team.
     */
    public function getAwayTeam(): string
    {
        return $this->awayTeam;
    }
}
