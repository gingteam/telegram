<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents a video message (available in Telegram apps as of v.4.0).
 */
class VideoNote
{
    /**
     * @param string         $file_id
     * @param string         $file_unique_id
     * @param int            $length
     * @param int            $duration
     * @param PhotoSize|null $thumb
     * @param int|null       $file_size
     */
    public function __construct(
        private $file_id,
        private $file_unique_id,
        private $length,
        private $duration,
        private $thumb = null,
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
     * Video width and height (diameter of the video message) as defined by sender.
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * Duration of the video in seconds as defined by sender.
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * Optional. Video thumbnail.
     */
    public function getThumb(): ?PhotoSize
    {
        return $this->thumb;
    }

    /**
     * Optional. File size in bytes.
     */
    public function getFileSize(): ?int
    {
        return $this->file_size;
    }
}
