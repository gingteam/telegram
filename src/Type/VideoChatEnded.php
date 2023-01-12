<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents a service message about a video chat ended in the chat.
 */
class VideoChatEnded
{
    /**
     * @param int $duration
     */
    public function __construct(private $duration)
    {
    }

    /**
     * Video chat duration in seconds.
     */
    public function getDuration(): int
    {
        return $this->duration;
    }
}
