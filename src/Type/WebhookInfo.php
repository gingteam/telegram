<?php

namespace GingTeam\Telegram\Type;

/**
 * Describes the current status of a webhook.
 */
class WebhookInfo
{
    /**
     * @param string        $url
     * @param bool          $has_custom_certificate
     * @param int           $pending_update_count
     * @param string|null   $ip_address
     * @param int|null      $last_error_date
     * @param string|null   $last_error_message
     * @param int|null      $last_synchronization_error_date
     * @param int|null      $max_connections
     * @param string[]|null $allowed_updates
     */
    public function __construct(
        private $url,
        private $has_custom_certificate,
        private $pending_update_count,
        private $ip_address = null,
        private $last_error_date = null,
        private $last_error_message = null,
        private $last_synchronization_error_date = null,
        private $max_connections = null,
        private $allowed_updates = null,
    ) {
    }

    /**
     * Webhook URL, may be empty if webhook is not set up.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * True, if a custom certificate was provided for webhook certificate checks.
     */
    public function getHasCustomCertificate(): bool
    {
        return $this->has_custom_certificate;
    }

    /**
     * Number of updates awaiting delivery.
     */
    public function getPendingUpdateCount(): int
    {
        return $this->pending_update_count;
    }

    /**
     * Optional. Currently used webhook IP address.
     */
    public function getIpAddress(): ?string
    {
        return $this->ip_address;
    }

    /**
     * Optional. Unix time for the most recent error that happened when trying to deliver an update via webhook.
     */
    public function getLastErrorDate(): ?int
    {
        return $this->last_error_date;
    }

    /**
     * Optional. Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook.
     */
    public function getLastErrorMessage(): ?string
    {
        return $this->last_error_message;
    }

    /**
     * Optional. Unix time of the most recent error that happened when trying to synchronize available updates with Telegram datacenters.
     */
    public function getLastSynchronizationErrorDate(): ?int
    {
        return $this->last_synchronization_error_date;
    }

    /**
     * Optional. The maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery.
     */
    public function getMaxConnections(): ?int
    {
        return $this->max_connections;
    }

    /**
     * Optional. A list of update types the bot is subscribed to. Defaults to all update types except chat_member.
     *
     * @return string[]|null
     */
    public function getAllowedUpdates(): ?array
    {
        return $this->allowed_updates;
    }
}
