<?php

namespace GingTeam\Telegram\Type;

/**
 * This object represents a message.
 */
class Message
{
    /**
     * @param int                                $message_id
     * @param int                                $date
     * @param Chat                               $chat
     * @param int|null                           $message_thread_id
     * @param User|null                          $from
     * @param Chat|null                          $sender_chat
     * @param User|null                          $forward_from
     * @param Chat|null                          $forward_from_chat
     * @param int|null                           $forward_from_message_id
     * @param string|null                        $forward_signature
     * @param string|null                        $forward_sender_name
     * @param int|null                           $forward_date
     * @param bool|null                          $is_topic_message
     * @param bool|null                          $is_automatic_forward
     * @param Message|null                       $reply_to_message
     * @param User|null                          $via_bot
     * @param int|null                           $edit_date
     * @param bool|null                          $has_protected_content
     * @param string|null                        $media_group_id
     * @param string|null                        $author_signature
     * @param string|null                        $text
     * @param MessageEntity[]|null               $entities
     * @param Animation|null                     $animation
     * @param Audio|null                         $audio
     * @param Document|null                      $document
     * @param PhotoSize[]|null                   $photo
     * @param Sticker|null                       $sticker
     * @param Video|null                         $video
     * @param VideoNote|null                     $video_note
     * @param Voice|null                         $voice
     * @param string|null                        $caption
     * @param MessageEntity[]|null               $caption_entities
     * @param Contact|null                       $contact
     * @param Dice|null                          $dice
     * @param Game|null                          $game
     * @param Poll|null                          $poll
     * @param Venue|null                         $venue
     * @param Location|null                      $location
     * @param User[]|null                        $new_chat_members
     * @param User|null                          $left_chat_member
     * @param string|null                        $new_chat_title
     * @param PhotoSize[]|null                   $new_chat_photo
     * @param bool|null                          $delete_chat_photo
     * @param bool|null                          $group_chat_created
     * @param bool|null                          $supergroup_chat_created
     * @param bool|null                          $channel_chat_created
     * @param MessageAutoDeleteTimerChanged|null $message_auto_delete_timer_changed
     * @param int|null                           $migrate_to_chat_id
     * @param int|null                           $migrate_from_chat_id
     * @param Message|null                       $pinned_message
     * @param Invoice|null                       $invoice
     * @param SuccessfulPayment|null             $successful_payment
     * @param string|null                        $connected_website
     * @param PassportData|null                  $passport_data
     * @param ProximityAlertTriggered|null       $proximity_alert_triggered
     * @param ForumTopicCreated|null             $forum_topic_created
     * @param ForumTopicClosedInterface|null     $forum_topic_closed
     * @param ForumTopicReopenedInterface|null   $forum_topic_reopened
     * @param VideoChatScheduled|null            $video_chat_scheduled
     * @param VideoChatStartedInterface|null     $video_chat_started
     * @param VideoChatEnded|null                $video_chat_ended
     * @param VideoChatParticipantsInvited|null  $video_chat_participants_invited
     * @param WebAppData|null                    $web_app_data
     * @param InlineKeyboardMarkup|null          $reply_markup
     */
    public function __construct(
        private $message_id,
        private $date,
        private $chat,
        private $message_thread_id = null,
        private $from = null,
        private $sender_chat = null,
        private $forward_from = null,
        private $forward_from_chat = null,
        private $forward_from_message_id = null,
        private $forward_signature = null,
        private $forward_sender_name = null,
        private $forward_date = null,
        private $is_topic_message = null,
        private $is_automatic_forward = null,
        private $reply_to_message = null,
        private $via_bot = null,
        private $edit_date = null,
        private $has_protected_content = null,
        private $media_group_id = null,
        private $author_signature = null,
        private $text = null,
        private $entities = null,
        private $animation = null,
        private $audio = null,
        private $document = null,
        private $photo = null,
        private $sticker = null,
        private $video = null,
        private $video_note = null,
        private $voice = null,
        private $caption = null,
        private $caption_entities = null,
        private $contact = null,
        private $dice = null,
        private $game = null,
        private $poll = null,
        private $venue = null,
        private $location = null,
        private $new_chat_members = null,
        private $left_chat_member = null,
        private $new_chat_title = null,
        private $new_chat_photo = null,
        private $delete_chat_photo = null,
        private $group_chat_created = null,
        private $supergroup_chat_created = null,
        private $channel_chat_created = null,
        private $message_auto_delete_timer_changed = null,
        private $migrate_to_chat_id = null,
        private $migrate_from_chat_id = null,
        private $pinned_message = null,
        private $invoice = null,
        private $successful_payment = null,
        private $connected_website = null,
        private $passport_data = null,
        private $proximity_alert_triggered = null,
        private $forum_topic_created = null,
        private $forum_topic_closed = null,
        private $forum_topic_reopened = null,
        private $video_chat_scheduled = null,
        private $video_chat_started = null,
        private $video_chat_ended = null,
        private $video_chat_participants_invited = null,
        private $web_app_data = null,
        private $reply_markup = null,
    ) {
    }

