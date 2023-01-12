<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents information about an order.
 */
class OrderInfo
{
    /**
     * @param string|null          $name
     * @param string|null          $phone_number
     * @param string|null          $email
     * @param ShippingAddress|null $shipping_address
     */
    public function __construct(
        private $name = null,
        private $phone_number = null,
        private $email = null,
        private $shipping_address = null,
    ) {
    }

    /**
     * Optional. User name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Optional. User's phone number.
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phone_number;
    }

    /**
     * Optional. User email.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Optional. User shipping address.
     */
    public function getShippingAddress(): ?ShippingAddress
    {
        return $this->shipping_address;
    }
}
