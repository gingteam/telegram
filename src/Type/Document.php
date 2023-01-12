<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents a general file (as opposed to photos, voice messages and audio files).
 */
class Document
{
    /**
     * @param string         $file_id
     * @param string         $file_unique_id
     * @param PhotoSize|null $thumb
     * @param string|null    $file_name
     * @param string|null    $mime_type
     * @param int|null       $file_size
     */
    public function __construct(
        private $file_id,
        private $file_unique_id,
        private $thumb = null,
        private $file_name = null,
        private $mime_type = null,
        private $file_size = null,
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
     * Optional. Document thumbnail as defined by sender.
     */
    public function getThumb(): ?PhotoSize
    {
        return $this->thumb;
    }

    /**
     * Optional. Original filename as defined by sender.
     */
    public function getFileName(): ?string
    {
        return $this->file_name;
    }

    /**
     * Optional. MIME type of the file as defined by sender.
     */
    public function getMimeType(): ?string
    {
        return $this->mime_type;
    }

    /**
     * Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
     */
    public function getFileSize(): ?int
    {
        return $this->file_size;
    }
}
