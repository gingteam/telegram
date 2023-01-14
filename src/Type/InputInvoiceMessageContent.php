<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents the content of an invoice message to be sent as the result of an inline query.
 */
class InputInvoiceMessageContent implements InputMessageContentInterface
{
    /**
     * @param string         $title
     * @param string         $description
     * @param string         $payload
     * @param string         $provider_token
     * @param string         $currency
     * @param LabeledPrice[] $prices
     * @param int|null       $max_tip_amount
     * @param int[]|null     $suggested_tip_amounts
     * @param string|null    $provider_data
     * @param string|null    $photo_url
     * @param int|null       $photo_size
     * @param int|null       $photo_width
     * @param int|null       $photo_height
     * @param bool|null      $need_name
     * @param bool|null      $need_phone_number
     * @param bool|null      $need_email
     * @param bool|null      $need_shipping_address
     * @param bool|null      $send_phone_number_to_provider
     * @param bool|null      $send_email_to_provider
     * @param bool|null      $is_flexible
     */
    public function __construct(
        private $title,
        private $description,
        private $payload,
        private $provider_token,
        private $currency,
        private $prices,
        private $max_tip_amount = null,
        private $suggested_tip_amounts = null,
        private $provider_data = null,
        private $photo_url = null,
        private $photo_size = null,
        private $photo_width = null,
        private $photo_height = null,
        private $need_name = null,
        private $need_phone_number = null,
        private $need_email = null,
        private $need_shipping_address = null,
        private $send_phone_number_to_provider = null,
        private $send_email_to_provider = null,
        private $is_flexible = null,
    ) {
    }

    /**
     * Product name, 1-32 characters.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Product description, 1-255 characters.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use for your internal processes.
     */
    public function getPayload(): string
    {
        return $this->payload;
    }

    /**
     * Payment provider token, obtained via @BotFather.
     */
    public function getProviderToken(): string
    {
        return $this->provider_token;
    }

    /**
     * Three-letter ISO 4217 currency code, see more on currencies.
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.).
     *
     * @return LabeledPrice[]
     */
    public function getPrices(): array
    {
        return $this->prices;
    }

    /**
     * Optional. The maximum accepted amount for tips in the smallest units of the currency (integer, not float/double). For example, for a maximum tip of US$ 1.45 pass max_tip_amount = 145. See the exp parameter in currencies.json, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0.
     */
    public function getMaxTipAmount(): ?int
    {
        return $this->max_tip_amount;
    }

    /**
     * Optional. A JSON-serialized array of suggested amounts of tip in the smallest units of the currency (integer, not float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed max_tip_amount.
     *
     * @return int[]|null
     */
    public function getSuggestedTipAmounts(): ?array
    {
        return $this->suggested_tip_amounts;
    }

    /**
     * Optional. A JSON-serialized object for data about the invoice, which will be shared with the payment provider. A detailed description of the required fields should be provided by the payment provider.
     */
    public function getProviderData(): ?string
    {
        return $this->provider_data;
    }

    /**
     * Optional. URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service.
     */
    public function getPhotoUrl(): ?string
    {
        return $this->photo_url;
    }

    /**
     * Optional. Photo size in bytes.
     */
    public function getPhotoSize(): ?int
    {
        return $this->photo_size;
    }

    /**
     * Optional. Photo width.
     */
    public function getPhotoWidth(): ?int
    {
        return $this->photo_width;
    }

    /**
     * Optional. Photo height.
     */
    public function getPhotoHeight(): ?int
    {
        return $this->photo_height;
    }

    /**
     * Optional. Pass True if you require the user's full name to complete the order.
     */
    public function getNeedName(): ?bool
    {
        return $this->need_name;
    }

    /**
     * Optional. Pass True if you require the user's phone number to complete the order.
     */
    public function getNeedPhoneNumber(): ?bool
    {
        return $this->need_phone_number;
    }

    /**
     * Optional. Pass True if you require the user's email address to complete the order.
     */
    public function getNeedEmail(): ?bool
    {
        return $this->need_email;
    }

    /**
     * Optional. Pass True if you require the user's shipping address to complete the order.
     */
    public function getNeedShippingAddress(): ?bool
    {
        return $this->need_shipping_address;
    }

    /**
     * Optional. Pass True if the user's phone number should be sent to provider.
     */
    public function getSendPhoneNumberToProvider(): ?bool
    {
        return $this->send_phone_number_to_provider;
    }

    /**
     * Optional. Pass True if the user's email address should be sent to provider.
     */
    public function getSendEmailToProvider(): ?bool
    {
        return $this->send_email_to_provider;
    }

    /**
     * Optional. Pass True if the final price depends on the shipping method.
     */
    public function getIsFlexible(): ?bool
    {
        return $this->is_flexible;
    }
}
