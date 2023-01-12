<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents an answer of a user in a non-anonymous poll.
 */
class PollAnswer
{
    /**
     * @param string $poll_id
     * @param User   $user
     * @param int[]  $option_ids
     */
    public function __construct(
        private $poll_id,
        private $user,
        private $option_ids,
    ) {
    }

    /**
     * Unique poll identifier.
     */
    public function getPollId(): string
    {
        return $this->poll_id;
    }

    /**
     * The user, who changed the answer to the poll.
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * 0-based identifiers of answer options, chosen by the user. May be empty if the user retracted their vote.
     *
     * @return int[]
     */
    public function getOptionIds(): array
    {
        return $this->option_ids;
    }
}
