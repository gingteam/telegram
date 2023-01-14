<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents a chat member that has no additional privileges or restrictions.
 */
class ChatMemberMember implements ChatMemberInterface
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
     * The member's status in the chat, always “member”.
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