    /**
     * Unique message identifier inside this chat.
     */
    public function getMessageId(): int
    {
        return $this->message_id;
    }

    /**
     * Date the message was sent in Unix time.
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * Conversation the message belongs to.
     */
    public function getChat(): Chat
    {
        return $this->chat;
    }

    /**
     * Optional. Unique identifier of a message thread to which the message belongs; for supergroups only.
     */
    public function getMessageThreadId(): ?int
    {
        return $this->message_thread_id;
    }

    /**
     * Optional. Sender of the message; empty for messages sent to channels. For backward compatibility, the field contains a fake sender user in non-channel chats, if the message was sent on behalf of a chat.
     */
    public function getFrom(): ?User
    {
        return $this->from;
    }

    /**
     * Optional. Sender of the message, sent on behalf of a chat. For example, the channel itself for channel posts, the supergroup itself for messages from anonymous group administrators, the linked channel for messages automatically forwarded to the discussion group. For backward compatibility, the field from contains a fake sender user in non-channel chats, if the message was sent on behalf of a chat.
     */
    public function getSenderChat(): ?Chat
    {
        return $this->sender_chat;
    }

    /**
     * Optional. For forwarded messages, sender of the original message.
     */
    public function getForwardFrom(): ?User
    {
        return $this->forward_from;
    }

    /**
     * Optional. For messages forwarded from channels or from anonymous administrators, information about the original sender chat.
     */
    public function getForwardFromChat(): ?Chat
    {
        return $this->forward_from_chat;
    }

    /**
     * Optional. For messages forwarded from channels, identifier of the original message in the channel.
     */
    public function getForwardFromMessageId(): ?int
    {
        return $this->forward_from_message_id;
    }

    /**
     * Optional. For forwarded messages that were originally sent in channels or by an anonymous chat administrator, signature of the message sender if present.
     */
    public function getForwardSignature(): ?string
    {
        return $this->forward_signature;
    }

    /**
     * Optional. Sender's name for messages forwarded from users who disallow adding a link to their account in forwarded messages.
     */
    public function getForwardSenderName(): ?string
    {
        return $this->forward_sender_name;
    }

    /**
     * Optional. For forwarded messages, date the original message was sent in Unix time.
     */
    public function getForwardDate(): ?int
    {
        return $this->forward_date;
    }

    /**
     * Optional. True, if the message is sent to a forum topic.
     */
    public function getIsTopicMessage(): ?bool
    {
        return $this->is_topic_message;
    }

    /**
     * Optional. True, if the message is a channel post that was automatically forwarded to the connected discussion group.
     */
    public function getIsAutomaticForward(): ?bool
    {
        return $this->is_automatic_forward;
    }

    /**
     * Optional. For replies, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
     */
    public function getReplyToMessage(): ?Message
    {
        return $this->reply_to_message;
    }

    /**
     * Optional. Bot through which the message was sent.
     */
    public function getViaBot(): ?User
    {
        return $this->via_bot;
    }

    /**
     * Optional. Date the message was last edited in Unix time.
     */
    public function getEditDate(): ?int
    {
        return $this->edit_date;
    }

