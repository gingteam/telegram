<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents an issue in an unspecified place. The error is considered resolved when new data is added.
 */
class PassportElementErrorUnspecified implements PassportElementErrorInterface
{
    /**
     * @param string $source
     * @param string $type
     * @param string $element_hash
     * @param string $message
     */
    public function __construct(
        private $source,
        private $type,
        private $element_hash,
        private $message,
    ) {
    }

    /**
     * Error source, must be unspecified.
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * Type of element of the user's Telegram Passport which has the issue.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Base64-encoded element hash.
     */
    public function getElementHash(): string
    {
        return $this->element_hash;
    }

    /**
     * Error message.
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}
