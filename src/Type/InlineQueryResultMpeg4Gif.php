<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents a link to a video animation (H.264/MPEG-4 AVC video without sound). By default, this animated MPEG-4 file will be sent by the user with optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the animation.
 */
class InlineQueryResultMpeg4Gif implements InlineQueryResultInterface
{
    /**
     * @param string                            $type
     * @param string                            $id
     * @param string                            $mpeg4_url
     * @param string                            $thumb_url
     * @param int|null                          $mpeg4_width
     * @param int|null                          $mpeg4_height
     * @param int|null                          $mpeg4_duration
     * @param string|null                       $thumb_mime_type
     * @param string|null                       $title
     * @param string|null                       $caption
     * @param string|null                       $parse_mode
     * @param MessageEntity[]|null              $caption_entities
     * @param InlineKeyboardMarkup|null         $reply_markup
     * @param InputMessageContentInterface|null $input_message_content
     */
    public function __construct(
        private $type,
        private $id,
        private $mpeg4_url,
        private $thumb_url,
        private $mpeg4_width = null,
        private $mpeg4_height = null,
        private $mpeg4_duration = null,
        private $thumb_mime_type = null,
        private $title = null,
        private $caption = null,
        private $parse_mode = null,
        private $caption_entities = null,
        private $reply_markup = null,
        private $input_message_content = null,
    ) {
    }

    /**
     * Type of the result, must be mpeg4_gif.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Unique identifier for this result, 1-64 bytes.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * A valid URL for the MPEG4 file. File size must not exceed 1MB.
     */
    public function getMpeg4Url(): string
    {
        return $this->mpeg4_url;
    }

    /**
     * URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result.
     */
    public function getThumbUrl(): string
    {
        return $this->thumb_url;
    }

    /**
     * Optional. Video width.
     */
    public function getMpeg4Width(): ?int
    {
        return $this->mpeg4_width;
    }

    /**
     * Optional. Video height.
     */
    public function getMpeg4Height(): ?int
    {
        return $this->mpeg4_height;
    }

    /**
     * Optional. Video duration in seconds.
     */
    public function getMpeg4Duration(): ?int
    {
        return $this->mpeg4_duration;
    }

    /**
     * Optional. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”. Defaults to “image/jpeg”.
     */
    public function getThumbMimeType(): ?string
    {
        return $this->thumb_mime_type;
    }

    /**
     * Optional. Title for the result.
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Optional. Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing.
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * Optional. Mode for parsing entities in the caption. See formatting options for more details.
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
     * Optional. Inline keyboard attached to the message.
     */
    public function getReplyMarkup(): ?InlineKeyboardMarkup
    {
        return $this->reply_markup;
    }

    /**
     * Optional. Content of the message to be sent instead of the video animation.
     */
    public function getInputMessageContent(): ?InputMessageContentInterface
    {
        return $this->input_message_content;
    }
}
