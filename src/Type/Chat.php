<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents a chat.
 */
class Chat
{
    /**
     * @param int                  $id
     * @param string               $type
     * @param string|null          $title
     * @param string|null          $username
     * @param string|null          $first_name
     * @param string|null          $last_name
     * @param bool|null            $is_forum
     * @param ChatPhoto|null       $photo
     * @param string[]|null        $active_usernames
     * @param string|null          $emoji_status_custom_emoji_id
     * @param string|null          $bio
     * @param bool|null            $has_private_forwards
     * @param bool|null            $has_restricted_voice_and_video_messages
     * @param bool|null            $join_to_send_messages
     * @param bool|null            $join_by_request
     * @param string|null          $description
     * @param string|null          $invite_link
     * @param Message|null         $pinned_message
     * @param ChatPermissions|null $permissions
     * @param int|null             $slow_mode_delay
     * @param int|null             $message_auto_delete_time
     * @param bool|null            $has_protected_content
     * @param string|null          $sticker_set_name
     * @param bool|null            $can_set_sticker_set
     * @param int|null             $linked_chat_id
     * @param ChatLocation|null    $location
     */
    public function __construct(
        private $id,
        private $type,
        private $title = null,
        private $username = null,
        private $first_name = null,
        private $last_name = null,
        private $is_forum = null,
        private $photo = null,
        private $active_usernames = null,
        private $emoji_status_custom_emoji_id = null,
        private $bio = null,
        private $has_private_forwards = null,
        private $has_restricted_voice_and_video_messages = null,
        private $join_to_send_messages = null,
        private $join_by_request = null,
        private $description = null,
        private $invite_link = null,
        private $pinned_message = null,
        private $permissions = null,
        private $slow_mode_delay = null,
        private $message_auto_delete_time = null,
        private $has_protected_content = null,
        private $sticker_set_name = null,
        private $can_set_sticker_set = null,
        private $linked_chat_id = null,
        private $location = null,
    ) {
    }

    /**
     * Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Type of chat, can be either “private”, “group”, “supergroup” or “channel”.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Optional. Title, for supergroups, channels and group chats.
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Optional. Username, for private chats, supergroups and channels if available.
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * Optional. First name of the other party in a private chat.
     */
    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    /**
     * Optional. Last name of the other party in a private chat.
     */
    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    /**
     * Optional. True, if the supergroup chat is a forum (has topics enabled).
     */
    public function getIsForum(): ?bool
    {
        return $this->is_forum;
    }

    /**
     * Optional. Chat photo. Returned only in getChat.
     */
    public function getPhoto(): ?ChatPhoto
    {
        return $this->photo;
    }

    /**
     * Optional. If non-empty, the list of all active chat usernames; for private chats, supergroups and channels. Returned only in getChat.
     *
     * @return string[]|null
     */
    public function getActiveUsernames(): ?array
    {
        return $this->active_usernames;
    }

    /**
     * Optional. Custom emoji identifier of emoji status of the other party in a private chat. Returned only in getChat.
     */
    public function getEmojiStatusCustomEmojiId(): ?string
    {
        return $this->emoji_status_custom_emoji_id;
    }

    /**
     * Optional. Bio of the other party in a private chat. Returned only in getChat.
     */
    public function getBio(): ?string
    {
        return $this->bio;
    }

    /**
     * Optional. True, if privacy settings of the other party in the private chat allows to use tg://user?id=<user_id> links only in chats with the user. Returned only in getChat.
     */
    public function getHasPrivateForwards(): ?bool
    {
        return $this->has_private_forwards;
    }

    /**
     * Optional. True, if the privacy settings of the other party restrict sending voice and video note messages in the private chat. Returned only in getChat.
     */
    public function getHasRestrictedVoiceAndVideoMessages(): ?bool
    {
        return $this->has_restricted_voice_and_video_messages;
    }

    /**
     * Optional. True, if users need to join the supergroup before they can send messages. Returned only in getChat.
     */
    public function getJoinToSendMessages(): ?bool
    {
        return $this->join_to_send_messages;
    }

    /**
     * Optional. True, if all users directly joining the supergroup need to be approved by supergroup administrators. Returned only in getChat.
     */
    public function getJoinByRequest(): ?bool
    {
        return $this->join_by_request;
    }

    /**
     * Optional. Description, for groups, supergroups and channel chats. Returned only in getChat.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Optional. Primary invite link, for groups, supergroups and channel chats. Returned only in getChat.
     */
    public function getInviteLink(): ?string
    {
        return $this->invite_link;
    }

    /**
     * Optional. The most recent pinned message (by sending date). Returned only in getChat.
     */
    public function getPinnedMessage(): ?Message
    {
        return $this->pinned_message;
    }

    /**
     * Optional. Default chat member permissions, for groups and supergroups. Returned only in getChat.
     */
    public function getPermissions(): ?ChatPermissions
    {
        return $this->permissions;
    }

    /**
     * Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each unpriviledged user; in seconds. Returned only in getChat.
     */
    public function getSlowModeDelay(): ?int
    {
        return $this->slow_mode_delay;
    }

    /**
     * Optional. The time after which all messages sent to the chat will be automatically deleted; in seconds. Returned only in getChat.
     */
    public function getMessageAutoDeleteTime(): ?int
    {
        return $this->message_auto_delete_time;
    }

    /**
     * Optional. True, if messages from the chat can't be forwarded to other chats. Returned only in getChat.
     */
    public function getHasProtectedContent(): ?bool
    {
        return $this->has_protected_content;
    }

    /**
     * Optional. For supergroups, name of group sticker set. Returned only in getChat.
     */
    public function getStickerSetName(): ?string
    {
        return $this->sticker_set_name;
    }

    /**
     * Optional. True, if the bot can change the group sticker set. Returned only in getChat.
     */
    public function getCanSetStickerSet(): ?bool
    {
        return $this->can_set_sticker_set;
    }

    /**
     * Optional. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa; for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier. Returned only in getChat.
     */
    public function getLinkedChatId(): ?int
    {
        return $this->linked_chat_id;
    }

    /**
     * Optional. For supergroups, the location to which the supergroup is connected. Returned only in getChat.
     */
    public function getLocation(): ?ChatLocation
    {
        return $this->location;
    }
}
