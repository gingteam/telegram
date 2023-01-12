<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents the scope of bot commands, covering a specific member of a group or supergroup chat.
 */
class BotCommandScopeChatMember implements BotCommandScope
{
    /**
     * @param string     $type
     * @param int|string $chat_id
     * @param int        $user_id
     */
    public function __construct(
        private $type,
        private $chat_id,
        private $user_id,
    ) {
    }

    /**
     * Scope type, must be chat_member.
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

    /**
     * Unique identifier of the target user.
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }
}
