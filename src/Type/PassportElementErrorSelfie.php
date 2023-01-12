<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents an issue with the selfie with a document. The error is considered resolved when the file with the selfie changes.
 */
class PassportElementErrorSelfie implements PassportElementError
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
     * Error source, must be selfie.
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
     * Base64-encoded hash of the file with the selfie.
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
