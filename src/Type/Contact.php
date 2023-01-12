<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents a phone contact.
 */
class Contact
{
    /**
     * @param string      $phone_number
     * @param string      $first_name
     * @param string|null $last_name
     * @param int|null    $user_id
     * @param string|null $vcard
     */
    public function __construct(
        private $phone_number,
        private $first_name,
        private $last_name = null,
        private $user_id = null,
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
     * Optional. Contact's user identifier in Telegram. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
     */
    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    /**
     * Optional. Additional data about the contact in the form of a vCard.
     */
    public function getVcard(): ?string
    {
        return $this->vcard;
    }
}
