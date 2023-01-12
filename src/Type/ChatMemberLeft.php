<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents a chat member that isn't currently a member of the chat, but may join it themselves.
 */
class ChatMemberLeft implements ChatMember
{
    /**
     * @param string $status
     * @param User   $user
     */
    public function __construct(
        private $status,
        private $user,
    ) {
    }

    /**
     * The member's status in the chat, always “left”.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Information about the user.
     */
    public function getUser(): User
    {
        return $this->user;
    }
}
