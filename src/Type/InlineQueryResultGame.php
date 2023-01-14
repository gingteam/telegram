<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents a Game.
 */
class InlineQueryResultGame implements InlineQueryResultInterface
{
    /**
     * @param string                    $type
     * @param string                    $id
     * @param string                    $game_short_name
     * @param InlineKeyboardMarkup|null $reply_markup
     */
    public function __construct(
        private $type,
        private $id,
        private $game_short_name,
        private $reply_markup = null,
    ) {
    }

    /**
     * Type of the result, must be game.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Unique identifier for this result, 1-64 bytes.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Short name of the game.
     */
    public function getGameShortName(): string
    {
        return $this->game_short_name;
    }

    /**
     * Optional. Inline keyboard attached to the message.
     */
    public function getReplyMarkup(): ?InlineKeyboardMarkup
    {
        return $this->reply_markup;
    }
}
