<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents an incoming callback query from a callback button in an inline keyboard. If the button that originated the query was attached to a message sent by the bot, the field message will be present. If the button was attached to a message sent via the bot (in inline mode), the field inline_message_id will be present. Exactly one of the fields data or game_short_name will be present.
 */
class CallbackQuery
{
    /**
     * @param string       $id
     * @param User         $from
     * @param string       $chat_instance
     * @param Message|null $message
     * @param string|null  $inline_message_id
     * @param string|null  $data
     * @param string|null  $game_short_name
     */
    public function __construct(
        private $id,
        private $from,
        private $chat_instance,
        private $message = null,
        private $inline_message_id = null,
        private $data = null,
        private $game_short_name = null,
    ) {
    }

    /**
     * Unique identifier for this query.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sender.
     */
    public function getFrom(): User
    {
        return $this->from;
    }

    /**
     * Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in games.
     */
    public function getChatInstance(): string
    {
        return $this->chat_instance;
    }

    /**
     * Optional. Message with the callback button that originated the query. Note that message content and message date will not be available if the message is too old.
     */
    public function getMessage(): ?Message
    {
        return $this->message;
    }

    /**
     * Optional. Identifier of the message sent via the bot in inline mode, that originated the query.
     */
    public function getInlineMessageId(): ?string
    {
        return $this->inline_message_id;
    }

    /**
     * Optional. Data associated with the callback button. Be aware that the message originated the query can contain no callback buttons with this data.
     */
    public function getData(): ?string
    {
        return $this->data;
    }

    /**
     * Optional. Short name of a Game to be returned, serves as the unique identifier for the game.
     */
    public function getGameShortName(): ?string
    {
        return $this->game_short_name;
    }
}
