<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents a chat photo.
 */
class ChatPhoto
{
    /**
     * @param string $small_file_id
     * @param string $small_file_unique_id
     * @param string $big_file_id
     * @param string $big_file_unique_id
     */
    public function __construct(
        private $small_file_id,
        private $small_file_unique_id,
        private $big_file_id,
        private $big_file_unique_id,
    ) {
    }

    /**
     * File identifier of small (160x160) chat photo. This file_id can be used only for photo download and only for as long as the photo is not changed.
     */
    public function getSmallFileId(): string
    {
        return $this->small_file_id;
    }

    /**
     * Unique file identifier of small (160x160) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     */
    public function getSmallFileUniqueId(): string
    {
        return $this->small_file_unique_id;
    }

    /**
     * File identifier of big (640x640) chat photo. This file_id can be used only for photo download and only for as long as the photo is not changed.
     */
    public function getBigFileId(): string
    {
        return $this->big_file_id;
    }

    /**
     * Unique file identifier of big (640x640) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     */
    public function getBigFileUniqueId(): string
    {
        return $this->big_file_unique_id;
    }
}
