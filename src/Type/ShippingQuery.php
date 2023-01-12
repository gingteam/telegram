<?php

namespace GingTeam\Telegram\Type;

/**
 * This object contains information about an incoming shipping query.
 */
class ShippingQuery
{
    /**
     * @param string          $id
     * @param User            $from
     * @param string          $invoice_payload
     * @param ShippingAddress $shipping_address
     */
    public function __construct(
        private $id,
        private $from,
        private $invoice_payload,
        private $shipping_address,
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
     * Bot specified invoice payload.
     */
    public function getInvoicePayload(): string
    {
        return $this->invoice_payload;
    }

    /**
     * User specified shipping address.
     */
    public function getShippingAddress(): ShippingAddress
    {
        return $this->shipping_address;
    }
}
