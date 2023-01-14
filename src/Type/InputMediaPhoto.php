<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents a photo to be sent.
 */
class InputMediaPhoto implements InputMediaInterface
{
    /**
     * @param string               $type
     * @param string               $media
     * @param string|null          $caption
     * @param string|null          $parse_mode
     * @param MessageEntity[]|null $caption_entities
     */
    public function __construct(
        private $type,
        private $media,
        private $caption = null,
        private $parse_mode = null,
        private $caption_entities = null,
    ) {
    }

    /**
     * Type of the result, must be photo.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files ».
     */
    public function getMedia(): string
    {
        return $this->media;
    }

    /**
     * Optional. Caption of the photo to be sent, 0-1024 characters after entities parsing.
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * Optional. Mode for parsing entities in the photo caption. See formatting options for more details.
     */
    public function getParseMode(): ?string
    {
        return $this->parse_mode;
    }

    /**
     * Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode.
     *
     * @return MessageEntity[]|null
     */
    public function getCaptionEntities(): ?array
    {
        return $this->caption_entities;
    }
}