    /**
     * Optional. True, if the message can't be forwarded.
     */
    public function getHasProtectedContent(): ?bool
    {
        return $this->has_protected_content;
    }

    /**
     * Optional. The unique identifier of a media message group this message belongs to.
     */
    public function getMediaGroupId(): ?string
    {
        return $this->media_group_id;
    }

    /**
     * Optional. Signature of the post author for messages in channels, or the custom title of an anonymous group administrator.
     */
    public function getAuthorSignature(): ?string
    {
        return $this->author_signature;
    }

    /**
     * Optional. For text messages, the actual UTF-8 text of the message.
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text.
     *
     * @return MessageEntity[]|null
     */
    public function getEntities(): ?array
    {
        return $this->entities;
    }

    /**
     * Optional. Message is an animation, information about the animation. For backward compatibility, when this field is set, the document field will also be set.
     */
    public function getAnimation(): ?Animation
    {
        return $this->animation;
    }

    /**
     * Optional. Message is an audio file, information about the file.
     */
    public function getAudio(): ?Audio
    {
        return $this->audio;
    }

    /**
     * Optional. Message is a general file, information about the file.
     */
    public function getDocument(): ?Document
    {
        return $this->document;
    }

    /**
     * Optional. Message is a photo, available sizes of the photo.
     *
     * @return PhotoSize[]|null
     */
    public function getPhoto(): ?array
    {
        return $this->photo;
    }

    /**
     * Optional. Message is a sticker, information about the sticker.
     */
    public function getSticker(): ?Sticker
    {
        return $this->sticker;
    }

    /**
     * Optional. Message is a video, information about the video.
     */
    public function getVideo(): ?Video
    {
        return $this->video;
    }

    /**
     * Optional. Message is a video note, information about the video message.
     */
    public function getVideoNote(): ?VideoNote
    {
        return $this->video_note;
    }

    /**
     * Optional. Message is a voice message, information about the file.
     */
    public function getVoice(): ?Voice
    {
        return $this->voice;
    }

    /**
     * Optional. Caption for the animation, audio, document, photo, video or voice.
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption.
     *
     * @return MessageEntity[]|null
     */
    public function getCaptionEntities(): ?array
    {
        return $this->caption_entities;
    }

    /**
     * Optional. Message is a shared contact, information about the contact.
     */
    public function getContact(): ?Contact
    {
        return $this->contact;
    }

    /**
     * Optional. Message is a dice with random value.
     */
    public function getDice(): ?Dice
    {
        return $this->dice;
    }

    /**
     * Optional. Message is a game, information about the game. More about games ».
     */
    public function getGame(): ?Game
    {
        return $this->game;
    }

    /**
     * Optional. Message is a native poll, information about the poll.
     */
    public function getPoll(): ?Poll
    {
        return $this->poll;
    }

    /**
     * Optional. Message is a venue, information about the venue. For backward compatibility, when this field is set, the location field will also be set.
     */
    public function getVenue(): ?Venue
    {
        return $this->venue;
    }

    /**
     * Optional. Message is a shared location, information about the location.
     */
    public function getLocation(): ?Location
    {
        return $this->location;
    }

    /**
     * Optional. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members).
     *
     * @return User[]|null
     */
    public function getNewChatMembers(): ?array
    {
        return $this->new_chat_members;
    }

    /**
     * Optional. A member was removed from the group, information about them (this member may be the bot itself).
     */
    public function getLeftChatMember(): ?User
    {
        return $this->left_chat_member;
    }

    /**
     * Optional. A chat title was changed to this value.
     */
    public function getNewChatTitle(): ?string
    {
        return $this->new_chat_title;
    }

    /**
     * Optional. A chat photo was change to this value.
     *
     * @return PhotoSize[]|null
     */
    public function getNewChatPhoto(): ?array
    {
        return $this->new_chat_photo;
    }

    /**
     * Optional. Service message: the chat photo was deleted.
     */
    public function getDeleteChatPhoto(): ?bool
    {
        return $this->delete_chat_photo;
    }

