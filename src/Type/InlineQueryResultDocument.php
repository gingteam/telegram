<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents a link to a file. By default, this file will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the file. Currently, only .PDF and .ZIP files can be sent using this method.
 */
class InlineQueryResultDocument implements InlineQueryResultInterface
{
    /**
     * @param string                            $type
     * @param string                            $id
     * @param string                            $title
     * @param string                            $document_url
     * @param string                            $mime_type
     * @param string|null                       $caption
     * @param string|null                       $parse_mode
     * @param MessageEntity[]|null              $caption_entities
     * @param string|null                       $description
     * @param InlineKeyboardMarkup|null         $reply_markup
     * @param InputMessageContentInterface|null $input_message_content
     * @param string|null                       $thumb_url
     * @param int|null                          $thumb_width
     * @param int|null                          $thumb_height
     */
    public function __construct(
        private $type,
        private $id,
        private $title,
        private $document_url,
        private $mime_type,
        private $caption = null,
        private $parse_mode = null,
        private $caption_entities = null,
        private $description = null,
        private $reply_markup = null,
        private $input_message_content = null,
        private $thumb_url = null,
        private $thumb_width = null,
        private $thumb_height = null,
    ) {
    }

    /**
     * Type of the result, must be document.
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
     * Title for the result.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * A valid URL for the file.
     */
    public function getDocumentUrl(): string
    {
        return $this->document_url;
    }

    /**
     * MIME type of the content of the file, either “application/pdf” or “application/zip”.
     */
    public function getMimeType(): string
    {
        return $this->mime_type;
    }

    /**
     * Optional. Caption of the document to be sent, 0-1024 characters after entities parsing.
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * Optional. Mode for parsing entities in the document caption. See formatting options for more details.
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
     * Optional. Content of the message to be sent instead of the file.
     */
    public function getInputMessageContent(): ?InputMessageContentInterface
    {
        return $this->input_message_content;
    }

    /**
     * Optional. URL of the thumbnail (JPEG only) for the file.
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
