<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents a join request sent to a chat.
 */
class ChatJoinRequest
{
    /**
     * @param Chat                $chat
     * @param User                $from
     * @param int                 $date
     * @param string|null         $bio
     * @param ChatInviteLink|null $invite_link
     */
    public function __construct(
        private $chat,
        private $from,
        private $date,
        private $bio = null,
        private $invite_link = null,
    ) {
    }

    /**
     * Chat to which the request was sent.
     */
    public function getChat(): Chat
    {
        return $this->chat;
    }

    /**
     * User that sent the join request.
     */
    public function getFrom(): User
    {
        return $this->from;
    }

    /**
     * Date the request was sent in Unix time.
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * Optional. Bio of the user.
     */
    public function getBio(): ?string
    {
        return $this->bio;
    }

    /**
     * Optional. Chat invite link that was used by the user to send the join request.
     */
    public function getInviteLink(): ?ChatInviteLink
    {
        return $this->invite_link;
    }
}
