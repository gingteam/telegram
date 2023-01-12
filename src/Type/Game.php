<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents a game. Use BotFather to create and edit games, their short names will act as unique identifiers.
 */
class Game
{
    /**
     * @param string               $title
     * @param string               $description
     * @param PhotoSize[]          $photo
     * @param string|null          $text
     * @param MessageEntity[]|null $text_entities
     * @param Animation|null       $animation
     */
    public function __construct(
        private $title,
        private $description,
        private $photo,
        private $text = null,
        private $text_entities = null,
        private $animation = null,
    ) {
    }

    /**
     * Title of the game.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Description of the game.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Photo that will be displayed in the game message in chats.
     *
     * @return PhotoSize[]
     */
    public function getPhoto(): array
    {
        return $this->photo;
    }

    /**
     * Optional. Brief description of the game or high scores included in the game message. Can be automatically edited to include current high scores for the game when the bot calls setGameScore, or manually edited using editMessageText. 0-4096 characters.
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * Optional. Special entities that appear in text, such as usernames, URLs, bot commands, etc.
     *
     * @return MessageEntity[]|null
     */
    public function getTextEntities(): ?array
    {
        return $this->text_entities;
    }

    /**
     * Optional. Animation that will be displayed in the game message in chats. Upload via BotFather.
     */
    public function getAnimation(): ?Animation
    {
        return $this->animation;
    }
}
