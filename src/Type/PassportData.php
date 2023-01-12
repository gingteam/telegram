<?php

namespace GingTeam\Telegram\Type;

/**
 * Describes Telegram Passport data shared with the bot by the user.
 */
class PassportData
{
    /**
     * @param EncryptedPassportElement[] $data
     * @param EncryptedCredentials       $credentials
     */
    public function __construct(
        private $data,
        private $credentials,
    ) {
    }

    /**
     * Array with information about documents and other Telegram Passport elements that was shared with the bot.
     *
     * @return EncryptedPassportElement[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * Encrypted credentials required to decrypt the data.
     */
    public function getCredentials(): EncryptedCredentials
    {
        return $this->credentials;
    }
}
