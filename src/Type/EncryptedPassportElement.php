<?php

namespace GingTeam\Telegram\Type;

/**
 * Describes documents or other Telegram Passport elements shared with the bot by the user.
 */
class EncryptedPassportElement
{
    /**
     * @param string              $type
     * @param string              $hash
     * @param string|null         $data
     * @param string|null         $phone_number
     * @param string|null         $email
     * @param PassportFile[]|null $files
     * @param PassportFile|null   $front_side
     * @param PassportFile|null   $reverse_side
     * @param PassportFile|null   $selfie
     * @param PassportFile[]|null $translation
     */
    public function __construct(
        private $type,
        private $hash,
        private $data = null,
        private $phone_number = null,
        private $email = null,
        private $files = null,
        private $front_side = null,
        private $reverse_side = null,
        private $selfie = null,
        private $translation = null,
    ) {
    }

    /**
     * Element type. One of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”, “phone_number”, “email”.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Base64-encoded element hash for using in PassportElementErrorUnspecified.
     */
    public function getHash(): string
    {
        return $this->hash;
    }

    /**
     * Optional. Base64-encoded encrypted Telegram Passport element data provided by the user, available for “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport” and “address” types. Can be decrypted and verified using the accompanying EncryptedCredentials.
     */
    public function getData(): ?string
    {
        return $this->data;
    }

    /**
     * Optional. User's verified phone number, available only for “phone_number” type.
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phone_number;
    }

    /**
     * Optional. User's verified email address, available only for “email” type.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Optional. Array of encrypted files with documents provided by the user, available for “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying EncryptedCredentials.
     *
     * @return PassportFile[]|null
     */
    public function getFiles(): ?array
    {
        return $this->files;
    }

    /**
     * Optional. Encrypted file with the front side of the document, provided by the user. Available for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying EncryptedCredentials.
     */
    public function getFrontSide(): ?PassportFile
    {
        return $this->front_side;
    }

    /**
     * Optional. Encrypted file with the reverse side of the document, provided by the user. Available for “driver_license” and “identity_card”. The file can be decrypted and verified using the accompanying EncryptedCredentials.
     */
    public function getReverseSide(): ?PassportFile
    {
        return $this->reverse_side;
    }

    /**
     * Optional. Encrypted file with the selfie of the user holding a document, provided by the user; available for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying EncryptedCredentials.
     */
    public function getSelfie(): ?PassportFile
    {
        return $this->selfie;
    }

    /**
     * Optional. Array of encrypted files with translated versions of documents provided by the user. Available if requested for “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying EncryptedCredentials.
     *
     * @return PassportFile[]|null
     */
    public function getTranslation(): ?array
    {
        return $this->translation;
    }
}
