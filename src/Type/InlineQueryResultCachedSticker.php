<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents a link to a sticker stored on the Telegram servers. By default, this sticker will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the sticker.
 */
class InlineQueryResultCachedSticker implements InlineQueryResultInterface
{
    /**
     * @param string                            $type
     * @param string                            $id
     * @param string                            $sticker_file_id
     * @param InlineKeyboardMarkup|null         $reply_markup
     * @param InputMessageContentInterface|null $input_message_content
     */
    public function __construct(
        private $type,
        private $id,
        private $sticker_file_id,
        private $reply_markup = null,
        private $input_message_content = null,
    ) {
    }

    /**
     * Type of the result, must be sticker.
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
     * A valid file identifier of the sticker.
     */
    public function getStickerFileId(): string
    {
        return $this->sticker_file_id;
    }

    /**
     * Optional. Inline keyboard attached to the message.
     */
    public function getReplyMarkup(): ?InlineKeyboardMarkup
    {
        return $this->reply_markup;
    }

    /**
     * Optional. Content of the message to be sent instead of the sticker.
     */
    public function getInputMessageContent(): ?InputMessageContentInterface
    {
        return $this->input_message_content;
    }
}
