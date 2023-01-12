<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents a venue.
 */
class Venue
{
    /**
     * @param Location    $location
     * @param string      $title
     * @param string      $address
     * @param string|null $foursquare_id
     * @param string|null $foursquare_type
     * @param string|null $google_place_id
     * @param string|null $google_place_type
     */
    public function __construct(
        private $location,
        private $title,
        private $address,
        private $foursquare_id = null,
        private $foursquare_type = null,
        private $google_place_id = null,
        private $google_place_type = null,
    ) {
    }

    /**
     * Venue location. Can't be a live location.
     */
    public function getLocation(): Location
    {
        return $this->location;
    }

    /**
     * Name of the venue.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Address of the venue.
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * Optional. Foursquare identifier of the venue.
     */
    public function getFoursquareId(): ?string
    {
        return $this->foursquare_id;
    }

    /**
     * Optional. Foursquare type of the venue. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.).
     */
    public function getFoursquareType(): ?string
    {
        return $this->foursquare_type;
    }

    /**
     * Optional. Google Places identifier of the venue.
     */
    public function getGooglePlaceId(): ?string
    {
        return $this->google_place_id;
    }

    /**
     * Optional. Google Places type of the venue. (See supported types.).
     */
    public function getGooglePlaceType(): ?string
    {
        return $this->google_place_type;
    }
}
