<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents an invite link for a chat.
 */
class ChatInviteLink
{
    /**
     * @param string      $invite_link
     * @param User        $creator
     * @param bool        $creates_join_request
     * @param bool        $is_primary
     * @param bool        $is_revoked
     * @param string|null $name
     * @param int|null    $expire_date
     * @param int|null    $member_limit
     * @param int|null    $pending_join_request_count
     */
    public function __construct(
        private $invite_link,
        private $creator,
        private $creates_join_request,
        private $is_primary,
        private $is_revoked,
        private $name = null,
        private $expire_date = null,
        private $member_limit = null,
        private $pending_join_request_count = null,
    ) {
    }

    /**
     * The invite link. If the link was created by another chat administrator, then the second part of the link will be replaced with “…”.
     */
    public function getInviteLink(): string
    {
        return $this->invite_link;
    }

    /**
     * Creator of the link.
     */
    public function getCreator(): User
    {
        return $this->creator;
    }

    /**
     * True, if users joining the chat via the link need to be approved by chat administrators.
     */
    public function getCreatesJoinRequest(): bool
    {
        return $this->creates_join_request;
    }

    /**
     * True, if the link is primary.
     */
    public function getIsPrimary(): bool
    {
        return $this->is_primary;
    }

    /**
     * True, if the link is revoked.
     */
    public function getIsRevoked(): bool
    {
        return $this->is_revoked;
    }

    /**
     * Optional. Invite link name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Optional. Point in time (Unix timestamp) when the link will expire or has been expired.
     */
    public function getExpireDate(): ?int
    {
        return $this->expire_date;
    }

    /**
     * Optional. The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999.
     */
    public function getMemberLimit(): ?int
    {
        return $this->member_limit;
    }

    /**
     * Optional. Number of pending join requests created using this link.
     */
    public function getPendingJoinRequestCount(): ?int
    {
        return $this->pending_join_request_count;
    }
}
