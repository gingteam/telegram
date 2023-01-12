<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents an audio file to be treated as music by the Telegram clients.
 */
class Audio
{
    /**
     * @param string         $file_id
     * @param string         $file_unique_id
     * @param int            $duration
     * @param string|null    $performer
     * @param string|null    $title
     * @param string|null    $file_name
     * @param string|null    $mime_type
     * @param int|null       $file_size
     * @param PhotoSize|null $thumb
     */
    public function __construct(
        private $file_id,
        private $file_unique_id,
        private $duration,
        private $performer = null,
        private $title = null,
        private $file_name = null,
        private $mime_type = null,
        private $file_size = null,
        private $thumb = null,
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
     * Duration of the audio in seconds as defined by sender.
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * Optional. Performer of the audio as defined by sender or by audio tags.
     */
    public function getPerformer(): ?string
    {
        return $this->performer;
    }

    /**
     * Optional. Title of the audio as defined by sender or by audio tags.
     */
    public function getTitle(): ?string
    {
        return $this->title;
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

    /**
     * Optional. Thumbnail of the album cover to which the music file belongs.
     */
    public function getThumb(): ?PhotoSize
    {
        return $this->thumb;
    }
}
