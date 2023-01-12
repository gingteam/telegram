<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents a sticker set.
 */
class StickerSet
{
    /**
     * @param string         $name
     * @param string         $title
     * @param string         $sticker_type
     * @param bool           $is_animated
     * @param bool           $is_video
     * @param Sticker[]      $stickers
     * @param PhotoSize|null $thumb
     */
    public function __construct(
        private $name,
        private $title,
        private $sticker_type,
        private $is_animated,
        private $is_video,
        private $stickers,
        private $thumb = null,
    ) {
    }

    /**
     * Sticker set name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sticker set title.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Type of stickers in the set, currently one of “regular”, “mask”, “custom_emoji”.
     */
    public function getStickerType(): string
    {
        return $this->sticker_type;
    }

    /**
     * True, if the sticker set contains animated stickers.
     */
    public function getIsAnimated(): bool
    {
        return $this->is_animated;
    }

    /**
     * True, if the sticker set contains video stickers.
     */
    public function getIsVideo(): bool
    {
        return $this->is_video;
    }

    /**
     * List of all set stickers.
     *
     * @return Sticker[]
     */
    public function getStickers(): array
    {
        return $this->stickers;
    }

    /**
     * Optional. Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format.
     */
    public function getThumb(): ?PhotoSize
    {
        return $this->thumb;
    }
}
