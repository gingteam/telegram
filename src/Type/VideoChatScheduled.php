<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents a service message about a video chat scheduled in the chat.
 */
class VideoChatScheduled
{
    /**
     * @param int $start_date
     */
    public function __construct(private $start_date)
    {
    }

    /**
     * Point in time (Unix timestamp) when the video chat is supposed to be started by a chat administrator.
     */
    public function getStartDate(): int
    {
        return $this->start_date;
    }
}
