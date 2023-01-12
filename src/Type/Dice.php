<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents an animated emoji that displays a random value.
 */
class Dice
{
    /**
     * @param string $emoji
     * @param int    $value
     */
    public function __construct(
        private $emoji,
        private $value,
    ) {
    }

    /**
     * Emoji on which the dice throw animation is based.
     */
    public function getEmoji(): string
    {
        return $this->emoji;
    }

    /**
     * ____simple_html_dom__voku__html_wrapper____>Value of the dice, 1-6 for “🎲”, “🎯” and “🎳” base emoji, 1-5 for “🏀” and “⚽” base emoji, 1-64 for “🎰” base emoji.
     */
    public function getValue(): int
    {
        return $this->value;
    }
}
