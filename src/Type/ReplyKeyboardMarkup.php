<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents a custom keyboard with reply options (see Introduction to bots for details and examples).
 */
class ReplyKeyboardMarkup
{
    /**
     * @param KeyboardButton[][] $keyboard
     * @param bool|null          $resize_keyboard
     * @param bool|null          $one_time_keyboard
     * @param string|null        $input_field_placeholder
     * @param bool|null          $selective
     */
    public function __construct(
        private $keyboard,
        private $resize_keyboard = null,
        private $one_time_keyboard = null,
        private $input_field_placeholder = null,
        private $selective = null,
    ) {
    }

    /**
     * Array of button rows, each represented by an Array of KeyboardButton objects.
     *
     * @return KeyboardButton[][]
     */
    public function getKeyboard(): array
    {
        return $this->keyboard;
    }

    /**
     * Optional. Requests clients to resize the keyboard vertically for optimal fit (e.g., make the keyboard smaller if there are just two rows of buttons). Defaults to false, in which case the custom keyboard is always of the same height as the app's standard keyboard.
     */
    public function getResizeKeyboard(): ?bool
    {
        return $this->resize_keyboard;
    }

    /**
     * Optional. Requests clients to hide the keyboard as soon as it's been used. The keyboard will still be available, but clients will automatically display the usual letter-keyboard in the chat - the user can press a special button in the input field to see the custom keyboard again. Defaults to false.
     */
    public function getOneTimeKeyboard(): ?bool
    {
        return $this->one_time_keyboard;
    }

    /**
     * Optional. The placeholder to be shown in the input field when the keyboard is active; 1-64 characters.
     */
    public function getInputFieldPlaceholder(): ?string
    {
        return $this->input_field_placeholder;
    }

    /**
     * Optional. Use this parameter if you want to show the keyboard to specific users only. Targets: 1) users that are @mentioned in the text of the Message object; 2) if the bot's message is a reply (has reply_to_message_id), sender of the original message.Example: A user requests to change the bot's language, bot replies to the request with a keyboard to select the new language. Other users in the group don't see the keyboard.
     */
    public function getSelective(): ?bool
    {
        return $this->selective;
    }
}
