<?php

namespace GingTeam\Telegram\Type;

use Symfony\Component\Serializer\Annotation\DiscriminatorMap;

/**
 * This object describes the bot's menu button in a private chat. It should be one of.
 */
#[DiscriminatorMap(typeProperty: 'type', mapping: [
    'commands' => MenuButtonCommands::class,
    'web_app' => MenuButtonWebApp::class,
    'default' => MenuButtonDefault::class,
])]
interface MenuButtonInterface
{
}
