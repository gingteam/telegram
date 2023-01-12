<?php

namespace GingTeam\Telegram\Type;

/**
 * This object contains basic information about an invoice.
 */
class Invoice
{
    /**
     * @param string $title
     * @param string $description
     * @param string $start_parameter
     * @param string $currency
     * @param int    $total_amount
     */
    public function __construct(
        private $title,
        private $description,
        private $start_parameter,
        private $currency,
        private $total_amount,
    ) {
    }

    /**
     * Product name.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Product description.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Unique bot deep-linking parameter that can be used to generate this invoice.
     */
    public function getStartParameter(): string
    {
        return $this->start_parameter;
    }

    /**
     * Three-letter ISO 4217 currency code.
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Total price in the smallest units of the currency (integer, not float/double). For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     */
    public function getTotalAmount(): int
    {
        return $this->total_amount;
    }
}
