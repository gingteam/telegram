<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents an issue with the front side of a document. The error is considered resolved when the file with the front side of the document changes.
 */
class PassportElementErrorFrontSide implements PassportElementErrorInterface
{
    /**
     * @param string $source
     * @param string $type
     * @param string $file_hash
     * @param string $message
     */
    public function __construct(
        private $source,
        private $type,
        private $file_hash,
        private $message,
    ) {
    }

    /**
     * Error source, must be front_side.
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * The section of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Base64-encoded hash of the file with the front side of the document.
     */
    public function getFileHash(): string
    {
        return $this->file_hash;
    }

    /**
     * Error message.
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}
