<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents a forum topic.
 */
class ForumTopic
{
    /**
     * @param int         $message_thread_id
     * @param string      $name
     * @param int         $icon_color
     * @param string|null $icon_custom_emoji_id
     */
    public function __construct(
        private $message_thread_id,
        private $name,
        private $icon_color,
        private $icon_custom_emoji_id = null,
    ) {
    }

    /**
     * Unique identifier of the forum topic.
     */
    public function getMessageThreadId(): int
    {
        return $this->message_thread_id;
    }

    /**
     * Name of the topic.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Color of the topic icon in RGB format.
     */
    public function getIconColor(): int
    {
        return $this->icon_color;
    }

    /**
     * Optional. Unique identifier of the custom emoji shown as the topic icon.
     */
    public function getIconCustomEmojiId(): ?string
    {
        return $this->icon_custom_emoji_id;
    }
}
