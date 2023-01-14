<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents the scope of bot commands, covering all administrators of a specific group or supergroup chat.
 */
class BotCommandScopeChatAdministrators implements BotCommandScopeInterface
{
    /**
     * @param string     $type
     * @param int|string $chat_id
     */
    public function __construct(
        private $type,
        private $chat_id,
    ) {
    }

    /**
     * Scope type, must be chat_administrators.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername).
     *
     * @return int|string
     */
    public function getChatId()
    {
        return $this->chat_id;
    }
}
