<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents a file ready to be downloaded. The file can be downloaded via the link https://api.telegram.org/file/bot<token>/<file_path>. It is guaranteed that the link will be valid for at least 1 hour. When the link expires, a new one can be requested by calling getFile.
 */
class File
{
    /**
     * @param string      $file_id
     * @param string      $file_unique_id
     * @param int|null    $file_size
     * @param string|null $file_path
     */
    public function __construct(
        private $file_id,
        private $file_unique_id,
        private $file_size = null,
        private $file_path = null,
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
     * Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
     */
    public function getFileSize(): ?int
    {
        return $this->file_size;
    }

    /**
     * Optional. File path. Use https://api.telegram.org/file/bot<token>/<file_path> to get the file.
     */
    public function getFilePath(): ?string
    {
        return $this->file_path;
    }
}
