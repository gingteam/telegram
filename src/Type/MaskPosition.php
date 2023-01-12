<?php

namespace GingTeam\Telegram\Type;

/**
 * This object describes the position on faces where a mask should be placed by default.
 */
class MaskPosition
{
    /**
     * @param string $point
     * @param float  $x_shift
     * @param float  $y_shift
     * @param float  $scale
     */
    public function __construct(
        private $point,
        private $x_shift,
        private $y_shift,
        private $scale,
    ) {
    }

    /**
     * The part of the face relative to which the mask should be placed. One of “forehead”, “eyes”, “mouth”, or “chin”.
     */
    public function getPoint(): string
    {
        return $this->point;
    }

    /**
     * Shift by X-axis measured in widths of the mask scaled to the face size, from left to right. For example, choosing -1.0 will place mask just to the left of the default mask position.
     */
    public function getXShift(): float
    {
        return $this->x_shift;
    }

    /**
     * Shift by Y-axis measured in heights of the mask scaled to the face size, from top to bottom. For example, 1.0 will place the mask just below the default mask position.
     */
    public function getYShift(): float
    {
        return $this->y_shift;
    }

    /**
     * Mask scaling coefficient. For example, 2.0 means double size.
     */
    public function getScale(): float
    {
        return $this->scale;
    }
}
