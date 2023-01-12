<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents the scope of bot commands, covering all private chats.
 */
class BotCommandScopeAllPrivateChats implements BotCommandScope
{
    /**
     * @param string $type
     */
    public function __construct(private $type)
    {
    }

    /**
     * Scope type, must be all_private_chats.
     */
    public function getType(): string
    {
        return $this->type;
    }
}
