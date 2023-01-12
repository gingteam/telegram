<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents a service message about a new forum topic created in the chat.
 */
class ForumTopicCreated
{
    /**
     * @param string      $name
     * @param int         $icon_color
     * @param string|null $icon_custom_emoji_id
     */
    public function __construct(
        private $name,
        private $icon_color,
        private $icon_custom_emoji_id = null,
    ) {
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
