<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represent a user's profile pictures.
 */
class UserProfilePhotos
{
    /**
     * @param int           $total_count
     * @param PhotoSize[][] $photos
     */
    public function __construct(
        private $total_count,
        private $photos,
    ) {
    }

    /**
     * Total number of profile pictures the target user has.
     */
    public function getTotalCount(): int
    {
        return $this->total_count;
    }

    /**
     * Requested profile pictures (in up to 4 sizes each).
     *
     * @return PhotoSize[][]
     */
    public function getPhotos(): array
    {
        return $this->photos;
    }
}
