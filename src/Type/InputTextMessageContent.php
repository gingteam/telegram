<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents the content of a text message to be sent as the result of an inline query.
 */
class InputTextMessageContent implements InputMessageContent
{
    /**
     * @param string               $message_text
     * @param string|null          $parse_mode
     * @param MessageEntity[]|null $entities
     * @param bool|null            $disable_web_page_preview
     */
    public function __construct(
        private $message_text,
        private $parse_mode = null,
        private $entities = null,
        private $disable_web_page_preview = null,
    ) {
    }

    /**
     * Text of the message to be sent, 1-4096 characters.
     */
    public function getMessageText(): string
    {
        return $this->message_text;
    }

    /**
     * Optional. Mode for parsing entities in the message text. See formatting options for more details.
     */
    public function getParseMode(): ?string
    {
        return $this->parse_mode;
    }

    /**
     * Optional. List of special entities that appear in message text, which can be specified instead of parse_mode.
     *
     * @return MessageEntity[]|null
     */
    public function getEntities(): ?array
    {
        return $this->entities;
    }

    /**
     * Optional. Disables link previews for links in the sent message.
     */
    public function getDisableWebPagePreview(): ?bool
    {
        return $this->disable_web_page_preview;
    }
}
