<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents a chat member that was banned in the chat and can't return to the chat or view chat messages.
 */
class ChatMemberBanned implements ChatMember
{
    /**
     * @param string $status
     * @param User   $user
     * @param int    $until_date
     */
    public function __construct(
        private $status,
        private $user,
        private $until_date,
    ) {
    }

    /**
     * The member's status in the chat, always “kicked”.
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

    /**
     * Date when restrictions will be lifted for this user; unix time. If 0, then the user is banned forever.
     */
    public function getUntilDate(): int
    {
        return $this->until_date;
    }
}
