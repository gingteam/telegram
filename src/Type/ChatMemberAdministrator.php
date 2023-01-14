<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents a chat member that has some additional privileges.
 */
class ChatMemberAdministrator implements ChatMemberInterface
{
    /**
     * @param string      $status
     * @param User        $user
     * @param bool        $can_be_edited
     * @param bool        $is_anonymous
     * @param bool        $can_manage_chat
     * @param bool        $can_delete_messages
     * @param bool        $can_manage_video_chats
     * @param bool        $can_restrict_members
     * @param bool        $can_promote_members
     * @param bool        $can_change_info
     * @param bool        $can_invite_users
     * @param bool|null   $can_post_messages
     * @param bool|null   $can_edit_messages
     * @param bool|null   $can_pin_messages
     * @param bool|null   $can_manage_topics
     * @param string|null $custom_title
     */
    public function __construct(
        private $status,
        private $user,
        private $can_be_edited,
        private $is_anonymous,
        private $can_manage_chat,
        private $can_delete_messages,
        private $can_manage_video_chats,
        private $can_restrict_members,
        private $can_promote_members,
        private $can_change_info,
        private $can_invite_users,
        private $can_post_messages = null,
        private $can_edit_messages = null,
        private $can_pin_messages = null,
        private $can_manage_topics = null,
        private $custom_title = null,
    ) {
    }

    /**
     * The member's status in the chat, always “administrator”.
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
     * True, if the bot is allowed to edit administrator privileges of that user.
     */
    public function getCanBeEdited(): bool
    {
        return $this->can_be_edited;
    }

    /**
     * True, if the user's presence in the chat is hidden.
     */
    public function getIsAnonymous(): bool
    {
        return $this->is_anonymous;
    }

    /**
     * True, if the administrator can access the chat event log, chat statistics, message statistics in channels, see channel members, see anonymous administrators in supergroups and ignore slow mode. Implied by any other administrator privilege.
     */
    public function getCanManageChat(): bool
    {
        return $this->can_manage_chat;
    }

    /**
     * True, if the administrator can delete messages of other users.
     */
    public function getCanDeleteMessages(): bool
    {
        return $this->can_delete_messages;
    }

    /**
     * True, if the administrator can manage video chats.
     */
    public function getCanManageVideoChats(): bool
    {
        return $this->can_manage_video_chats;
    }

    /**
     * True, if the administrator can restrict, ban or unban chat members.
     */
    public function getCanRestrictMembers(): bool
    {
        return $this->can_restrict_members;
    }

    /**
     * True, if the administrator can add new administrators with a subset of their own privileges or demote administrators that he has promoted, directly or indirectly (promoted by administrators that were appointed by the user).
     */
    public function getCanPromoteMembers(): bool
    {
        return $this->can_promote_members;
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
     * Optional. True, if the administrator can post in the channel; channels only.
     */
    public function getCanPostMessages(): ?bool
    {
        return $this->can_post_messages;
    }

    /**
     * Optional. True, if the administrator can edit messages of other users and can pin messages; channels only.
     */
    public function getCanEditMessages(): ?bool
    {
        return $this->can_edit_messages;
    }

    /**
     * Optional. True, if the user is allowed to pin messages; groups and supergroups only.
     */
    public function getCanPinMessages(): ?bool
    {
        return $this->can_pin_messages;
    }

    /**
     * Optional. True, if the user is allowed to create, rename, close, and reopen forum topics; supergroups only.
     */
    public function getCanManageTopics(): ?bool
    {
        return $this->can_manage_topics;
    }

    /**
     * Optional. Custom title for this user.
     */
    public function getCustomTitle(): ?string
    {
        return $this->custom_title;
    }
}
