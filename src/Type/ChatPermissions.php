<?php

namespace GingTeam\Telegram\Type;

/**
 * Describes actions that a non-administrator user is allowed to take in a chat.
 */
class ChatPermissions
{
    /**
     * @param bool|null $can_send_messages
     * @param bool|null $can_send_media_messages
     * @param bool|null $can_send_polls
     * @param bool|null $can_send_other_messages
     * @param bool|null $can_add_web_page_previews
     * @param bool|null $can_change_info
     * @param bool|null $can_invite_users
     * @param bool|null $can_pin_messages
     * @param bool|null $can_manage_topics
     */
    public function __construct(
        private $can_send_messages = null,
        private $can_send_media_messages = null,
        private $can_send_polls = null,
        private $can_send_other_messages = null,
        private $can_add_web_page_previews = null,
        private $can_change_info = null,
        private $can_invite_users = null,
        private $can_pin_messages = null,
        private $can_manage_topics = null,
    ) {
    }

    /**
     * Optional. True, if the user is allowed to send text messages, contacts, locations and venues.
     */
    public function getCanSendMessages(): ?bool
    {
        return $this->can_send_messages;
    }

    /**
     * Optional. True, if the user is allowed to send audios, documents, photos, videos, video notes and voice notes, implies can_send_messages.
     */
    public function getCanSendMediaMessages(): ?bool
    {
        return $this->can_send_media_messages;
    }

    /**
     * Optional. True, if the user is allowed to send polls, implies can_send_messages.
     */
    public function getCanSendPolls(): ?bool
    {
        return $this->can_send_polls;
    }

    /**
     * Optional. True, if the user is allowed to send animations, games, stickers and use inline bots, implies can_send_media_messages.
     */
    public function getCanSendOtherMessages(): ?bool
    {
        return $this->can_send_other_messages;
    }

    /**
     * Optional. True, if the user is allowed to add web page previews to their messages, implies can_send_media_messages.
     */
    public function getCanAddWebPagePreviews(): ?bool
    {
        return $this->can_add_web_page_previews;
    }

    /**
     * Optional. True, if the user is allowed to change the chat title, photo and other settings. Ignored in public supergroups.
     */
    public function getCanChangeInfo(): ?bool
    {
        return $this->can_change_info;
    }

    /**
     * Optional. True, if the user is allowed to invite new users to the chat.
     */
    public function getCanInviteUsers(): ?bool
    {
        return $this->can_invite_users;
    }

    /**
     * Optional. True, if the user is allowed to pin messages. Ignored in public supergroups.
     */
    public function getCanPinMessages(): ?bool
    {
        return $this->can_pin_messages;
    }

    /**
     * Optional. True, if the user is allowed to create forum topics. If omitted defaults to the value of can_pin_messages.
     */
    public function getCanManageTopics(): ?bool
    {
        return $this->can_manage_topics;
    }
}
