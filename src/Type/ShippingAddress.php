<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents a shipping address.
 */
class ShippingAddress
{
    /**
     * @param string $country_code
     * @param string $state
     * @param string $city
     * @param string $street_line1
     * @param string $street_line2
     * @param string $post_code
     */
    public function __construct(
        private $country_code,
        private $state,
        private $city,
        private $street_line1,
        private $street_line2,
        private $post_code,
    ) {
    }

    /**
     * Two-letter ISO 3166-1 alpha-2 country code.
     */
    public function getCountryCode(): string
    {
        return $this->country_code;
    }

    /**
     * State, if applicable.
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * City.
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * First line for the address.
     */
    public function getStreetLine1(): string
    {
        return $this->street_line1;
    }

    /**
     * Second line for the address.
     */
    public function getStreetLine2(): string
    {
        return $this->street_line2;
    }

    /**
     * Address post code.
     */
    public function getPostCode(): string
    {
        return $this->post_code;
    }
}