    /**
     * Optional. Service message: the group has been created.
     */
    public function getGroupChatCreated(): ?bool
    {
        return $this->group_chat_created;
    }

    /**
     * Optional. Service message: the supergroup has been created. This field can't be received in a message coming through updates, because bot can't be a member of a supergroup when it is created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
     */
    public function getSupergroupChatCreated(): ?bool
    {
        return $this->supergroup_chat_created;
    }

    /**
     * Optional. Service message: the channel has been created. This field can't be received in a message coming through updates, because bot can't be a member of a channel when it is created. It can only be found in reply_to_message if someone replies to a very first message in a channel.
     */
    public function getChannelChatCreated(): ?bool
    {
        return $this->channel_chat_created;
    }

    /**
     * Optional. Service message: auto-delete timer settings changed in the chat.
     */
    public function getMessageAutoDeleteTimerChanged(): ?MessageAutoDeleteTimerChanged
    {
        return $this->message_auto_delete_timer_changed;
    }

    /**
     * Optional. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     */
    public function getMigrateToChatId(): ?int
    {
        return $this->migrate_to_chat_id;
    }

    /**
     * Optional. The supergroup has been migrated from a group with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     */
    public function getMigrateFromChatId(): ?int
    {
        return $this->migrate_from_chat_id;
    }

    /**
     * Optional. Specified message was pinned. Note that the Message object in this field will not contain further reply_to_message fields even if it is itself a reply.
     */
    public function getPinnedMessage(): ?Message
    {
        return $this->pinned_message;
    }

    /**
     * Optional. Message is an invoice for a payment, information about the invoice. More about payments ».
     */
    public function getInvoice(): ?Invoice
    {
        return $this->invoice;
    }

    /**
     * Optional. Message is a service message about a successful payment, information about the payment. More about payments ».
     */
    public function getSuccessfulPayment(): ?SuccessfulPayment
    {
        return $this->successful_payment;
    }

    /**
     * Optional. The domain name of the website on which the user has logged in. More about Telegram Login ».
     */
    public function getConnectedWebsite(): ?string
    {
        return $this->connected_website;
    }

    /**
     * Optional. Telegram Passport data.
     */
    public function getPassportData(): ?PassportData
    {
        return $this->passport_data;
    }

    /**
     * Optional. Service message. A user in the chat triggered another user's proximity alert while sharing Live Location.
     */
    public function getProximityAlertTriggered(): ?ProximityAlertTriggered
    {
        return $this->proximity_alert_triggered;
    }

    /**
     * Optional. Service message: forum topic created.
     */
    public function getForumTopicCreated(): ?ForumTopicCreated
    {
        return $this->forum_topic_created;
    }

    /**
     * Optional. Service message: forum topic closed.
     */
    public function getForumTopicClosed(): ?ForumTopicClosedInterface
    {
        return $this->forum_topic_closed;
    }

    /**
     * Optional. Service message: forum topic reopened.
     */
    public function getForumTopicReopened(): ?ForumTopicReopenedInterface
    {
        return $this->forum_topic_reopened;
    }

    /**
     * Optional. Service message: video chat scheduled.
     */
    public function getVideoChatScheduled(): ?VideoChatScheduled
    {
        return $this->video_chat_scheduled;
    }

    /**
     * Optional. Service message: video chat started.
     */
    public function getVideoChatStarted(): ?VideoChatStartedInterface
    {
        return $this->video_chat_started;
    }

    /**
     * Optional. Service message: video chat ended.
     */
    public function getVideoChatEnded(): ?VideoChatEnded
    {
        return $this->video_chat_ended;
    }

    /**
     * Optional. Service message: new participants invited to a video chat.
     */
    public function getVideoChatParticipantsInvited(): ?VideoChatParticipantsInvited
    {
        return $this->video_chat_participants_invited;
    }

    /**
     * Optional. Service message: data sent by a Web App.
     */
    public function getWebAppData(): ?WebAppData
    {
        return $this->web_app_data;
    }

    /**
     * Optional. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons.
     */
    public function getReplyMarkup(): ?InlineKeyboardMarkup
    {
        return $this->reply_markup;
    }
}
