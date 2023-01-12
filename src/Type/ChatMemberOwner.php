<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents a chat member that owns the chat and has all administrator privileges.
 */
class ChatMemberOwner implements ChatMember
{
    /**
     * @param string      $status
     * @param User        $user
     * @param bool        $is_anonymous
     * @param string|null $custom_title
     */
    public function __construct(
        private $status,
        private $user,
        private $is_anonymous,
        private $custom_title = null,
    ) {
    }

    /**
     * The member's status in the chat, always “creator”.
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
     * True, if the user's presence in the chat is hidden.
     */
    public function getIsAnonymous(): bool
    {
        return $this->is_anonymous;
    }

    /**
     * Optional. Custom title for this user.
     */
    public function getCustomTitle(): ?string
    {
        return $this->custom_title;
    }
}
