<?php

namespace App\Message\MessageHandler;

use App\Message\Command\CreateGame;
use App\Message\Event\GameCreatedEvent;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;
use Symfony\Component\Messenger\MessageBusInterface;

#[AsMessageHandler]
class CreateGameHandler
{
    private MessageBusInterface $eventBus;

    public function __construct(MessageBusInterface $eventBus)
    {
        $this->eventBus = $eventBus;
    }

    public function __invoke(CreateGame $createGame)
    {
        $this->eventBus->dispatch(new GameCreatedEvent($createGame->getHomeTeam(), $createGame->getAwayTeam()));
    }

}
