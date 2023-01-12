<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents a link to an animated GIF file. By default, this animated GIF file will be sent by the user with optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the animation.
 */
class InlineQueryResultGif implements InlineQueryResult
{
    /**
     * @param string                    $type
     * @param string                    $id
     * @param string                    $gif_url
     * @param string                    $thumb_url
     * @param int|null                  $gif_width
     * @param int|null                  $gif_height
     * @param int|null                  $gif_duration
     * @param string|null               $thumb_mime_type
     * @param string|null               $title
     * @param string|null               $caption
     * @param string|null               $parse_mode
     * @param MessageEntity[]|null      $caption_entities
     * @param InlineKeyboardMarkup|null $reply_markup
     * @param InputMessageContent|null  $input_message_content
     */
    public function __construct(
        private $type,
        private $id,
        private $gif_url,
        private $thumb_url,
        private $gif_width = null,
        private $gif_height = null,
        private $gif_duration = null,
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
     * Type of the result, must be gif.
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
     * A valid URL for the GIF file. File size must not exceed 1MB.
     */
    public function getGifUrl(): string
    {
        return $this->gif_url;
    }

    /**
     * URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result.
     */
    public function getThumbUrl(): string
    {
        return $this->thumb_url;
    }

    /**
     * Optional. Width of the GIF.
     */
    public function getGifWidth(): ?int
    {
        return $this->gif_width;
    }

    /**
     * Optional. Height of the GIF.
     */
    public function getGifHeight(): ?int
    {
        return $this->gif_height;
    }

    /**
     * Optional. Duration of the GIF in seconds.
     */
    public function getGifDuration(): ?int
    {
        return $this->gif_duration;
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
     * Optional. Caption of the GIF file to be sent, 0-1024 characters after entities parsing.
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
     * Optional. Content of the message to be sent instead of the GIF animation.
     */
    public function getInputMessageContent(): ?InputMessageContent
    {
        return $this->input_message_content;
    }
}
