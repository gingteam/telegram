<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents a result of an inline query that was chosen by the user and sent to their chat partner.
 */
class ChosenInlineResult
{
    /**
     * @param string        $result_id
     * @param User          $from
     * @param string        $query
     * @param Location|null $location
     * @param string|null   $inline_message_id
     */
    public function __construct(
        private $result_id,
        private $from,
        private $query,
        private $location = null,
        private $inline_message_id = null,
    ) {
    }

    /**
     * The unique identifier for the result that was chosen.
     */
    public function getResultId(): string
    {
        return $this->result_id;
    }

    /**
     * The user that chose the result.
     */
    public function getFrom(): User
    {
        return $this->from;
    }

    /**
     * The query that was used to obtain the result.
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * Optional. Sender location, only for bots that require user location.
     */
    public function getLocation(): ?Location
    {
        return $this->location;
    }

    /**
     * Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message. Will be also received in callback queries and can be used to edit the message.
     */
    public function getInlineMessageId(): ?string
    {
        return $this->inline_message_id;
    }
}
