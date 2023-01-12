<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents a unique message identifier.
 */
class MessageId
{
    /**
     * @param int $message_id
     */
    public function __construct(private $message_id)
    {
    }

    /**
     * Unique message identifier.
     */
    public function getMessageId(): int
    {
        return $this->message_id;
    }
}
