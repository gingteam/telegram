<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents an issue with a list of scans. The error is considered resolved when the list of files containing the scans changes.
 */
class PassportElementErrorFiles implements PassportElementError
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
     * Error source, must be files.
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * The section of the user's Telegram Passport which has the issue, one of “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”.
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
