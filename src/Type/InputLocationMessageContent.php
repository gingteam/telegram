<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents the content of a location message to be sent as the result of an inline query.
 */
class InputLocationMessageContent implements InputMessageContent
{
    /**
     * @param float      $latitude
     * @param float      $longitude
     * @param float|null $horizontal_accuracy
     * @param int|null   $live_period
     * @param int|null   $heading
     * @param int|null   $proximity_alert_radius
     */
    public function __construct(
        private $latitude,
        private $longitude,
        private $horizontal_accuracy = null,
        private $live_period = null,
        private $heading = null,
        private $proximity_alert_radius = null,
    ) {
    }

    /**
     * Latitude of the location in degrees.
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * Longitude of the location in degrees.
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * Optional. The radius of uncertainty for the location, measured in meters; 0-1500.
     */
    public function getHorizontalAccuracy(): ?float
    {
        return $this->horizontal_accuracy;
    }

    /**
     * Optional. Period in seconds for which the location can be updated, should be between 60 and 86400.
     */
    public function getLivePeriod(): ?int
    {
        return $this->live_period;
    }

    /**
     * Optional. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
     */
    public function getHeading(): ?int
    {
        return $this->heading;
    }

    /**
     * Optional. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
     */
    public function getProximityAlertRadius(): ?int
    {
        return $this->proximity_alert_radius;
    }
}
