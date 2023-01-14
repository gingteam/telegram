<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents the content of a contact message to be sent as the result of an inline query.
 */
class InputContactMessageContent implements InputMessageContentInterface
{
    /**
     * @param string      $phone_number
     * @param string      $first_name
     * @param string|null $last_name
     * @param string|null $vcard
     */
    public function __construct(
        private $phone_number,
        private $first_name,
        private $last_name = null,
        private $vcard = null,
    ) {
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
}
