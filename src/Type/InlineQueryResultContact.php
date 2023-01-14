<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents a contact with a phone number. By default, this contact will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the contact.
 */
class InlineQueryResultContact implements InlineQueryResultInterface
{
    /**
     * @param string                            $type
     * @param string                            $id
     * @param string                            $phone_number
     * @param string                            $first_name
     * @param string|null                       $last_name
     * @param string|null                       $vcard
     * @param InlineKeyboardMarkup|null         $reply_markup
     * @param InputMessageContentInterface|null $input_message_content
     * @param string|null                       $thumb_url
     * @param int|null                          $thumb_width
     * @param int|null                          $thumb_height
     */
    public function __construct(
        private $type,
        private $id,
        private $phone_number,
        private $first_name,
        private $last_name = null,
        private $vcard = null,
        private $reply_markup = null,
        private $input_message_content = null,
        private $thumb_url = null,
        private $thumb_width = null,
        private $thumb_height = null,
    ) {
    }

    /**
     * Type of the result, must be contact.
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
     * Contact's phone number.
     */
    public function getPhoneNumber(): string
    {
        return $this->phone_number;
    }

    /**
     * Contact's first name.
     */
    public function getFirstName(): string
    {
        return $this->first_name;
    }

    /**
     * Optional. Contact's last name.
     */
    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    /**
     * Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes.
     */
    public function getVcard(): ?string
    {
        return $this->vcard;
    }

    /**
     * Optional. Inline keyboard attached to the message.
     */
    public function getReplyMarkup(): ?InlineKeyboardMarkup
    {
        return $this->reply_markup;
    }

    /**
     * Optional. Content of the message to be sent instead of the contact.
     */
    public function getInputMessageContent(): ?InputMessageContentInterface
    {
        return $this->input_message_content;
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
