<?php

namespace GingTeam\Telegram\Type;

class Response
{
    /**
     * @param bool                                                                                                                                                                                                                                                                          $ok
     * @param BotCommand[]|ChatMemberInterface[]|GameHighScore[]|Message[]|Sticker[]|Update[]|Chat|ChatInviteLink|ChatMemberInterface|ChatAdministratorRights|File|ForumTopic|MenuButtonInterface|Message|MessageId|Poll|StickerSet|User|UserProfilePhotos|WebhookInfo|bool|int|string|null $result
     * @param int|null                                                                                                                                                                                                                                                                      $error_code
     * @param string|null                                                                                                                                                                                                                                                                   $description
     */
    public function __construct(
        private $ok,
        private $result = null,
        private $error_code = null,
        private $description = null,
    ) {
    }

    public function success(): bool
    {
        return $this->ok;
    }

    /**
     * @return BotCommand[]|ChatMemberInterface[]|GameHighScore[]|Message[]|Sticker[]|Update[]|Chat|ChatInviteLink|ChatMemberInterface|ChatAdministratorRights|File|ForumTopic|MenuButtonInterface|Message|MessageId|Poll|StickerSet|User|UserProfilePhotos|WebhookInfo|bool|int|string|null
     */
    public function getResult()
    {
        return $this->result;
    }

    public function getErrorCode(): ?int
    {
        return $this->error_code;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }
}
