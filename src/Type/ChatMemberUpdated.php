<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents changes in the status of a chat member.
 */
class ChatMemberUpdated
{
    /**
     * @param Chat                $chat
     * @param User                $from
     * @param int                 $date
     * @param ChatMemberInterface $old_chat_member
     * @param ChatMemberInterface $new_chat_member
     * @param ChatInviteLink|null $invite_link
     */
    public function __construct(
        private $chat,
        private $from,
        private $date,
        private $old_chat_member,
        private $new_chat_member,
        private $invite_link = null,
    ) {
    }

    /**
     * Chat the user belongs to.
     */
    public function getChat(): Chat
    {
        return $this->chat;
    }

    /**
     * Performer of the action, which resulted in the change.
     */
    public function getFrom(): User
    {
        return $this->from;
    }

    /**
     * Date the change was done in Unix time.
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * Previous information about the chat member.
     */
    public function getOldChatMember(): ChatMemberInterface
    {
        return $this->old_chat_member;
    }

    /**
     * New information about the chat member.
     */
    public function getNewChatMember(): ChatMemberInterface
    {
        return $this->new_chat_member;
    }

    /**
     * Optional. Chat invite link, which was used by the user to join the chat; for joining by invite link events only.
     */
    public function getInviteLink(): ?ChatInviteLink
    {
        return $this->invite_link;
    }
}
