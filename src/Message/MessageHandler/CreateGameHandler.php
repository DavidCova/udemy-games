<?php

namespace App\Message\MessageHandler;

use App\Message\Command\CreateGame;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class CreateGameHandler
{
    protected $createGame;

    public function __invoke(CreateGame $createGame)
    {
        $this->createGame = $createGame;
    }

}
