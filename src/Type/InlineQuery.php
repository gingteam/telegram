<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents an incoming inline query. When the user sends an empty query, your bot could return some default or trending results.
 */
class InlineQuery
{
    /**
     * @param string        $id
     * @param User          $from
     * @param string        $query
     * @param string        $offset
     * @param string|null   $chat_type
     * @param Location|null $location
     */
    public function __construct(
        private $id,
        private $from,
        private $query,
        private $offset,
        private $chat_type = null,
        private $location = null,
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
     * Text of the query (up to 256 characters).
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * Offset of the results to be returned, can be controlled by the bot.
     */
    public function getOffset(): string
    {
        return $this->offset;
    }

    /**
     * Optional. Type of the chat from which the inline query was sent. Can be either “sender” for a private chat with the inline query sender, “private”, “group”, “supergroup”, or “channel”. The chat type should be always known for requests sent from official clients and most third-party clients, unless the request was sent from a secret chat.
     */
    public function getChatType(): ?string
    {
        return $this->chat_type;
    }

    /**
     * Optional. Sender location, only for bots that request user location.
     */
    public function getLocation(): ?Location
    {
        return $this->location;
    }
}
