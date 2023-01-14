<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents the scope of bot commands, covering all group and supergroup chat administrators.
 */
class BotCommandScopeAllChatAdministrators implements BotCommandScopeInterface
{
    /**
     * @param string $type
     */
    public function __construct(private $type)
    {
    }

    /**
     * Scope type, must be all_chat_administrators.
     */
    public function getType(): string
    {
        return $this->type;
    }
}
