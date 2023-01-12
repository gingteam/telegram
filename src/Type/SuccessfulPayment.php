<?php

namespace GingTeam\Telegram\Type;

/**
 * This object contains basic information about a successful payment.
 */
class SuccessfulPayment
{
    /**
     * @param string         $currency
     * @param int            $total_amount
     * @param string         $invoice_payload
     * @param string         $telegram_payment_charge_id
     * @param string         $provider_payment_charge_id
     * @param string|null    $shipping_option_id
     * @param OrderInfo|null $order_info
     */
    public function __construct(
        private $currency,
        private $total_amount,
        private $invoice_payload,
        private $telegram_payment_charge_id,
        private $provider_payment_charge_id,
        private $shipping_option_id = null,
        private $order_info = null,
    ) {
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
     * Telegram payment identifier.
     */
    public function getTelegramPaymentChargeId(): string
    {
        return $this->telegram_payment_charge_id;
    }

    /**
     * Provider payment identifier.
     */
    public function getProviderPaymentChargeId(): string
    {
        return $this->provider_payment_charge_id;
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
