<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents a venue. By default, the venue will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the venue.
 */
class InlineQueryResultVenue implements InlineQueryResultInterface
{
    /**
     * @param string                            $type
     * @param string                            $id
     * @param float                             $latitude
     * @param float                             $longitude
     * @param string                            $title
     * @param string                            $address
     * @param string|null                       $foursquare_id
     * @param string|null                       $foursquare_type
     * @param string|null                       $google_place_id
     * @param string|null                       $google_place_type
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
        private $address,
        private $foursquare_id = null,
        private $foursquare_type = null,
        private $google_place_id = null,
        private $google_place_type = null,
        private $reply_markup = null,
        private $input_message_content = null,
        private $thumb_url = null,
        private $thumb_width = null,
        private $thumb_height = null,
    ) {
    }

    /**
     * Type of the result, must be venue.
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
     * Latitude of the venue location in degrees.
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * Longitude of the venue location in degrees.
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * Title of the venue.
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
     * Optional. Foursquare identifier of the venue if known.
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

    /**
     * Optional. Inline keyboard attached to the message.
     */
    public function getReplyMarkup(): ?InlineKeyboardMarkup
    {
        return $this->reply_markup;
    }

    /**
     * Optional. Content of the message to be sent instead of the venue.
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
