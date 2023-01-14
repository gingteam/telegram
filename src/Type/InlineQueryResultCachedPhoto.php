<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents a link to a photo stored on the Telegram servers. By default, this photo will be sent by the user with an optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the photo.
 */
class InlineQueryResultCachedPhoto implements InlineQueryResultInterface
{
    /**
     * @param string                            $type
     * @param string                            $id
     * @param string                            $photo_file_id
     * @param string|null                       $title
     * @param string|null                       $description
     * @param string|null                       $caption
     * @param string|null                       $parse_mode
     * @param MessageEntity[]|null              $caption_entities
     * @param InlineKeyboardMarkup|null         $reply_markup
     * @param InputMessageContentInterface|null $input_message_content
     */
    public function __construct(
        private $type,
        private $id,
        private $photo_file_id,
        private $title = null,
        private $description = null,
        private $caption = null,
        private $parse_mode = null,
        private $caption_entities = null,
        private $reply_markup = null,
        private $input_message_content = null,
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
     * Unique identifier for this result, 1-64 bytes.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * A valid file identifier of the photo.
     */
    public function getPhotoFileId(): string
    {
        return $this->photo_file_id;
    }

    /**
     * Optional. Title for the result.
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Optional. Short description of the result.
     */
    public function getDescription(): ?string
    {
        return $this->description;
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

    /**
     * Optional. Inline keyboard attached to the message.
     */
    public function getReplyMarkup(): ?InlineKeyboardMarkup
    {
        return $this->reply_markup;
    }

    /**
     * Optional. Content of the message to be sent instead of the photo.
     */
    public function getInputMessageContent(): ?InputMessageContentInterface
    {
        return $this->input_message_content;
    }
}
