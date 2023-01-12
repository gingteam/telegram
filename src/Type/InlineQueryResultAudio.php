<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents a link to an MP3 audio file. By default, this audio file will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the audio.
 */
class InlineQueryResultAudio implements InlineQueryResult
{
    /**
     * @param string                    $type
     * @param string                    $id
     * @param string                    $audio_url
     * @param string                    $title
     * @param string|null               $caption
     * @param string|null               $parse_mode
     * @param MessageEntity[]|null      $caption_entities
     * @param string|null               $performer
     * @param int|null                  $audio_duration
     * @param InlineKeyboardMarkup|null $reply_markup
     * @param InputMessageContent|null  $input_message_content
     */
    public function __construct(
        private $type,
        private $id,
        private $audio_url,
        private $title,
        private $caption = null,
        private $parse_mode = null,
        private $caption_entities = null,
        private $performer = null,
        private $audio_duration = null,
        private $reply_markup = null,
        private $input_message_content = null,
    ) {
    }

    /**
     * Type of the result, must be audio.
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
     * A valid URL for the audio file.
     */
    public function getAudioUrl(): string
    {
        return $this->audio_url;
    }

    /**
     * Title.
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
     * Optional. Mode for parsing entities in the audio caption. See formatting options for more details.
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
     * Optional. Performer.
     */
    public function getPerformer(): ?string
    {
        return $this->performer;
    }

    /**
     * Optional. Audio duration in seconds.
     */
    public function getAudioDuration(): ?int
    {
        return $this->audio_duration;
    }

    /**
     * Optional. Inline keyboard attached to the message.
     */
    public function getReplyMarkup(): ?InlineKeyboardMarkup
    {
        return $this->reply_markup;
    }

    /**
     * Optional. Content of the message to be sent instead of the audio.
     */
    public function getInputMessageContent(): ?InputMessageContent
    {
        return $this->input_message_content;
    }
}
