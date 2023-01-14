<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents one button of an inline keyboard. You must use exactly one of the optional fields.
 */
class InlineKeyboardButton
{
    /**
     * @param string                     $text
     * @param string|null                $url
     * @param string|null                $callback_data
     * @param WebAppInfo|null            $web_app
     * @param LoginUrl|null              $login_url
     * @param string|null                $switch_inline_query
     * @param string|null                $switch_inline_query_current_chat
     * @param CallbackGameInterface|null $callback_game
     * @param bool|null                  $pay
     */
    public function __construct(
        private $text,
        private $url = null,
        private $callback_data = null,
        private $web_app = null,
        private $login_url = null,
        private $switch_inline_query = null,
        private $switch_inline_query_current_chat = null,
        private $callback_game = null,
        private $pay = null,
    ) {
    }

    /**
     * Label text on the button.
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * Optional. HTTP or tg:// URL to be opened when the button is pressed. Links tg://user?id=<user_id> can be used to mention a user by their ID without using a username, if this is allowed by their privacy settings.
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Optional. Data to be sent in a callback query to the bot when button is pressed, 1-64 bytes.
     */
    public function getCallbackData(): ?string
    {
        return $this->callback_data;
    }

    /**
     * Optional. Description of the Web App that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method answerWebAppQuery. Available only in private chats between a user and the bot.
     */
    public function getWebApp(): ?WebAppInfo
    {
        return $this->web_app;
    }

    /**
     * Optional. An HTTPS URL used to automatically authorize the user. Can be used as a replacement for the Telegram Login Widget.
     */
    public function getLoginUrl(): ?LoginUrl
    {
        return $this->login_url;
    }

    /**
     * Optional. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot's username and the specified inline query in the input field. May be empty, in which case just the bot's username will be inserted.Note: This offers an easy way for users to start using your bot in inline mode when they are currently in a private chat with it. Especially useful when combined with switch_pm… actions - in this case the user will be automatically returned to the chat they switched from, skipping the chat selection screen.
     */
    public function getSwitchInlineQuery(): ?string
    {
        return $this->switch_inline_query;
    }

    /**
     * Optional. If set, pressing the button will insert the bot's username and the specified inline query in the current chat's input field. May be empty, in which case only the bot's username will be inserted.This offers a quick way for the user to open your bot in inline mode in the same chat - good for selecting something from multiple options.
     */
    public function getSwitchInlineQueryCurrentChat(): ?string
    {
        return $this->switch_inline_query_current_chat;
    }

    /**
     * Optional. Description of the game that will be launched when the user presses the button.NOTE: This type of button must always be the first button in the first row.
     */
    public function getCallbackGame(): ?CallbackGameInterface
    {
        return $this->callback_game;
    }

    /**
     * Optional. Specify True, to send a Pay button.NOTE: This type of button must always be the first button in the first row and can only be used in invoice messages.
     */
    public function getPay(): ?bool
    {
        return $this->pay;
    }
}
