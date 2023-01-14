<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents a link to an article or web page.
 */
class InlineQueryResultArticle implements InlineQueryResultInterface
{
    /**
     * @param string                       $type
     * @param string                       $id
     * @param string                       $title
     * @param InputMessageContentInterface $input_message_content
     * @param InlineKeyboardMarkup|null    $reply_markup
     * @param string|null                  $url
     * @param bool|null                    $hide_url
     * @param string|null                  $description
     * @param string|null                  $thumb_url
     * @param int|null                     $thumb_width
     * @param int|null                     $thumb_height
     */
    public function __construct(
        private $type,
        private $id,
        private $title,
        private $input_message_content,
        private $reply_markup = null,
        private $url = null,
        private $hide_url = null,
        private $description = null,
        private $thumb_url = null,
        private $thumb_width = null,
        private $thumb_height = null,
    ) {
    }

    /**
     * Type of the result, must be article.
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
     * Title of the result.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Content of the message to be sent.
     */
    public function getInputMessageContent(): InputMessageContentInterface
    {
        return $this->input_message_content;
    }

    /**
     * Optional. Inline keyboard attached to the message.
     */
    public function getReplyMarkup(): ?InlineKeyboardMarkup
    {
        return $this->reply_markup;
    }

    /**
     * Optional. URL of the result.
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Optional. Pass True if you don't want the URL to be shown in the message.
     */
    public function getHideUrl(): ?bool
    {
        return $this->hide_url;
    }

    /**
     * Optional. Short description of the result.
     */
    public function getDescription(): ?string
    {
        return $this->description;
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
