<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents a link to a page containing an embedded video player or a video file. By default, this video file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the video.
 */
class InlineQueryResultVideo implements InlineQueryResult
{
    /**
     * @param string                    $type
     * @param string                    $id
     * @param string                    $video_url
     * @param string                    $mime_type
     * @param string                    $thumb_url
     * @param string                    $title
     * @param string|null               $caption
     * @param string|null               $parse_mode
     * @param MessageEntity[]|null      $caption_entities
     * @param int|null                  $video_width
     * @param int|null                  $video_height
     * @param int|null                  $video_duration
     * @param string|null               $description
     * @param InlineKeyboardMarkup|null $reply_markup
     * @param InputMessageContent|null  $input_message_content
     */
    public function __construct(
        private $type,
        private $id,
        private $video_url,
        private $mime_type,
        private $thumb_url,
        private $title,
        private $caption = null,
        private $parse_mode = null,
        private $caption_entities = null,
        private $video_width = null,
        private $video_height = null,
        private $video_duration = null,
        private $description = null,
        private $reply_markup = null,
        private $input_message_content = null,
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
     * Unique identifier for this result, 1-64 bytes.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * A valid URL for the embedded video player or video file.
     */
    public function getVideoUrl(): string
    {
        return $this->video_url;
    }

    /**
     * MIME type of the content of the video URL, “text/html” or “video/mp4”.
     */
    public function getMimeType(): string
    {
        return $this->mime_type;
    }

    /**
     * URL of the thumbnail (JPEG only) for the video.
     */
    public function getThumbUrl(): string
    {
        return $this->thumb_url;
    }

    /**
     * Title for the result.
     */
    public function getTitle(): string
    {
        return $this->title;
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
    public function getVideoWidth(): ?int
    {
        return $this->video_width;
    }

    /**
     * Optional. Video height.
     */
    public function getVideoHeight(): ?int
    {
        return $this->video_height;
    }

    /**
     * Optional. Video duration in seconds.
     */
    public function getVideoDuration(): ?int
    {
        return $this->video_duration;
    }

    /**
     * Optional. Short description of the result.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Optional. Inline keyboard attached to the message.
     */
    public function getReplyMarkup(): ?InlineKeyboardMarkup
    {
        return $this->reply_markup;
    }

    /**
     * Optional. Content of the message to be sent instead of the video. This field is required if InlineQueryResultVideo is used to send an HTML-page as a result (e.g., a YouTube video).
     */
    public function getInputMessageContent(): ?InputMessageContent
    {
        return $this->input_message_content;
    }
}
