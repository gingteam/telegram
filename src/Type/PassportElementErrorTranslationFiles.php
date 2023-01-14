<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents an issue with the translated version of a document. The error is considered resolved when a file with the document translation change.
 */
class PassportElementErrorTranslationFiles implements PassportElementErrorInterface
{
    /**
     * @param string   $source
     * @param string   $type
     * @param string[] $file_hashes
     * @param string   $message
     */
    public function __construct(
        private $source,
        private $type,
        private $file_hashes,
        private $message,
    ) {
    }

    /**
     * Error source, must be translation_files.
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
     * List of base64-encoded file hashes.
     *
     * @return string[]
     */
    public function getFileHashes(): array
    {
        return $this->file_hashes;
    }

    /**
     * Error message.
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}
