<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents a link to a voice recording in an .OGG container encoded with OPUS. By default, this voice recording will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the the voice message.
 */
class InlineQueryResultVoice implements InlineQueryResultInterface
{
    /**
     * @param string                            $type
     * @param string                            $id
     * @param string                            $voice_url
     * @param string                            $title
     * @param string|null                       $caption
     * @param string|null                       $parse_mode
     * @param MessageEntity[]|null              $caption_entities
     * @param int|null                          $voice_duration
     * @param InlineKeyboardMarkup|null         $reply_markup
     * @param InputMessageContentInterface|null $input_message_content
     */
    public function __construct(
        private $type,
        private $id,
        private $voice_url,
        private $title,
        private $caption = null,
        private $parse_mode = null,
        private $caption_entities = null,
        private $voice_duration = null,
        private $reply_markup = null,
        private $input_message_content = null,
    ) {
    }

    /**
     * Type of the result, must be voice.
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
     * A valid URL for the voice recording.
     */
    public function getVoiceUrl(): string
    {
        return $this->voice_url;
    }

    /**
     * Recording title.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Optional. Caption, 0-1024 characters after entities parsing.
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * Optional. Mode for parsing entities in the voice message caption. See formatting options for more details.
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
     * Optional. Recording duration in seconds.
     */
    public function getVoiceDuration(): ?int
    {
        return $this->voice_duration;
    }

    /**
     * Optional. Inline keyboard attached to the message.
     */
    public function getReplyMarkup(): ?InlineKeyboardMarkup
    {
        return $this->reply_markup;
    }

    /**
     * Optional. Content of the message to be sent instead of the voice recording.
     */
    public function getInputMessageContent(): ?InputMessageContentInterface
    {
        return $this->input_message_content;
    }
}
