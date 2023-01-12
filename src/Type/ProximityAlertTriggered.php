<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents the content of a service message, sent whenever a user in the chat triggers a proximity alert set by another user.
 */
class ProximityAlertTriggered
{
    /**
     * @param User $traveler
     * @param User $watcher
     * @param int  $distance
     */
    public function __construct(
        private $traveler,
        private $watcher,
        private $distance,
    ) {
    }

    /**
     * User that triggered the alert.
     */
    public function getTraveler(): User
    {
        return $this->traveler;
    }

    /**
     * User that set the alert.
     */
    public function getWatcher(): User
    {
        return $this->watcher;
    }

    /**
     * The distance between the users.
     */
    public function getDistance(): int
    {
        return $this->distance;
    }
}
