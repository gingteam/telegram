<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents a location on a map. By default, the location will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the location.
 */
class InlineQueryResultLocation implements InlineQueryResultInterface
{
    /**
     * @param string                            $type
     * @param string                            $id
     * @param float                             $latitude
     * @param float                             $longitude
     * @param string                            $title
     * @param float|null                        $horizontal_accuracy
     * @param int|null                          $live_period
     * @param int|null                          $heading
     * @param int|null                          $proximity_alert_radius
     * @param InlineKeyboardMarkup|null         $reply_markup
     * @param InputMessageContentInterface|null $input_message_content
     * @param string|null                       $thumb_url
     * @param int|null                          $thumb_width
     * @param int|null                          $thumb_height
     */
    public function __construct(
        private $type,
        private $id,
        private $latitude,
        private $longitude,
        private $title,
        private $horizontal_accuracy = null,
        private $live_period = null,
        private $heading = null,
        private $proximity_alert_radius = null,
        private $reply_markup = null,
        private $input_message_content = null,
        private $thumb_url = null,
        private $thumb_width = null,
        private $thumb_height = null,
    ) {
    }

    /**
     * Type of the result, must be location.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Unique identifier for this result, 1-64 Bytes.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Location latitude in degrees.
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * Location longitude in degrees.
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * Location title.
     */
    public function getTitle(): string
    {
        return $this->title;
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

    /**
     * Optional. Inline keyboard attached to the message.
     */
    public function getReplyMarkup(): ?InlineKeyboardMarkup
    {
        return $this->reply_markup;
    }

    /**
     * Optional. Content of the message to be sent instead of the location.
     */
    public function getInputMessageContent(): ?InputMessageContentInterface
    {
        return $this->input_message_content;
    }

    /**
     * Optional. Url of the thumbnail for the result.
     */
    public function getThumbUrl(): ?string
    {
        return $this->thumb_url;
    }

    /**
     * Optional. Thumbnail width.
     */
    public function getThumbWidth(): ?int
    {
        return $this->thumb_width;
    }

    /**
     * Optional. Thumbnail height.
     */
    public function getThumbHeight(): ?int
    {
        return $this->thumb_height;
    }
}
