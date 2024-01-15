<?php
namespace App\MessageHandler\Command;



use App\Entity\Games;
use App\Message\Command\CreateGame;
use App\Message\Event\GameCreatedEvent;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
/**
 * Class CreateGameHandler
 *
 * Responsible for handling the creation of a game.
 */
class CreateGameHandler
{
    /**
     * @var MessageBusInterface $eventBus
     * The MessageBusInterface implementation responsible for handling
     * and dispatching events related to game creation.
     */

    private MessageBusInterface $eventBus;

    /**
     * @var EntityManagerInterface $entityManager
     * The EntityManagerInterface implementation used for interacting
     * with the database and managing game-related entities.
     */
    private EntityManagerInterface $entityManager;

    /**
     * CreateGameHandler constructor.
     *
     * @param EntityManagerInterface $entityManager The EntityManagerInterface used for managing entities.
     *
     * @param MessageBusInterface    $eventBus      The MessageBusInterface used for handling and dispatching events.
     */
    public function __construct(EntityManagerInterface $entityManager, MessageBusInterface $eventBus)
    {
        $this->eventBus      = $eventBus;
        $this->entityManager = $entityManager;
    }

    /**
     * Handles the invocation of the CreateGameHandler, typically triggered
     * when an instance of this class is treated as a function.
     *
     * @param CreateGame $createGame The CreateGame object containing data for creating a new game.
     */
    public function __invoke(CreateGame $createGame)
    {
        $game = (new Games())->setHomeTeam($createGame->getHomeTeam())
                             ->setAwayTeam($createGame->getAwayTeam());

        $this->entityManager->persist($game);

        $this->entityManager->flush();

        $this->eventBus->dispatch(new GameCreatedEvent($createGame->getHomeTeam(), $createGame->getAwayTeam()));
    }

}
