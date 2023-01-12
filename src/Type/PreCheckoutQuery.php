<?php

namespace GingTeam\Telegram\Type;

/**
 * This object contains information about an incoming pre-checkout query.
 */
class PreCheckoutQuery
{
    /**
     * @param string         $id
     * @param User           $from
     * @param string         $currency
     * @param int            $total_amount
     * @param string         $invoice_payload
     * @param string|null    $shipping_option_id
     * @param OrderInfo|null $order_info
     */
    public function __construct(
        private $id,
        private $from,
        private $currency,
        private $total_amount,
        private $invoice_payload,
        private $shipping_option_id = null,
        private $order_info = null,
    ) {
    }

    /**
     * Unique query identifier.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * User who sent the query.
     */
    public function getFrom(): User
    {
        return $this->from;
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

    /**
     * Bot specified invoice payload.
     */
    public function getInvoicePayload(): string
    {
        return $this->invoice_payload;
    }

    /**
     * Optional. Identifier of the shipping option chosen by the user.
     */
    public function getShippingOptionId(): ?string
    {
        return $this->shipping_option_id;
    }

    /**
     * Optional. Order information provided by the user.
     */
    public function getOrderInfo(): ?OrderInfo
    {
        return $this->order_info;
    }
}
