<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents a video to be sent.
 */
class InputMediaVideo implements InputMediaInterface
{
    /**
     * @param string                         $type
     * @param string                         $media
     * @param InputFileInterface|string|null $thumb
     * @param string|null                    $caption
     * @param string|null                    $parse_mode
     * @param MessageEntity[]|null           $caption_entities
     * @param int|null                       $width
     * @param int|null                       $height
     * @param int|null                       $duration
     * @param bool|null                      $supports_streaming
     */
    public function __construct(
        private $type,
        private $media,
        private $thumb = null,
        private $caption = null,
        private $parse_mode = null,
        private $caption_entities = null,
        private $width = null,
        private $height = null,
        private $duration = null,
        private $supports_streaming = null,
    ) {
    }

    /**
     * Type of the result, must be video.
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
     * Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files ».
     *
     * @return InputFileInterface|string|null
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * Optional. Caption of the video to be sent, 0-1024 characters after entities parsing.
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * Optional. Mode for parsing entities in the video caption. See formatting options for more details.
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

    /**
     * Optional. Video width.
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * Optional. Video height.
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * Optional. Video duration in seconds.
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }

    /**
     * Optional. Pass True if the uploaded video is suitable for streaming.
     */
    public function getSupportsStreaming(): ?bool
    {
        return $this->supports_streaming;
    }
}
