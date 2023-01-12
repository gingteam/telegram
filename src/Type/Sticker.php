<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents a sticker.
 */
class Sticker
{
    /**
     * @param string            $file_id
     * @param string            $file_unique_id
     * @param string            $type
     * @param int               $width
     * @param int               $height
     * @param bool              $is_animated
     * @param bool              $is_video
     * @param PhotoSize|null    $thumb
     * @param string|null       $emoji
     * @param string|null       $set_name
     * @param File|null         $premium_animation
     * @param MaskPosition|null $mask_position
     * @param string|null       $custom_emoji_id
     * @param int|null          $file_size
     */
    public function __construct(
        private $file_id,
        private $file_unique_id,
        private $type,
        private $width,
        private $height,
        private $is_animated,
        private $is_video,
        private $thumb = null,
        private $emoji = null,
        private $set_name = null,
        private $premium_animation = null,
        private $mask_position = null,
        private $custom_emoji_id = null,
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
     * Type of the sticker, currently one of “regular”, “mask”, “custom_emoji”. The type of the sticker is independent from its format, which is determined by the fields is_animated and is_video.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sticker width.
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * Sticker height.
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * True, if the sticker is animated.
     */
    public function getIsAnimated(): bool
    {
        return $this->is_animated;
    }

    /**
     * True, if the sticker is a video sticker.
     */
    public function getIsVideo(): bool
    {
        return $this->is_video;
    }

    /**
     * Optional. Sticker thumbnail in the .WEBP or .JPG format.
     */
    public function getThumb(): ?PhotoSize
    {
        return $this->thumb;
    }

    /**
     * Optional. Emoji associated with the sticker.
     */
    public function getEmoji(): ?string
    {
        return $this->emoji;
    }

    /**
     * Optional. Name of the sticker set to which the sticker belongs.
     */
    public function getSetName(): ?string
    {
        return $this->set_name;
    }

    /**
     * Optional. For premium regular stickers, premium animation for the sticker.
     */
    public function getPremiumAnimation(): ?File
    {
        return $this->premium_animation;
    }

    /**
     * Optional. For mask stickers, the position where the mask should be placed.
     */
    public function getMaskPosition(): ?MaskPosition
    {
        return $this->mask_position;
    }

    /**
     * Optional. For custom emoji stickers, unique identifier of the custom emoji.
     */
    public function getCustomEmojiId(): ?string
    {
        return $this->custom_emoji_id;
    }

    /**
     * Optional. File size in bytes.
     */
    public function getFileSize(): ?int
    {
        return $this->file_size;
    }
}
