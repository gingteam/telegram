<?php

namespace GingTeam\Telegram\Type;

use Symfony\Component\Serializer\Annotation\DiscriminatorMap;

/**
 * This object contains information about one member of a chat. Currently, the following 6 types of chat members are supported:.
 */
#[DiscriminatorMap(typeProperty: 'status', mapping: [
    'creator' => ChatMemberOwner::class,
    'administrator' => ChatMemberAdministrator::class,
    'member' => ChatMemberMember::class,
    'restricted' => ChatMemberRestricted::class,
    'left' => ChatMemberLeft::class,
    'kicked' => ChatMemberBanned::class,
])]
interface ChatMemberInterface
{
}
