<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents the content of a venue message to be sent as the result of an inline query.
 */
class InputVenueMessageContent implements InputMessageContentInterface
{
    /**
     * @param float       $latitude
     * @param float       $longitude
     * @param string      $title
     * @param string      $address
     * @param string|null $foursquare_id
     * @param string|null $foursquare_type
     * @param string|null $google_place_id
     * @param string|null $google_place_type
     */
    public function __construct(
        private $latitude,
        private $longitude,
        private $title,
        private $address,
        private $foursquare_id = null,
        private $foursquare_type = null,
        private $google_place_id = null,
        private $google_place_type = null,
    ) {
    }

    /**
     * Latitude of the venue in degrees.
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * Longitude of the venue in degrees.
     */
    public function getLongitude(): float
    {
        return $this->longitude;
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
     * Optional. Foursquare identifier of the venue, if known.
     */
    public function getFoursquareId(): ?string
    {
        return $this->foursquare_id;
    }

    /**
     * Optional. Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.).
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
