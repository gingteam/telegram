<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents an inline keyboard that appears right next to the message it belongs to.
 */
class InlineKeyboardMarkup
{
    /**
     * @param InlineKeyboardButton[][] $inline_keyboard
     */
    public function __construct(private $inline_keyboard)
    {
    }

    /**
     * Array of button rows, each represented by an Array of InlineKeyboardButton objects.
     *
     * @return InlineKeyboardButton[][]
     */
    public function getInlineKeyboard(): array
    {
        return $this->inline_keyboard;
    }
}
