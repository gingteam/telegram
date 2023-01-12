<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents a file uploaded to Telegram Passport. Currently all Telegram Passport files are in JPEG format when decrypted and don't exceed 10MB.
 */
class PassportFile
{
    /**
     * @param string $file_id
     * @param string $file_unique_id
     * @param int    $file_size
     * @param int    $file_date
     */
    public function __construct(
        private $file_id,
        private $file_unique_id,
        private $file_size,
        private $file_date,
    ) {
    }

    /**
     * Identifier for this file, which can be used to download or reuse the file.
     */
    public function getFileId(): string
    {
        return $this->file_id;
    }

    /**
     * Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     */
    public function getFileUniqueId(): string
    {
        return $this->file_unique_id;
    }

    /**
     * File size in bytes.
     */
    public function getFileSize(): int
    {
        return $this->file_size;
    }

    /**
     * Unix time when the file was uploaded.
     */
    public function getFileDate(): int
    {
        return $this->file_date;
    }
}
