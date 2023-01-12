<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents an issue with one of the files that constitute the translation of a document. The error is considered resolved when the file changes.
 */
class PassportElementErrorTranslationFile implements PassportElementError
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
     * Error source, must be translation_file.
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * Type of element of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Base64-encoded file hash.
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
