<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents a Telegram user or bot.
 */
class User
{
    /**
     * @param int         $id
     * @param bool        $is_bot
     * @param string      $first_name
     * @param string|null $last_name
     * @param string|null $username
     * @param string|null $language_code
     * @param bool|null   $is_premium
     * @param bool|null   $added_to_attachment_menu
     * @param bool|null   $can_join_groups
     * @param bool|null   $can_read_all_group_messages
     * @param bool|null   $supports_inline_queries
     */
    public function __construct(
        private $id,
        private $is_bot,
        private $first_name,
        private $last_name = null,
        private $username = null,
        private $language_code = null,
        private $is_premium = null,
        private $added_to_attachment_menu = null,
        private $can_join_groups = null,
        private $can_read_all_group_messages = null,
        private $supports_inline_queries = null,
    ) {
    }

    /**
     * Unique identifier for this user or bot. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * True, if this user is a bot.
     */
    public function getIsBot(): bool
    {
        return $this->is_bot;
    }

    /**
     * User's or bot's first name.
     */
    public function getFirstName(): string
    {
        return $this->first_name;
    }

    /**
     * Optional. User's or bot's last name.
     */
    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    /**
     * Optional. User's or bot's username.
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * Optional. IETF language tag of the user's language.
     */
    public function getLanguageCode(): ?string
    {
        return $this->language_code;
    }

    /**
     * Optional. True, if this user is a Telegram Premium user.
     */
    public function getIsPremium(): ?bool
    {
        return $this->is_premium;
    }

    /**
     * Optional. True, if this user added the bot to the attachment menu.
     */
    public function getAddedToAttachmentMenu(): ?bool
    {
        return $this->added_to_attachment_menu;
    }

    /**
     * Optional. True, if the bot can be invited to groups. Returned only in getMe.
     */
    public function getCanJoinGroups(): ?bool
    {
        return $this->can_join_groups;
    }

    /**
     * Optional. True, if privacy mode is disabled for the bot. Returned only in getMe.
     */
    public function getCanReadAllGroupMessages(): ?bool
    {
        return $this->can_read_all_group_messages;
    }

    /**
     * Optional. True, if the bot supports inline queries. Returned only in getMe.
     */
    public function getSupportsInlineQueries(): ?bool
    {
        return $this->supports_inline_queries;
    }
}
