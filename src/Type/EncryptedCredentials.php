<?php

namespace GingTeam\Telegram\Type;

/**
 * Describes data required for decrypting and authenticating EncryptedPassportElement. See the Telegram Passport Documentation for a complete description of the data decryption and authentication processes.
 */
class EncryptedCredentials
{
    /**
     * @param string $data
     * @param string $hash
     * @param string $secret
     */
    public function __construct(
        private $data,
        private $hash,
        private $secret,
    ) {
    }

    /**
     * Base64-encoded encrypted JSON-serialized data with unique user's payload, data hashes and secrets required for EncryptedPassportElement decryption and authentication.
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * Base64-encoded data hash for data authentication.
     */
    public function getHash(): string
    {
        return $this->hash;
    }

    /**
     * Base64-encoded secret, encrypted with the bot's public RSA key, required for data decryption.
     */
    public function getSecret(): string
    {
        return $this->secret;
    }
}
