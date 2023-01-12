<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents one row of the high scores table for a game.
 */
class GameHighScore
{
    /**
     * @param int  $position
     * @param User $user
     * @param int  $score
     */
    public function __construct(
        private $position,
        private $user,
        private $score,
    ) {
    }

    /**
     * Position in high score table for the game.
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * User.
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * Score.
     */
    public function getScore(): int
    {
        return $this->score;
    }
}
