<?php

namespace GingTeam\Telegram\Type;

/**
 * Describes data sent from a Web App to the bot.
 */
class WebAppData
{
    /**
     * @param string $data
     * @param string $button_text
     */
    public function __construct(
        private $data,
        private $button_text,
    ) {
    }

    /**
     * The data. Be aware that a bad client can send arbitrary data in this field.
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * Text of the web_app keyboard button from which the Web App was opened. Be aware that a bad client can send arbitrary data in this field.
     */
    public function getButtonText(): string
    {
        return $this->button_text;
    }
}
