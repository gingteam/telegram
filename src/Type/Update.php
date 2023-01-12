<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents an incoming update.At most one of the optional parameters can be present in any given update.
 */
class Update
{
    /**
     * @param int                     $update_id
     * @param Message|null            $message
     * @param Message|null            $edited_message
     * @param Message|null            $channel_post
     * @param Message|null            $edited_channel_post
     * @param InlineQuery|null        $inline_query
     * @param ChosenInlineResult|null $chosen_inline_result
     * @param CallbackQuery|null      $callback_query
     * @param ShippingQuery|null      $shipping_query
     * @param PreCheckoutQuery|null   $pre_checkout_query
     * @param Poll|null               $poll
     * @param PollAnswer|null         $poll_answer
     * @param ChatMemberUpdated|null  $my_chat_member
     * @param ChatMemberUpdated|null  $chat_member
     * @param ChatJoinRequest|null    $chat_join_request
     */
    public function __construct(
        private $update_id,
        private $message = null,
        private $edited_message = null,
        private $channel_post = null,
        private $edited_channel_post = null,
        private $inline_query = null,
        private $chosen_inline_result = null,
        private $callback_query = null,
        private $shipping_query = null,
        private $pre_checkout_query = null,
        private $poll = null,
        private $poll_answer = null,
        private $my_chat_member = null,
        private $chat_member = null,
        private $chat_join_request = null,
    ) {
    }

    /**
     * The update's unique identifier. Update identifiers start from a certain positive number and increase sequentially. This ID becomes especially handy if you're using webhooks, since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order. If there are no new updates for at least a week, then identifier of the next update will be chosen randomly instead of sequentially.
     */
    public function getUpdateId(): int
    {
        return $this->update_id;
    }

    /**
     * Optional. New incoming message of any kind - text, photo, sticker, etc.
     */
    public function getMessage(): ?Message
    {
        return $this->message;
    }

    /**
     * Optional. New version of a message that is known to the bot and was edited.
     */
    public function getEditedMessage(): ?Message
    {
        return $this->edited_message;
    }

    /**
     * Optional. New incoming channel post of any kind - text, photo, sticker, etc.
     */
    public function getChannelPost(): ?Message
    {
        return $this->channel_post;
    }

    /**
     * Optional. New version of a channel post that is known to the bot and was edited.
     */
    public function getEditedChannelPost(): ?Message
    {
        return $this->edited_channel_post;
    }

    /**
     * Optional. New incoming inline query.
     */
    public function getInlineQuery(): ?InlineQuery
    {
        return $this->inline_query;
    }

    /**
     * Optional. The result of an inline query that was chosen by a user and sent to their chat partner. Please see our documentation on the feedback collecting for details on how to enable these updates for your bot.
     */
    public function getChosenInlineResult(): ?ChosenInlineResult
    {
        return $this->chosen_inline_result;
    }

    /**
     * Optional. New incoming callback query.
     */
    public function getCallbackQuery(): ?CallbackQuery
    {
        return $this->callback_query;
    }

    /**
     * Optional. New incoming shipping query. Only for invoices with flexible price.
     */
    public function getShippingQuery(): ?ShippingQuery
    {
        return $this->shipping_query;
    }

    /**
     * Optional. New incoming pre-checkout query. Contains full information about checkout.
     */
    public function getPreCheckoutQuery(): ?PreCheckoutQuery
    {
        return $this->pre_checkout_query;
    }

    /**
     * Optional. New poll state. Bots receive only updates about stopped polls and polls, which are sent by the bot.
     */
    public function getPoll(): ?Poll
    {
        return $this->poll;
    }

    /**
     * Optional. A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were sent by the bot itself.
     */
    public function getPollAnswer(): ?PollAnswer
    {
        return $this->poll_answer;
    }

    /**
     * Optional. The bot's chat member status was updated in a chat. For private chats, this update is received only when the bot is blocked or unblocked by the user.
     */
    public function getMyChatMember(): ?ChatMemberUpdated
    {
        return $this->my_chat_member;
    }

    /**
     * Optional. A chat member's status was updated in a chat. The bot must be an administrator in the chat and must explicitly specify “chat_member” in the list of allowed_updates to receive these updates.
     */
    public function getChatMember(): ?ChatMemberUpdated
    {
        return $this->chat_member;
    }

    /**
     * Optional. A request to join the chat has been sent. The bot must have the can_invite_users administrator right in the chat to receive these updates.
     */
    public function getChatJoinRequest(): ?ChatJoinRequest
    {
        return $this->chat_join_request;
    }
}
