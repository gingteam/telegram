<?php

namespace GingTeam\Telegram\Type;

/**
 * Describes an inline message sent by a Web App on behalf of a user.
 */
class SentWebAppMessage
{
    /**
     * @param string|null $inline_message_id
     */
    public function __construct(private $inline_message_id = null)
    {
    }

    /**
     * Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message.
     */
    public function getInlineMessageId(): ?string
    {
        return $this->inline_message_id;
    }
}
