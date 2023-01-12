<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents an issue in one of the data fields that was provided by the user. The error is considered resolved when the field's value changes.
 */
class PassportElementErrorDataField implements PassportElementError
{
    /**
     * @param string $source
     * @param string $type
     * @param string $field_name
     * @param string $data_hash
     * @param string $message
     */
    public function __construct(
        private $source,
        private $type,
        private $field_name,
        private $data_hash,
        private $message,
    ) {
    }

    /**
     * Error source, must be data.
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * The section of the user's Telegram Passport which has the error, one of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Name of the data field which has the error.
     */
    public function getFieldName(): string
    {
        return $this->field_name;
    }

    /**
     * Base64-encoded data hash.
     */
    public function getDataHash(): string
    {
        return $this->data_hash;
    }

    /**
     * Error message.
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}
