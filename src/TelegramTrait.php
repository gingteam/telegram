<?php

namespace GingTeam\Telegram;

use GingTeam\Telegram\Type\BotCommand;
use GingTeam\Telegram\Type\BotCommandScope;
use GingTeam\Telegram\Type\Chat;
use GingTeam\Telegram\Type\ChatAdministratorRights;
use GingTeam\Telegram\Type\ChatInviteLink;
use GingTeam\Telegram\Type\ChatMember;
use GingTeam\Telegram\Type\ChatPermissions;
use GingTeam\Telegram\Type\File;
use GingTeam\Telegram\Type\ForceReply;
use GingTeam\Telegram\Type\ForumTopic;
use GingTeam\Telegram\Type\GameHighScore;
use GingTeam\Telegram\Type\InlineKeyboardMarkup;
use GingTeam\Telegram\Type\InlineQueryResult;
use GingTeam\Telegram\Type\InputFile;
use GingTeam\Telegram\Type\InputMedia;
use GingTeam\Telegram\Type\InputMediaAudio;
use GingTeam\Telegram\Type\InputMediaDocument;
use GingTeam\Telegram\Type\InputMediaPhoto;
use GingTeam\Telegram\Type\InputMediaVideo;
use GingTeam\Telegram\Type\LabeledPrice;
use GingTeam\Telegram\Type\MaskPosition;
use GingTeam\Telegram\Type\MenuButton;
use GingTeam\Telegram\Type\Message;
use GingTeam\Telegram\Type\MessageEntity;
use GingTeam\Telegram\Type\MessageId;
use GingTeam\Telegram\Type\PassportElementError;
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
    private static $mapping = [
        'getUpdates' => '\GingTeam\Telegram\Type\Update[]',
        'getWebhookInfo' => '\GingTeam\Telegram\Type\WebhookInfo',
        'getMe' => '\GingTeam\Telegram\Type\User',
        'sendMessage' => '\GingTeam\Telegram\Type\Message',
        'forwardMessage' => '\GingTeam\Telegram\Type\Message',
        'copyMessage' => '\GingTeam\Telegram\Type\MessageId',
        'sendPhoto' => '\GingTeam\Telegram\Type\Message',
        'sendAudio' => '\GingTeam\Telegram\Type\Message',
        'sendDocument' => '\GingTeam\Telegram\Type\Message',
        'sendVideo' => '\GingTeam\Telegram\Type\Message',
        'sendAnimation' => '\GingTeam\Telegram\Type\Message',
        'sendVoice' => '\GingTeam\Telegram\Type\Message',
        'sendVideoNote' => '\GingTeam\Telegram\Type\Message',
        'sendMediaGroup' => '\GingTeam\Telegram\Type\Message[]',
        'sendLocation' => '\GingTeam\Telegram\Type\Message',
        'editMessageLiveLocation' => '\GingTeam\Telegram\Type\Message',
        'stopMessageLiveLocation' => '\GingTeam\Telegram\Type\Message',
        'sendVenue' => '\GingTeam\Telegram\Type\Message',
        'sendContact' => '\GingTeam\Telegram\Type\Message',
        'sendPoll' => '\GingTeam\Telegram\Type\Message',
        'sendDice' => '\GingTeam\Telegram\Type\Message',
        'getUserProfilePhotos' => '\GingTeam\Telegram\Type\UserProfilePhotos',
        'getFile' => '\GingTeam\Telegram\Type\File',
        'createChatInviteLink' => '\GingTeam\Telegram\Type\ChatInviteLink',
        'editChatInviteLink' => '\GingTeam\Telegram\Type\ChatInviteLink',
        'revokeChatInviteLink' => '\GingTeam\Telegram\Type\ChatInviteLink',
        'getChat' => '\GingTeam\Telegram\Type\Chat',
        'getChatAdministrators' => '\GingTeam\Telegram\Type\ChatMember[]',
        'getChatMember' => '\GingTeam\Telegram\Type\ChatMember',
        'getForumTopicIconStickers' => '\GingTeam\Telegram\Type\Sticker[]',
        'createForumTopic' => '\GingTeam\Telegram\Type\ForumTopic',
        'getMyCommands' => '\GingTeam\Telegram\Type\BotCommand[]',
        'getChatMenuButton' => '\GingTeam\Telegram\Type\MenuButton',
        'getMyDefaultAdministratorRights' => '\GingTeam\Telegram\Type\ChatAdministratorRights',
        'editMessageText' => '\GingTeam\Telegram\Type\Message',
        'editMessageCaption' => '\GingTeam\Telegram\Type\Message',
        'editMessageMedia' => '\GingTeam\Telegram\Type\Message',
        'editMessageReplyMarkup' => '\GingTeam\Telegram\Type\Message',
        'stopPoll' => '\GingTeam\Telegram\Type\Poll',
        'sendSticker' => '\GingTeam\Telegram\Type\Message',
        'getStickerSet' => '\GingTeam\Telegram\Type\StickerSet',
        'getCustomEmojiStickers' => '\GingTeam\Telegram\Type\Sticker[]',
        'uploadStickerFile' => '\GingTeam\Telegram\Type\File',
        'answerWebAppQuery' => '\GingTeam\Telegram\Type\SentWebAppMessage',
        'sendInvoice' => '\GingTeam\Telegram\Type\Message',
        'sendGame' => '\GingTeam\Telegram\Type\Message',
        'setGameScore' => '\GingTeam\Telegram\Type\Message',
        'getGameHighScores' => '\GingTeam\Telegram\Type\GameHighScore[]',
    ];

    abstract public function sendRequest(string $name, array $data = []);

    /**
     * @param string[]|null $allowed_updates
     *
     * @return Update[]
     */
    public function getUpdates(?int $offset = null, ?int $limit = null, ?int $timeout = null, ?array $allowed_updates = null): array
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param string[]|null $allowed_updates
     */
    public function setWebhook(
        string $url,
        ?InputFile $certificate = null,
        ?string $ip_address = null,
        ?int $max_connections = null,
        ?array $allowed_updates = null,
        ?bool $drop_pending_updates = null,
        ?string $secret_token = null,
    ): bool {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    public function deleteWebhook(?bool $drop_pending_updates = null): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    public function getWebhookInfo(): WebhookInfo
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    public function getMe(): User
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    public function logOut(): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    public function close(): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
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
     * @param int|string                                                                   $chat_id
     * @param InputFile|string                                                             $photo
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
     * @param int|string                                                                   $chat_id
     * @param InputFile|string                                                             $audio
     * @param MessageEntity[]|null                                                         $caption_entities
     * @param InputFile|string|null                                                        $thumb
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
     * @param int|string                                                                   $chat_id
     * @param InputFile|string                                                             $document
     * @param InputFile|string|null                                                        $thumb
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
     * @param int|string                                                                   $chat_id
     * @param InputFile|string                                                             $video
     * @param InputFile|string|null                                                        $thumb
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
     * @param int|string                                                                   $chat_id
     * @param InputFile|string                                                             $animation
     * @param InputFile|string|null                                                        $thumb
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
     * @param int|string                                                                   $chat_id
     * @param InputFile|string                                                             $voice
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
     * @param int|string                                                                   $chat_id
     * @param InputFile|string                                                             $video_note
     * @param InputFile|string|null                                                        $thumb
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
     * @param int|string $chat_id
     */
    public function sendChatAction($chat_id, string $action, ?int $message_thread_id = null): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    public function getUserProfilePhotos(int $user_id, ?int $offset = null, ?int $limit = null): UserProfilePhotos
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    public function getFile(string $file_id): File
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function banChatMember($chat_id, int $user_id, ?int $until_date = null, ?bool $revoke_messages = null): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function unbanChatMember($chat_id, int $user_id, ?bool $only_if_banned = null): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function restrictChatMember($chat_id, int $user_id, ChatPermissions $permissions, ?int $until_date = null): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
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
     * @param int|string $chat_id
     */
    public function setChatAdministratorCustomTitle($chat_id, int $user_id, string $custom_title): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function banChatSenderChat($chat_id, int $sender_chat_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function unbanChatSenderChat($chat_id, int $sender_chat_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function setChatPermissions($chat_id, ChatPermissions $permissions): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function exportChatInviteLink($chat_id): string
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
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
     * @param int|string $chat_id
     */
    public function revokeChatInviteLink($chat_id, string $invite_link): ChatInviteLink
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function approveChatJoinRequest($chat_id, int $user_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function declineChatJoinRequest($chat_id, int $user_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function setChatPhoto($chat_id, InputFile $photo): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function deleteChatPhoto($chat_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function setChatTitle($chat_id, string $title): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function setChatDescription($chat_id, ?string $description = null): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function pinChatMessage($chat_id, int $message_id, ?bool $disable_notification = null): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function unpinChatMessage($chat_id, ?int $message_id = null): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function unpinAllChatMessages($chat_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function leaveChat($chat_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function getChat($chat_id): Chat
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     *
     * @return ChatMember[]
     */
    public function getChatAdministrators($chat_id): array
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function getChatMemberCount($chat_id): int
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function getChatMember($chat_id, int $user_id): ChatMember
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function setChatStickerSet($chat_id, string $sticker_set_name): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function deleteChatStickerSet($chat_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @return Sticker[]
     */
    public function getForumTopicIconStickers(): array
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function createForumTopic($chat_id, string $name, ?int $icon_color = null, ?string $icon_custom_emoji_id = null): ForumTopic
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function editForumTopic($chat_id, int $message_thread_id, ?string $name = null, ?string $icon_custom_emoji_id = null): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function closeForumTopic($chat_id, int $message_thread_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function reopenForumTopic($chat_id, int $message_thread_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function deleteForumTopic($chat_id, int $message_thread_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function unpinAllForumTopicMessages($chat_id, int $message_thread_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function editGeneralForumTopic($chat_id, string $name): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function closeGeneralForumTopic($chat_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function reopenGeneralForumTopic($chat_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function hideGeneralForumTopic($chat_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function unhideGeneralForumTopic($chat_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

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
     * @param BotCommand[] $commands
     */
    public function setMyCommands(array $commands, ?BotCommandScope $scope = null, ?string $language_code = null): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    public function deleteMyCommands(?BotCommandScope $scope = null, ?string $language_code = null): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @return BotCommand[]
     */
    public function getMyCommands(?BotCommandScope $scope = null, ?string $language_code = null): array
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    public function setChatMenuButton(?int $chat_id = null, ?MenuButton $menu_button = null): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    public function getChatMenuButton(?int $chat_id = null): MenuButton
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    public function setMyDefaultAdministratorRights(?ChatAdministratorRights $rights = null, ?bool $for_channels = null): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    public function getMyDefaultAdministratorRights(?bool $for_channels = null): ChatAdministratorRights
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
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
     * @param int|string|null $chat_id
     *
     * @return Message|bool
     */
    public function editMessageMedia(
        InputMedia $media,
        $chat_id = null,
        ?int $message_id = null,
        ?string $inline_message_id = null,
        ?InlineKeyboardMarkup $reply_markup = null,
    ) {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
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
     * @param int|string $chat_id
     */
    public function stopPoll($chat_id, int $message_id, ?InlineKeyboardMarkup $reply_markup = null): Poll
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string $chat_id
     */
    public function deleteMessage($chat_id, int $message_id): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param int|string                                                                   $chat_id
     * @param InputFile|string                                                             $sticker
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

    public function getStickerSet(string $name): StickerSet
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param string[] $custom_emoji_ids
     *
     * @return Sticker[]
     */
    public function getCustomEmojiStickers(array $custom_emoji_ids): array
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    public function uploadStickerFile(int $user_id, InputFile $png_sticker): File
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param InputFile|string|null $png_sticker
     */
    public function createNewStickerSet(
        int $user_id,
        string $name,
        string $title,
        string $emojis,
        $png_sticker = null,
        ?InputFile $tgs_sticker = null,
        ?InputFile $webm_sticker = null,
        ?string $sticker_type = null,
        ?MaskPosition $mask_position = null,
    ): bool {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param InputFile|string|null $png_sticker
     */
    public function addStickerToSet(
        int $user_id,
        string $name,
        string $emojis,
        $png_sticker = null,
        ?InputFile $tgs_sticker = null,
        ?InputFile $webm_sticker = null,
        ?MaskPosition $mask_position = null,
    ): bool {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    public function setStickerPositionInSet(string $sticker, int $position): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    public function deleteStickerFromSet(string $sticker): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param InputFile|string|null $thumb
     */
    public function setStickerSetThumb(string $name, int $user_id, $thumb = null): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param InlineQueryResult[] $results
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

    public function answerWebAppQuery(string $web_app_query_id, InlineQueryResult $result): SentWebAppMessage
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
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
     * @param ShippingOption[]|null $shipping_options
     */
    public function answerShippingQuery(string $shipping_query_id, bool $ok, ?array $shipping_options = null, ?string $error_message = null): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    public function answerPreCheckoutQuery(string $pre_checkout_query_id, bool $ok, ?string $error_message = null): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

    /**
     * @param PassportElementError[] $errors
     */
    public function setPassportDataErrors(int $user_id, array $errors): bool
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }

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
     * @return GameHighScore[]
     */
    public function getGameHighScores(int $user_id, ?int $chat_id = null, ?int $message_id = null, ?string $inline_message_id = null): array
    {
        return $this->sendRequest(__FUNCTION__, get_defined_vars());
    }
}
