<?php

namespace GingTeam\Telegram;

use GingTeam\Telegram\Type\BotCommand;
use GingTeam\Telegram\Type\BotCommandScopeInterface;
use GingTeam\Telegram\Type\Chat;
use GingTeam\Telegram\Type\ChatAdministratorRights;
use GingTeam\Telegram\Type\ChatInviteLink;
use GingTeam\Telegram\Type\ChatMemberInterface;
use GingTeam\Telegram\Type\ChatPermissions;
use GingTeam\Telegram\Type\File;
use GingTeam\Telegram\Type\ForceReply;
use GingTeam\Telegram\Type\ForumTopic;
use GingTeam\Telegram\Type\GameHighScore;
use GingTeam\Telegram\Type\InlineKeyboardMarkup;
use GingTeam\Telegram\Type\InlineQueryResultInterface;
use GingTeam\Telegram\Type\InputFileInterface;
use GingTeam\Telegram\Type\InputMediaAudio;
use GingTeam\Telegram\Type\InputMediaDocument;
use GingTeam\Telegram\Type\InputMediaInterface;
use GingTeam\Telegram\Type\InputMediaPhoto;
use GingTeam\Telegram\Type\InputMediaVideo;
use GingTeam\Telegram\Type\LabeledPrice;
use GingTeam\Telegram\Type\MaskPosition;
use GingTeam\Telegram\Type\MenuButtonInterface;
use GingTeam\Telegram\Type\Message;
use GingTeam\Telegram\Type\MessageEntity;
use GingTeam\Telegram\Type\MessageId;
use GingTeam\Telegram\Type\PassportElementErrorInterface;
use GingTeam\Telegram\Type\Poll;
use GingTeam\Telegram\Type\ReplyKeyboardMarkup;
use GingTeam\Telegram\Type\ReplyKeyboardRemove;
use GingTeam\Telegram\Type\SentWebAppMessage;
use GingTeam\Telegram\Type\ShippingOption;
use GingTeam\Telegram\Type\Sticker;
use GingTeam\Telegram\Type\StickerSet;
use GingTeam\Telegram\Type\Update;
use GingTeam\Telegram\Type\User;
use GingTeam\Telegram\Type\UserProfilePhotos;
use GingTeam\Telegram\Type\WebhookInfo;

trait TelegramTrait
{
    abstract public function sendRequest(string $name, array $data = []);

