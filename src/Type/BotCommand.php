<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents a bot command.
 */
class BotCommand
{
    /**
     * @param string $command
     * @param string $description
     */
    public function __construct(
        private $command,
        private $description,
    ) {
    }

    /**
     * Text of the command; 1-32 characters. Can contain only lowercase English letters, digits and underscores.
     */
    public function getCommand(): string
    {
        return $this->command;
    }

    /**
     * Description of the command; 1-256 characters.
     */
    public function getDescription(): string
    {
        return $this->description;
    }
}
