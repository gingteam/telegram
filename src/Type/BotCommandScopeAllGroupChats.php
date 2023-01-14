<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents the scope of bot commands, covering all group and supergroup chats.
 */
class BotCommandScopeAllGroupChats implements BotCommandScopeInterface
{
    /**
     * @param string $type
     */
    public function __construct(private $type)
    {
    }

    /**
     * Scope type, must be all_group_chats.
     */
    public function getType(): string
    {
        return $this->type;
    }
}
