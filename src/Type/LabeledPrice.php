<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents a portion of the price for goods or services.
 */
class LabeledPrice
{
    /**
     * @param string $label
     * @param int    $amount
     */
    public function __construct(
        private $label,
        private $amount,
    ) {
    }

    /**
     * Portion label.
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * Price of the product in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     */
    public function getAmount(): int
    {
        return $this->amount;
    }
}
