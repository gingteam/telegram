<?php

namespace GingTeam\Telegram\Type;

/**
 * Describes why a request was unsuccessful.
 */
class ResponseParameters
{
    /**
     * @param int|null $migrate_to_chat_id
     * @param int|null $retry_after
     */
    public function __construct(
        private $migrate_to_chat_id = null,
        private $retry_after = null,
    ) {
    }

    /**
     * Optional. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     */
    public function getMigrateToChatId(): ?int
    {
        return $this->migrate_to_chat_id;
    }

    /**
     * Optional. In case of exceeding flood control, the number of seconds left to wait before the request can be repeated.
     */
    public function getRetryAfter(): ?int
    {
        return $this->retry_after;
    }
}
