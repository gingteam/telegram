<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents the default scope of bot commands. Default commands are used if no commands with a narrower scope are specified for the user.
 */
class BotCommandScopeDefault implements BotCommandScope
{
    /**
     * @param string $type
     */
    public function __construct(private $type)
    {
    }

    /**
     * Scope type, must be default.
     */
    public function getType(): string
    {
        return $this->type;
    }
}
