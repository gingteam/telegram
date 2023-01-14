<?php

namespace GingTeam\Telegram\Type;

use Symfony\Component\Serializer\Annotation\DiscriminatorMap;

/**
 * This object represents the content of a media message to be sent. It should be one of.
 */
#[DiscriminatorMap(typeProperty: 'type', [
    'photo' => InputMediaPhoto::class,
    'video' => InputMediaVideo::class,
    'animation' => InputMediaAnimation::class,
    'audio' => InputMediaAudio::class,
    'document' => InputMediaDocument::class,
])]
interface InputMediaInterface
{
}
