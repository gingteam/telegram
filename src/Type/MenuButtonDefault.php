<?php

namespace GingTeam\Telegram\Type;

/**
 * Describes that no specific value for the menu button was set.
 */
class MenuButtonDefault implements MenuButtonInterface
{
    /**
     * @param string $type
     */
    public function __construct(private $type)
    {
    }

    /**
     * Type of the button, must be default.
     */
    public function getType(): string
    {
        return $this->type;
    }
}
