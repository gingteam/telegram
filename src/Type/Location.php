<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents a point on the map.
 */
class Location
{
    /**
     * @param float      $longitude
     * @param float      $latitude
     * @param float|null $horizontal_accuracy
     * @param int|null   $live_period
     * @param int|null   $heading
     * @param int|null   $proximity_alert_radius
     */
    public function __construct(
        private $longitude,
        private $latitude,
        private $horizontal_accuracy = null,
        private $live_period = null,
        private $heading = null,
        private $proximity_alert_radius = null,
    ) {
    }

    /**
     * Longitude as defined by sender.
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * Latitude as defined by sender.
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * Optional. The radius of uncertainty for the location, measured in meters; 0-1500.
     */
    public function getHorizontalAccuracy(): ?float
    {
        return $this->horizontal_accuracy;
    }

    /**
     * Optional. Time relative to the message sending date, during which the location can be updated; in seconds. For active live locations only.
     */
    public function getLivePeriod(): ?int
    {
        return $this->live_period;
    }

    /**
     * Optional. The direction in which user is moving, in degrees; 1-360. For active live locations only.
     */
    public function getHeading(): ?int
    {
        return $this->heading;
    }

    /**
     * Optional. The maximum distance for proximity alerts about approaching another chat member, in meters. For sent live locations only.
     */
    public function getProximityAlertRadius(): ?int
    {
        return $this->proximity_alert_radius;
    }
}
