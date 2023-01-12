<?php

namespace GingTeam\Telegram\Type;

/**
 * This object contains information about one answer option in a poll.
 */
class PollOption
{
    /**
     * @param string $text
     * @param int    $voter_count
     */
    public function __construct(
        private $text,
        private $voter_count,
    ) {
    }

    /**
     * Option text, 1-100 characters.
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * Number of users that voted for this option.
     */
    public function getVoterCount(): int
    {
        return $this->voter_count;
    }
}
