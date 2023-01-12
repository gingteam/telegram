<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents one special entity in a text message. For example, hashtags, usernames, URLs, etc.
 */
class MessageEntity
{
    /**
     * @param string      $type
     * @param int         $offset
     * @param int         $length
     * @param string|null $url
     * @param User|null   $user
     * @param string|null $language
     * @param string|null $custom_emoji_id
     */
    public function __construct(
        private $type,
        private $offset,
        private $length,
        private $url = null,
        private $user = null,
        private $language = null,
        private $custom_emoji_id = null,
    ) {
    }

    /**
     * Type of the entity. Currently, can be “mention” (@username), “hashtag” (#hashtag), “cashtag” ($USD), “bot_command” (/start@jobs_bot), “url” (https://telegram.org), “email” (do-not-reply@telegram.org), “phone_number” (+1-212-555-0123), “bold” (bold text), “italic” (italic text), “underline” (underlined text), “strikethrough” (strikethrough text), “spoiler” (spoiler message), “code” (monowidth string), “pre” (monowidth block), “text_link” (for clickable text URLs), “text_mention” (for users without usernames), “custom_emoji” (for inline custom emoji stickers).
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Offset in UTF-16 code units to the start of the entity.
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * Length of the entity in UTF-16 code units.
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * Optional. For “text_link” only, URL that will be opened after user taps on the text.
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Optional. For “text_mention” only, the mentioned user.
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * Optional. For “pre” only, the programming language of the entity text.
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * Optional. For “custom_emoji” only, unique identifier of the custom emoji. Use getCustomEmojiStickers to get full information about the sticker.
     */
    public function getCustomEmojiId(): ?string
    {
        return $this->custom_emoji_id;
    }
}
