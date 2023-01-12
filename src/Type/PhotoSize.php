<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents one size of a photo or a file / sticker thumbnail.
 */
class PhotoSize
{
    /**
     * @param string   $file_id
     * @param string   $file_unique_id
     * @param int      $width
     * @param int      $height
     * @param int|null $file_size
     */
    public function __construct(
        private $file_id,
        private $file_unique_id,
        private $width,
        private $height,
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
     * Photo width.
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * Photo height.
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * Optional. File size in bytes.
     */
    public function getFileSize(): ?int
    {
        return $this->file_size;
    }
}
