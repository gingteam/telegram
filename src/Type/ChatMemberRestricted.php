<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents a chat member that is under certain restrictions in the chat. Supergroups only.
 */
class ChatMemberRestricted implements ChatMemberInterface
{
    /**
     * @param string $status
     * @param User   $user
     * @param bool   $is_member
     * @param bool   $can_change_info
     * @param bool   $can_invite_users
     * @param bool   $can_pin_messages
     * @param bool   $can_manage_topics
     * @param bool   $can_send_messages
     * @param bool   $can_send_media_messages
     * @param bool   $can_send_polls
     * @param bool   $can_send_other_messages
     * @param bool   $can_add_web_page_previews
     * @param int    $until_date
     */
    public function __construct(
        private $status,
        private $user,
        private $is_member,
        private $can_change_info,
        private $can_invite_users,
        private $can_pin_messages,
        private $can_manage_topics,
        private $can_send_messages,
        private $can_send_media_messages,
        private $can_send_polls,
        private $can_send_other_messages,
        private $can_add_web_page_previews,
        private $until_date,
    ) {
    }

    /**
     * The member's status in the chat, always “restricted”.
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
     * True, if the user is a member of the chat at the moment of the request.
     */
    public function getIsMember(): bool
    {
        return $this->is_member;
    }

    /**
     * True, if the user is allowed to change the chat title, photo and other settings.
     */
    public function getCanChangeInfo(): bool
    {
        return $this->can_change_info;
    }

    /**
     * True, if the user is allowed to invite new users to the chat.
     */
    public function getCanInviteUsers(): bool
    {
        return $this->can_invite_users;
    }

    /**
     * True, if the user is allowed to pin messages.
     */
    public function getCanPinMessages(): bool
    {
        return $this->can_pin_messages;
    }

    /**
     * True, if the user is allowed to create forum topics.
     */
    public function getCanManageTopics(): bool
    {
        return $this->can_manage_topics;
    }

    /**
     * True, if the user is allowed to send text messages, contacts, locations and venues.
     */
    public function getCanSendMessages(): bool
    {
        return $this->can_send_messages;
    }

    /**
     * True, if the user is allowed to send audios, documents, photos, videos, video notes and voice notes.
     */
    public function getCanSendMediaMessages(): bool
    {
        return $this->can_send_media_messages;
    }

    /**
     * True, if the user is allowed to send polls.
     */
    public function getCanSendPolls(): bool
    {
        return $this->can_send_polls;
    }

    /**
     * True, if the user is allowed to send animations, games, stickers and use inline bots.
     */
    public function getCanSendOtherMessages(): bool
    {
        return $this->can_send_other_messages;
    }

    /**
     * True, if the user is allowed to add web page previews to their messages.
     */
    public function getCanAddWebPagePreviews(): bool
    {
        return $this->can_add_web_page_previews;
    }

    /**
     * Date when restrictions will be lifted for this user; unix time. If 0, then the user is restricted forever.
     */
    public function getUntilDate(): int
    {
        return $this->until_date;
    }
}
