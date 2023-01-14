<?php

namespace GingTeam\Telegram\Type;

/**
 * Represents a menu button, which launches a Web App.
 */
class MenuButtonWebApp implements MenuButtonInterface
{
    /**
     * @param string     $type
     * @param string     $text
     * @param WebAppInfo $web_app
     */
    public function __construct(
        private $type,
        private $text,
        private $web_app,
    ) {
    }

    /**
     * Type of the button, must be web_app.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Text on the button.
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * Description of the Web App that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method answerWebAppQuery.
     */
    public function getWebApp(): WebAppInfo
    {
        return $this->web_app;
    }
}
