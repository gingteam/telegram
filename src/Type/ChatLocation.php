<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents a location to which a chat is connected.
 */
class ChatLocation
{
    /**
     * @param Location $location
     * @param string   $address
     */
    public function __construct(
        private $location,
        private $address,
    ) {
    }

    /**
     * The location to which the supergroup is connected. Can't be a live location.
     */
    public function getLocation(): Location
    {
        return $this->location;
    }

    /**
     * Location address; 1-64 characters, as defined by the chat owner.
     */
    public function getAddress(): string
    {
        return $this->address;
    }
}