    /**
     * Use this method to receive incoming updates using long polling (wiki). Returns an Array of Update objects.
     *
     * @param string[]|null $allowed_updates
     *
     * @return Update[]
     */
    public function getUpdates(?int $offset = null, ?int $limit = null, ?int $timeout = null, ?array $allowed_updates = null): array
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to specify a URL and receive incoming updates via an outgoing webhook. Whenever there is an update for the bot, we will send an HTTPS POST request to the specified URL, containing a JSON-serialized Update. In case of an unsuccessful request, we will give up after a reasonable amount of attempts. Returns True on success.
     * If you'd like to make sure that the webhook was set by you, you can specify secret data in the parameter secret_token. If specified, the request will contain a header "X-Telegram-Bot-Api-Secret-Token" with the secret token as content.
     *
     * @param string[]|null $allowed_updates
     */
    public function setWebhook(
        string $url,
        ?InputFileInterface $certificate = null,
        ?string $ip_address = null,
        ?int $max_connections = null,
        ?array $allowed_updates = null,
        ?bool $drop_pending_updates = null,
        ?string $secret_token = null,
    ): bool {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to remove webhook integration if you decide to switch back to getUpdates. Returns True on success.
     */
    public function deleteWebhook(?bool $drop_pending_updates = null): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to get current webhook status. Requires no parameters. On success, returns a WebhookInfo object. If the bot is using getUpdates, will return an object with the url field empty.
     */
    public function getWebhookInfo(): WebhookInfo
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * A simple method for testing your bot's authentication token. Requires no parameters. Returns basic information about the bot in form of a User object.
     */
    public function getMe(): User
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to log out from the cloud Bot API server before launching the bot locally. You must log out the bot before running it locally, otherwise there is no guarantee that the bot will receive updates. After a successful call, you can immediately log in on a local server, but will not be able to log in back to the cloud Bot API server for 10 minutes. Returns True on success. Requires no parameters.
     */
    public function logOut(): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to close the bot instance before moving it from one local server to another. You need to delete the webhook before calling this method to ensure that the bot isn't launched again after server restart. The method will return error 429 in the first 10 minutes after the bot is launched. Returns True on success. Requires no parameters.
     */
    public function close(): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to send text messages. On success, the sent Message is returned.
     *
     * @param int|string                                                                   $chat_id
     * @param MessageEntity[]|null                                                         $entities
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup
     */
    public function sendMessage(
        $chat_id,
        string $text,
        ?int $message_thread_id = null,
        ?string $parse_mode = null,
        ?array $entities = null,
        ?bool $disable_web_page_preview = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        $reply_markup = null,
    ): Message {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to forward messages of any kind. Service messages can't be forwarded. On success, the sent Message is returned.
     *
     * @param int|string $chat_id
     * @param int|string $from_chat_id
     */
    public function forwardMessage(
        $chat_id,
        $from_chat_id,
        int $message_id,
        ?int $message_thread_id = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
    ): Message {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to copy messages of any kind. Service messages and invoice messages can't be copied. A quiz poll can be copied only if the value of the field correct_option_id is known to the bot. The method is analogous to the method forwardMessage, but the copied message doesn't have a link to the original message. Returns the MessageId of the sent message on success.
     *
     * @param int|string                                                                   $chat_id
     * @param int|string                                                                   $from_chat_id
     * @param MessageEntity[]|null                                                         $caption_entities
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup
     */
    public function copyMessage(
        $chat_id,
        $from_chat_id,
        int $message_id,
        ?int $message_thread_id = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        $reply_markup = null,
    ): MessageId {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to send photos. On success, the sent Message is returned.
     *
     * @param int|string                                                                   $chat_id
     * @param InputFileInterface|string                                                    $photo
     * @param MessageEntity[]|null                                                         $caption_entities
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup
     */
    public function sendPhoto(
        $chat_id,
        $photo,
        ?int $message_thread_id = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?bool $has_spoiler = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        $reply_markup = null,
    ): Message {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to send audio files, if you want Telegram clients to display them in the music player. Your audio must be in the .MP3 or .M4A format. On success, the sent Message is returned. Bots can currently send audio files of up to 50 MB in size, this limit may be changed in the future.
     * For sending voice messages, use the sendVoice method instead.
     *
     * @param int|string                                                                   $chat_id
     * @param InputFileInterface|string                                                    $audio
     * @param MessageEntity[]|null                                                         $caption_entities
     * @param InputFileInterface|string|null                                               $thumb
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup
     */
    public function sendAudio(
        $chat_id,
        $audio,
        ?int $message_thread_id = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?int $duration = null,
        ?string $performer = null,
        ?string $title = null,
        $thumb = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        $reply_markup = null,
    ): Message {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to send general files. On success, the sent Message is returned. Bots can currently send files of any type of up to 50 MB in size, this limit may be changed in the future.
     *
     * @param int|string                                                                   $chat_id
     * @param InputFileInterface|string                                                    $document
     * @param InputFileInterface|string|null                                               $thumb
     * @param MessageEntity[]|null                                                         $caption_entities
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup
     */
    public function sendDocument(
        $chat_id,
        $document,
        ?int $message_thread_id = null,
        $thumb = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?bool $disable_content_type_detection = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        $reply_markup = null,
    ): Message {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to send video files, Telegram clients support MPEG4 videos (other formats may be sent as Document). On success, the sent Message is returned. Bots can currently send video files of up to 50 MB in size, this limit may be changed in the future.
     *
     * @param int|string                                                                   $chat_id
     * @param InputFileInterface|string                                                    $video
     * @param InputFileInterface|string|null                                               $thumb
     * @param MessageEntity[]|null                                                         $caption_entities
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup
     */
    public function sendVideo(
        $chat_id,
        $video,
        ?int $message_thread_id = null,
        ?int $duration = null,
        ?int $width = null,
        ?int $height = null,
        $thumb = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?bool $has_spoiler = null,
        ?bool $supports_streaming = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        $reply_markup = null,
    ): Message {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to send animation files (GIF or H.264/MPEG-4 AVC video without sound). On success, the sent Message is returned. Bots can currently send animation files of up to 50 MB in size, this limit may be changed in the future.
     *
     * @param int|string                                                                   $chat_id
     * @param InputFileInterface|string                                                    $animation
     * @param InputFileInterface|string|null                                               $thumb
     * @param MessageEntity[]|null                                                         $caption_entities
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup
     */
    public function sendAnimation(
        $chat_id,
        $animation,
        ?int $message_thread_id = null,
        ?int $duration = null,
        ?int $width = null,
        ?int $height = null,
        $thumb = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?bool $has_spoiler = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        $reply_markup = null,
    ): Message {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to send audio files, if you want Telegram clients to display the file as a playable voice message. For this to work, your audio must be in an .OGG file encoded with OPUS (other formats may be sent as Audio or Document). On success, the sent Message is returned. Bots can currently send voice messages of up to 50 MB in size, this limit may be changed in the future.
     *
     * @param int|string                                                                   $chat_id
     * @param InputFileInterface|string                                                    $voice
     * @param MessageEntity[]|null                                                         $caption_entities
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup
     */
    public function sendVoice(
        $chat_id,
        $voice,
        ?int $message_thread_id = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?int $duration = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        $reply_markup = null,
    ): Message {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * As of v.4.0, Telegram clients support rounded square MPEG4 videos of up to 1 minute long. Use this method to send video messages. On success, the sent Message is returned.
     *
     * @param int|string                                                                   $chat_id
     * @param InputFileInterface|string                                                    $video_note
     * @param InputFileInterface|string|null                                               $thumb
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup
     */
    public function sendVideoNote(
        $chat_id,
        $video_note,
        ?int $message_thread_id = null,
        ?int $duration = null,
        ?int $length = null,
        $thumb = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        $reply_markup = null,
    ): Message {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to send a group of photos, videos, documents or audios as an album. Documents and audio files can be only grouped in an album with messages of the same type. On success, an array of Messages that were sent is returned.
     *
     * @param int|string                                                                 $chat_id
     * @param InputMediaAudio[]|InputMediaDocument[]|InputMediaPhoto[]|InputMediaVideo[] $media
     *
     * @return Message[]
     */
    public function sendMediaGroup(
        $chat_id,
        array $media,
        ?int $message_thread_id = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
    ): array {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to send point on the map. On success, the sent Message is returned.
     *
     * @param int|string                                                                   $chat_id
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup
     */
    public function sendLocation(
        $chat_id,
        float $latitude,
        float $longitude,
        ?int $message_thread_id = null,
        ?float $horizontal_accuracy = null,
        ?int $live_period = null,
        ?int $heading = null,
        ?int $proximity_alert_radius = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        $reply_markup = null,
    ): Message {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to edit live location messages. A location can be edited until its live_period expires or editing is explicitly disabled by a call to stopMessageLiveLocation. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned.
     *
     * @param int|string|null $chat_id
     *
     * @return Message|bool
     */
    public function editMessageLiveLocation(
        float $latitude,
        float $longitude,
        $chat_id = null,
        ?int $message_id = null,
        ?string $inline_message_id = null,
        ?float $horizontal_accuracy = null,
        ?int $heading = null,
        ?int $proximity_alert_radius = null,
        ?InlineKeyboardMarkup $reply_markup = null,
    ) {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to stop updating a live location message before live_period expires. On success, if the message is not an inline message, the edited Message is returned, otherwise True is returned.
     *
     * @param int|string|null $chat_id
     *
     * @return Message|bool
     */
    public function stopMessageLiveLocation(
        $chat_id = null,
        ?int $message_id = null,
        ?string $inline_message_id = null,
        ?InlineKeyboardMarkup $reply_markup = null,
    ) {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to send information about a venue. On success, the sent Message is returned.
     *
     * @param int|string                                                                   $chat_id
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup
     */
    public function sendVenue(
        $chat_id,
        float $latitude,
        float $longitude,
        string $title,
        string $address,
        ?int $message_thread_id = null,
        ?string $foursquare_id = null,
        ?string $foursquare_type = null,
        ?string $google_place_id = null,
        ?string $google_place_type = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        $reply_markup = null,
    ): Message {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to send phone contacts. On success, the sent Message is returned.
     *
     * @param int|string                                                                   $chat_id
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup
     */
    public function sendContact(
        $chat_id,
        string $phone_number,
        string $first_name,
        ?int $message_thread_id = null,
        ?string $last_name = null,
        ?string $vcard = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        $reply_markup = null,
    ): Message {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to send a native poll. On success, the sent Message is returned.
     *
     * @param int|string                                                                   $chat_id
     * @param string[]                                                                     $options
     * @param MessageEntity[]|null                                                         $explanation_entities
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup
     */
    public function sendPoll(
        $chat_id,
        string $question,
        array $options,
        ?int $message_thread_id = null,
        ?bool $is_anonymous = null,
        ?string $type = null,
        ?bool $allows_multiple_answers = null,
        ?int $correct_option_id = null,
        ?string $explanation = null,
        ?string $explanation_parse_mode = null,
        ?array $explanation_entities = null,
        ?int $open_period = null,
        ?int $close_date = null,
        ?bool $is_closed = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        $reply_markup = null,
    ): Message {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to send an animated emoji that will display a random value. On success, the sent Message is returned.
     *
     * @param int|string                                                                   $chat_id
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup
     */
    public function sendDice(
        $chat_id,
        ?int $message_thread_id = null,
        ?string $emoji = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        $reply_markup = null,
    ): Message {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method when you need to tell the user that something is happening on the bot's side. The status is set for 5 seconds or less (when a message arrives from your bot, Telegram clients clear its typing status). Returns True on success.
     * We only recommend using this method when a response from the bot will take a noticeable amount of time to arrive.
     *
     * @param int|string $chat_id
     */
    public function sendChatAction($chat_id, string $action, ?int $message_thread_id = null): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to get a list of profile pictures for a user. Returns a UserProfilePhotos object.
     */
    public function getUserProfilePhotos(int $user_id, ?int $offset = null, ?int $limit = null): UserProfilePhotos
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to get basic information about a file and prepare it for downloading. For the moment, bots can download files of up to 20MB in size. On success, a File object is returned. The file can then be downloaded via the link https://api.telegram.org/file/bot<token>/<file_path>, where <file_path> is taken from the response. It is guaranteed that the link will be valid for at least 1 hour. When the link expires, a new one can be requested by calling getFile again.
     * Note: This function may not preserve the original file name and MIME type. You should save the file's MIME type and name (if available) when the File object is received.
     */
    public function getFile(string $file_id): File
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to ban a user in a group, a supergroup or a channel. In the case of supergroups and channels, the user will not be able to return to the chat on their own using invite links, etc., unless unbanned first. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns True on success.
     *
     * @param int|string $chat_id
     */
    public function banChatMember($chat_id, int $user_id, ?int $until_date = null, ?bool $revoke_messages = null): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to unban a previously banned user in a supergroup or channel. The user will not return to the group or channel automatically, but will be able to join via link, etc. The bot must be an administrator for this to work. By default, this method guarantees that after the call the user is not a member of the chat, but will be able to join it. So if the user is a member of the chat they will also be removed from the chat. If you don't want this, use the parameter only_if_banned. Returns True on success.
     *
     * @param int|string $chat_id
     */
    public function unbanChatMember($chat_id, int $user_id, ?bool $only_if_banned = null): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to restrict a user in a supergroup. The bot must be an administrator in the supergroup for this to work and must have the appropriate administrator rights. Pass True for all permissions to lift restrictions from a user. Returns True on success.
     *
     * @param int|string $chat_id
     */
    public function restrictChatMember($chat_id, int $user_id, ChatPermissions $permissions, ?int $until_date = null): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to promote or demote a user in a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Pass False for all boolean parameters to demote a user. Returns True on success.
     *
     * @param int|string $chat_id
     */
    public function promoteChatMember(
        $chat_id,
        int $user_id,
        ?bool $is_anonymous = null,
        ?bool $can_manage_chat = null,
        ?bool $can_post_messages = null,
        ?bool $can_edit_messages = null,
        ?bool $can_delete_messages = null,
        ?bool $can_manage_video_chats = null,
        ?bool $can_restrict_members = null,
        ?bool $can_promote_members = null,
        ?bool $can_change_info = null,
        ?bool $can_invite_users = null,
        ?bool $can_pin_messages = null,
        ?bool $can_manage_topics = null,
    ): bool {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to set a custom title for an administrator in a supergroup promoted by the bot. Returns True on success.
     *
     * @param int|string $chat_id
     */
    public function setChatAdministratorCustomTitle($chat_id, int $user_id, string $custom_title): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to ban a channel chat in a supergroup or a channel. Until the chat is unbanned, the owner of the banned chat won't be able to send messages on behalf of any of their channels. The bot must be an administrator in the supergroup or channel for this to work and must have the appropriate administrator rights. Returns True on success.
     *
     * @param int|string $chat_id
     */
    public function banChatSenderChat($chat_id, int $sender_chat_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to unban a previously banned channel chat in a supergroup or channel. The bot must be an administrator for this to work and must have the appropriate administrator rights. Returns True on success.
     *
     * @param int|string $chat_id
     */
    public function unbanChatSenderChat($chat_id, int $sender_chat_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to set default chat permissions for all members. The bot must be an administrator in the group or a supergroup for this to work and must have the can_restrict_members administrator rights. Returns True on success.
     *
     * @param int|string $chat_id
     */
    public function setChatPermissions($chat_id, ChatPermissions $permissions): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to generate a new primary invite link for a chat; any previously generated primary link is revoked. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the new invite link as String on success.
     *
     * @param int|string $chat_id
     */
    public function exportChatInviteLink($chat_id): string
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to create an additional invite link for a chat. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. The link can be revoked using the method revokeChatInviteLink. Returns the new invite link as ChatInviteLink object.
     *
     * @param int|string $chat_id
     */
    public function createChatInviteLink(
        $chat_id,
        ?string $name = null,
        ?int $expire_date = null,
        ?int $member_limit = null,
        ?bool $creates_join_request = null,
    ): ChatInviteLink {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to edit a non-primary invite link created by the bot. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the edited invite link as a ChatInviteLink object.
     *
     * @param int|string $chat_id
     */
    public function editChatInviteLink(
        $chat_id,
        string $invite_link,
        ?string $name = null,
        ?int $expire_date = null,
        ?int $member_limit = null,
        ?bool $creates_join_request = null,
    ): ChatInviteLink {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to revoke an invite link created by the bot. If the primary link is revoked, a new link is automatically generated. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the revoked invite link as ChatInviteLink object.
     *
     * @param int|string $chat_id
     */
    public function revokeChatInviteLink($chat_id, string $invite_link): ChatInviteLink
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to approve a chat join request. The bot must be an administrator in the chat for this to work and must have the can_invite_users administrator right. Returns True on success.
     *
     * @param int|string $chat_id
     */
    public function approveChatJoinRequest($chat_id, int $user_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to decline a chat join request. The bot must be an administrator in the chat for this to work and must have the can_invite_users administrator right. Returns True on success.
     *
     * @param int|string $chat_id
     */
    public function declineChatJoinRequest($chat_id, int $user_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to set a new profile photo for the chat. Photos can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns True on success.
     *
     * @param int|string $chat_id
     */
    public function setChatPhoto($chat_id, InputFileInterface $photo): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to delete a chat photo. Photos can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns True on success.
     *
     * @param int|string $chat_id
     */
    public function deleteChatPhoto($chat_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to change the title of a chat. Titles can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns True on success.
     *
     * @param int|string $chat_id
     */
    public function setChatTitle($chat_id, string $title): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to change the description of a group, a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns True on success.
     *
     * @param int|string $chat_id
     */
    public function setChatDescription($chat_id, ?string $description = null): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to add a message to the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can_pin_messages' administrator right in a supergroup or 'can_edit_messages' administrator right in a channel. Returns True on success.
     *
     * @param int|string $chat_id
     */
    public function pinChatMessage($chat_id, int $message_id, ?bool $disable_notification = null): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to remove a message from the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can_pin_messages' administrator right in a supergroup or 'can_edit_messages' administrator right in a channel. Returns True on success.
     *
     * @param int|string $chat_id
     */
    public function unpinChatMessage($chat_id, ?int $message_id = null): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to clear the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can_pin_messages' administrator right in a supergroup or 'can_edit_messages' administrator right in a channel. Returns True on success.
     *
     * @param int|string $chat_id
     */
    public function unpinAllChatMessages($chat_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method for your bot to leave a group, supergroup or channel. Returns True on success.
     *
     * @param int|string $chat_id
     */
    public function leaveChat($chat_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to get up to date information about the chat (current name of the user for one-on-one conversations, current username of a user, group or channel, etc.). Returns a Chat object on success.
     *
     * @param int|string $chat_id
     */
    public function getChat($chat_id): Chat
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to get a list of administrators in a chat, which aren't bots. Returns an Array of ChatMember objects.
     *
     * @param int|string $chat_id
     *
     * @return ChatMemberInterface[]
     */
    public function getChatAdministrators($chat_id): array
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to get the number of members in a chat. Returns Int on success.
     *
     * @param int|string $chat_id
     */
    public function getChatMemberCount($chat_id): int
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to get information about a member of a chat. The method is guaranteed to work for other users, only if the bot is an administrator in the chat. Returns a ChatMember object on success.
     *
     * @param int|string $chat_id
     */
    public function getChatMember($chat_id, int $user_id): ChatMemberInterface
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to set a new group sticker set for a supergroup. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Use the field can_set_sticker_set optionally returned in getChat requests to check if the bot can use this method. Returns True on success.
     *
     * @param int|string $chat_id
     */
    public function setChatStickerSet($chat_id, string $sticker_set_name): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to delete a group sticker set from a supergroup. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Use the field can_set_sticker_set optionally returned in getChat requests to check if the bot can use this method. Returns True on success.
     *
     * @param int|string $chat_id
     */
    public function deleteChatStickerSet($chat_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to get custom emoji stickers, which can be used as a forum topic icon by any user. Requires no parameters. Returns an Array of Sticker objects.
     *
     * @return Sticker[]
     */
    public function getForumTopicIconStickers(): array
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to create a topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights. Returns information about the created topic as a ForumTopic object.
     *
     * @param int|string $chat_id
     */
    public function createForumTopic($chat_id, string $name, ?int $icon_color = null, ?string $icon_custom_emoji_id = null): ForumTopic
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to edit name and icon of a topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have can_manage_topics administrator rights, unless it is the creator of the topic. Returns True on success.
     *
     * @param int|string $chat_id
     */
    public function editForumTopic($chat_id, int $message_thread_id, ?string $name = null, ?string $icon_custom_emoji_id = null): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to close an open topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights, unless it is the creator of the topic. Returns True on success.
     *
     * @param int|string $chat_id
     */
    public function closeForumTopic($chat_id, int $message_thread_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to reopen a closed topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights, unless it is the creator of the topic. Returns True on success.
     *
     * @param int|string $chat_id
     */
    public function reopenForumTopic($chat_id, int $message_thread_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to delete a forum topic along with all its messages in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_delete_messages administrator rights. Returns True on success.
     *
     * @param int|string $chat_id
     */
    public function deleteForumTopic($chat_id, int $message_thread_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to clear the list of pinned messages in a forum topic. The bot must be an administrator in the chat for this to work and must have the can_pin_messages administrator right in the supergroup. Returns True on success.
     *
     * @param int|string $chat_id
     */
    public function unpinAllForumTopicMessages($chat_id, int $message_thread_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to edit the name of the 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have can_manage_topics administrator rights. Returns True on success.
     *
     * @param int|string $chat_id
     */
    public function editGeneralForumTopic($chat_id, string $name): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to close an open 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights. Returns True on success.
     *
     * @param int|string $chat_id
     */
    public function closeGeneralForumTopic($chat_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to reopen a closed 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights. The topic will be automatically unhidden if it was hidden. Returns True on success.
     *
     * @param int|string $chat_id
     */
    public function reopenGeneralForumTopic($chat_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to hide the 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights. The topic will be automatically closed if it was open. Returns True on success.
     *
     * @param int|string $chat_id
     */
    public function hideGeneralForumTopic($chat_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to unhide the 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the can_manage_topics administrator rights. Returns True on success.
     *
     * @param int|string $chat_id
     */
    public function unhideGeneralForumTopic($chat_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to send answers to callback queries sent from inline keyboards. The answer will be displayed to the user as a notification at the top of the chat screen or as an alert. On success, True is returned.
     */
    public function answerCallbackQuery(
        string $callback_query_id,
        ?string $text = null,
        ?bool $show_alert = null,
        ?string $url = null,
        ?int $cache_time = null,
    ): bool {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to change the list of the bot's commands. See this manual for more details about bot commands. Returns True on success.
     *
     * @param BotCommand[] $commands
     */
    public function setMyCommands(array $commands, ?BotCommandScopeInterface $scope = null, ?string $language_code = null): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to delete the list of the bot's commands for the given scope and user language. After deletion, higher level commands will be shown to affected users. Returns True on success.
     */
    public function deleteMyCommands(?BotCommandScopeInterface $scope = null, ?string $language_code = null): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to get the current list of the bot's commands for the given scope and user language. Returns an Array of BotCommand objects. If commands aren't set, an empty list is returned.
     *
     * @return BotCommand[]
     */
    public function getMyCommands(?BotCommandScopeInterface $scope = null, ?string $language_code = null): array
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to change the bot's menu button in a private chat, or the default menu button. Returns True on success.
     */
    public function setChatMenuButton(?int $chat_id = null, ?MenuButtonInterface $menu_button = null): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to get the current value of the bot's menu button in a private chat, or the default menu button. Returns MenuButton on success.
     */
    public function getChatMenuButton(?int $chat_id = null): MenuButtonInterface
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to change the default administrator rights requested by the bot when it's added as an administrator to groups or channels. These rights will be suggested to users, but they are are free to modify the list before adding the bot. Returns True on success.
     */
    public function setMyDefaultAdministratorRights(?ChatAdministratorRights $rights = null, ?bool $for_channels = null): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to get the current default administrator rights of the bot. Returns ChatAdministratorRights on success.
     */
    public function getMyDefaultAdministratorRights(?bool $for_channels = null): ChatAdministratorRights
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to edit text and game messages. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned.
     *
     * @param int|string|null      $chat_id
     * @param MessageEntity[]|null $entities
     *
     * @return Message|bool
     */
    public function editMessageText(
        string $text,
        $chat_id = null,
        ?int $message_id = null,
        ?string $inline_message_id = null,
        ?string $parse_mode = null,
        ?array $entities = null,
        ?bool $disable_web_page_preview = null,
        ?InlineKeyboardMarkup $reply_markup = null,
    ) {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to edit captions of messages. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned.
     *
     * @param int|string|null      $chat_id
     * @param MessageEntity[]|null $caption_entities
     *
     * @return Message|bool
     */
    public function editMessageCaption(
        $chat_id = null,
        ?int $message_id = null,
        ?string $inline_message_id = null,
        ?string $caption = null,
        ?string $parse_mode = null,
        ?array $caption_entities = null,
        ?InlineKeyboardMarkup $reply_markup = null,
    ) {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to edit animation, audio, document, photo, or video messages. If a message is part of a message album, then it can be edited only to an audio for audio albums, only to a document for document albums and to a photo or a video otherwise. When an inline message is edited, a new file can't be uploaded; use a previously uploaded file via its file_id or specify a URL. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned.
     *
     * @param int|string|null $chat_id
     *
     * @return Message|bool
     */
    public function editMessageMedia(
        InputMediaInterface $media,
        $chat_id = null,
        ?int $message_id = null,
        ?string $inline_message_id = null,
        ?InlineKeyboardMarkup $reply_markup = null,
    ) {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to edit only the reply markup of messages. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned.
     *
     * @param int|string|null $chat_id
     *
     * @return Message|bool
     */
    public function editMessageReplyMarkup(
        $chat_id = null,
        ?int $message_id = null,
        ?string $inline_message_id = null,
        ?InlineKeyboardMarkup $reply_markup = null,
    ) {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to stop a poll which was sent by the bot. On success, the stopped Poll is returned.
     *
     * @param int|string $chat_id
     */
    public function stopPoll($chat_id, int $message_id, ?InlineKeyboardMarkup $reply_markup = null): Poll
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to delete a message, including service messages, with the following limitations:
     * - A message can only be deleted if it was sent less than 48 hours ago.
     * - Service messages about a supergroup, channel, or forum topic creation can't be deleted.
     * - A dice message in a private chat can only be deleted if it was sent more than 24 hours ago.
     * - Bots can delete outgoing messages in private chats, groups, and supergroups.
     * - Bots can delete incoming messages in private chats.
     * - Bots granted can_post_messages permissions can delete outgoing messages in channels.
     * - If the bot is an administrator of a group, it can delete any message there.
     * - If the bot has can_delete_messages permission in a supergroup or a channel, it can delete any message there.
     * Returns True on success.
     *
     * @param int|string $chat_id
     */
    public function deleteMessage($chat_id, int $message_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to send static .WEBP, animated .TGS, or video .WEBM stickers. On success, the sent Message is returned.
     *
     * @param int|string                                                                   $chat_id
     * @param InputFileInterface|string                                                    $sticker
     * @param InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup
     */
    public function sendSticker(
        $chat_id,
        $sticker,
        ?int $message_thread_id = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        $reply_markup = null,
    ): Message {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to get a sticker set. On success, a StickerSet object is returned.
     */
    public function getStickerSet(string $name): StickerSet
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to get information about custom emoji stickers by their identifiers. Returns an Array of Sticker objects.
     *
     * @param string[] $custom_emoji_ids
     *
     * @return Sticker[]
     */
    public function getCustomEmojiStickers(array $custom_emoji_ids): array
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to upload a .PNG file with a sticker for later use in createNewStickerSet and addStickerToSet methods (can be used multiple times). Returns the uploaded File on success.
     */
    public function uploadStickerFile(int $user_id, InputFileInterface $png_sticker): File
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to create a new sticker set owned by a user. The bot will be able to edit the sticker set thus created. You must use exactly one of the fields png_sticker, tgs_sticker, or webm_sticker. Returns True on success.
     *
     * @param InputFileInterface|string|null $png_sticker
     */
    public function createNewStickerSet(
        int $user_id,
        string $name,
        string $title,
        string $emojis,
        $png_sticker = null,
        ?InputFileInterface $tgs_sticker = null,
        ?InputFileInterface $webm_sticker = null,
        ?string $sticker_type = null,
        ?MaskPosition $mask_position = null,
    ): bool {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to add a new sticker to a set created by the bot. You must use exactly one of the fields png_sticker, tgs_sticker, or webm_sticker. Animated stickers can be added to animated sticker sets and only to them. Animated sticker sets can have up to 50 stickers. Static sticker sets can have up to 120 stickers. Returns True on success.
     *
     * @param InputFileInterface|string|null $png_sticker
     */
    public function addStickerToSet(
        int $user_id,
        string $name,
        string $emojis,
        $png_sticker = null,
        ?InputFileInterface $tgs_sticker = null,
        ?InputFileInterface $webm_sticker = null,
        ?MaskPosition $mask_position = null,
    ): bool {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to move a sticker in a set created by the bot to a specific position. Returns True on success.
     */
    public function setStickerPositionInSet(string $sticker, int $position): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to delete a sticker from a set created by the bot. Returns True on success.
     */
    public function deleteStickerFromSet(string $sticker): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to set the thumbnail of a sticker set. Animated thumbnails can be set for animated sticker sets only. Video thumbnails can be set only for video sticker sets only. Returns True on success.
     *
     * @param InputFileInterface|string|null $thumb
     */
    public function setStickerSetThumb(string $name, int $user_id, $thumb = null): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to send answers to an inline query. On success, True is returned.
     * No more than 50 results per query are allowed.
     *
     * @param InlineQueryResultInterface[] $results
     */
    public function answerInlineQuery(
        string $inline_query_id,
        array $results,
        ?int $cache_time = null,
        ?bool $is_personal = null,
        ?string $next_offset = null,
        ?string $switch_pm_text = null,
        ?string $switch_pm_parameter = null,
    ): bool {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to set the result of an interaction with a Web App and send a corresponding message on behalf of the user to the chat from which the query originated. On success, a SentWebAppMessage object is returned.
     */
    public function answerWebAppQuery(string $web_app_query_id, InlineQueryResultInterface $result): SentWebAppMessage
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to send invoices. On success, the sent Message is returned.
     *
     * @param int|string     $chat_id
     * @param LabeledPrice[] $prices
     * @param int[]|null     $suggested_tip_amounts
     */
    public function sendInvoice(
        $chat_id,
        string $title,
        string $description,
        string $payload,
        string $provider_token,
        string $currency,
        array $prices,
        ?int $message_thread_id = null,
        ?int $max_tip_amount = null,
        ?array $suggested_tip_amounts = null,
        ?string $start_parameter = null,
        ?string $provider_data = null,
        ?string $photo_url = null,
        ?int $photo_size = null,
        ?int $photo_width = null,
        ?int $photo_height = null,
        ?bool $need_name = null,
        ?bool $need_phone_number = null,
        ?bool $need_email = null,
        ?bool $need_shipping_address = null,
        ?bool $send_phone_number_to_provider = null,
        ?bool $send_email_to_provider = null,
        ?bool $is_flexible = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        ?InlineKeyboardMarkup $reply_markup = null,
    ): Message {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to create a link for an invoice. Returns the created invoice link as String on success.
     *
     * @param LabeledPrice[] $prices
     * @param int[]|null     $suggested_tip_amounts
     */
    public function createInvoiceLink(
        string $title,
        string $description,
        string $payload,
        string $provider_token,
        string $currency,
        array $prices,
        ?int $max_tip_amount = null,
        ?array $suggested_tip_amounts = null,
        ?string $provider_data = null,
        ?string $photo_url = null,
        ?int $photo_size = null,
        ?int $photo_width = null,
        ?int $photo_height = null,
        ?bool $need_name = null,
        ?bool $need_phone_number = null,
        ?bool $need_email = null,
        ?bool $need_shipping_address = null,
        ?bool $send_phone_number_to_provider = null,
        ?bool $send_email_to_provider = null,
        ?bool $is_flexible = null,
    ): string {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * If you sent an invoice requesting a shipping address and the parameter is_flexible was specified, the Bot API will send an Update with a shipping_query field to the bot. Use this method to reply to shipping queries. On success, True is returned.
     *
     * @param ShippingOption[]|null $shipping_options
     */
    public function answerShippingQuery(string $shipping_query_id, bool $ok, ?array $shipping_options = null, ?string $error_message = null): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Once the user has confirmed their payment and shipping details, the Bot API sends the final confirmation in the form of an Update with the field pre_checkout_query. Use this method to respond to such pre-checkout queries. On success, True is returned. Note: The Bot API must receive an answer within 10 seconds after the pre-checkout query was sent.
     */
    public function answerPreCheckoutQuery(string $pre_checkout_query_id, bool $ok, ?string $error_message = null): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Informs a user that some of the Telegram Passport elements they provided contains errors. The user will not be able to re-submit their Passport to you until the errors are fixed (the contents of the field for which you returned the error must change). Returns True on success.
     * Use this if the data submitted by the user doesn't satisfy the standards your service requires for any reason. For example, if a birthday date seems invalid, a submitted document is blurry, a scan shows evidence of tampering, etc. Supply some details in the error message to make sure the user knows how to correct the issues.
     *
     * @param PassportElementErrorInterface[] $errors
     */
    public function setPassportDataErrors(int $user_id, array $errors): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to send a game. On success, the sent Message is returned.
     */
    public function sendGame(
        int $chat_id,
        string $game_short_name,
        ?int $message_thread_id = null,
        ?bool $disable_notification = null,
        ?bool $protect_content = null,
        ?int $reply_to_message_id = null,
        ?bool $allow_sending_without_reply = null,
        ?InlineKeyboardMarkup $reply_markup = null,
    ): Message {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to set the score of the specified user in a game message. On success, if the message is not an inline message, the Message is returned, otherwise True is returned. Returns an error, if the new score is not greater than the user's current score in the chat and force is False.
     *
     * @return Message|bool
     */
    public function setGameScore(
        int $user_id,
        int $score,
        ?bool $force = null,
        ?bool $disable_edit_message = null,
        ?int $chat_id = null,
        ?int $message_id = null,
        ?string $inline_message_id = null,
    ) {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * Use this method to get data for high score tables. Will return the score of the specified user and several of their neighbors in a game. Returns an Array of GameHighScore objects.
     *
     * @return GameHighScore[]
     */
    public function getGameHighScores(int $user_id, ?int $chat_id = null, ?int $message_id = null, ?string $inline_message_id = null): array
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }
}
