<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents a menu button, which opens the bot's list of commands.
 */
class MenuButtonCommands implements MenuButton
{
    /**
     * @param string $type
     */
    public function __construct(private $type)
    {
    }

    /**
     * Type of the button, must be commands.
     */
    public function getType(): string
    {
        return $this->type;
    }
}
