<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents one shipping option.
 */
class ShippingOption
{
    /**
     * @param string         $id
     * @param string         $title
     * @param LabeledPrice[] $prices
     */
    public function __construct(
        private $id,
        private $title,
        private $prices,
    ) {
    }

    /**
     * Shipping option identifier.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Option title.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * List of price portions.
     *
     * @return LabeledPrice[]
     */
    public function getPrices(): array
    {
        return $this->prices;
    }
}
