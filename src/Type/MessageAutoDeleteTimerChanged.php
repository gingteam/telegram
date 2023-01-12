<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents a service message about a change in auto-delete timer settings.
 */
class MessageAutoDeleteTimerChanged
{
    /**
     * @param int $message_auto_delete_time
     */
    public function __construct(private $message_auto_delete_time)
    {
    }

    /**
     * New auto-delete time for messages in the chat; in seconds.
     */
    public function getMessageAutoDeleteTime(): int
    {
        return $this->message_auto_delete_time;
    }
}
