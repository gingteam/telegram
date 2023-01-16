## Example

You can implement your own object class:

```php
<?php

use GingTeam\Telegram\SerializerTrait;
use GingTeam\Telegram\TelegramTrait;
use GingTeam\Telegram\Type\Response;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;

require __DIR__.'/vendor/autoload.php';

class SimpleTelegram
{
    use TelegramTrait;
    use SerializerTrait;

    private HttpClientInterface $client;

    public function __construct(private string $token, HttpClientInterface $client = null)
    {
        $this->client = $client ?: HttpClient::create();
    }

    public function sendRequest(string $name, array $data = [])
    {
        $data = $this->getSerializer()->normalize((object) $data);

        $endpoint = sprintf('%s/bot%s/%s', self::BOT_API_URL, $this->token, $name);

        $response = $this->client->request('POST', $endpoint, [
            'json' => $data,
        ])->toArray(false);

        /** @var Response */
        $response = $this->getSerializer()->denormalize($response, Response::class);

        if ($response->getErrorCode()) {
            throw new RuntimeException($response->getDescription());
        }

        return $response->getResult();
    }
}

$telegram = new SimpleTelegram('{token}');

foreach ($telegram->getUpdates() as $update) {
    echo $update?->getMessage()?->getFrom()?->getUsername()."\n";
}
```
