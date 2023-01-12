<?php

namespace GingTeam\Telegram\Type;

/**
 * Describes a Web App.
 */
class WebAppInfo
{
    /**
     * @param string $url
     */
    public function __construct(private $url)
    {
    }

    /**
     * An HTTPS URL of a Web App to be opened with additional data as specified in Initializing Web Apps.
     */
    public function getUrl(): string
    {
        return $this->url;
    }
}
