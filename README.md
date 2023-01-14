## Example

```php
<?php

use GingTeam\Telegram\TelegramTrait;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Contracts\HttpClient\HttpClientInterface;

require __DIR__.'/vendor/autoload.php';

class SimpleTelegram
{
    use TelegramTrait;

    public const API_URL = 'https://api.telegram.org';

    private HttpClientInterface $client;

    private Serializer $serializer;

    public function __construct(private string $token, HttpClientInterface $client = null)
    {
        $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader());
        $discriminator = new ClassDiscriminatorFromClassMetadata($classMetadataFactory);
        $this->serializer = new Serializer([
            new ObjectNormalizer(
                classMetadataFactory: $classMetadataFactory,
                propertyTypeExtractor: new ReflectionExtractor(),
                classDiscriminatorResolver: $discriminator,
                defaultContext: [ObjectNormalizer::SKIP_NULL_VALUES => true]
            ),
            new ArrayDenormalizer(),
        ]);
        $this->client = $client ?: HttpClient::create();
    }

    public function sendRequest(string $name, array $data = [])
    {
        $data = $this->serializer->normalize((object) $data);

        $endpoint = sprintf('%s/bot%s/%s', self::API_URL, $this->token, $name);

        $response = $this->client->request('POST', $endpoint, [
            'json' => $data,
        ])->toArray(false);

        if (!$response['ok']) {
            throw new RuntimeException($response['description']);
        }

        $result = $response['result'];

        return is_bool($result)
            ? $result
            : $this->serializer->denormalize($result, static::$mapping[$name]);
    }
}

$telegram = new SimpleTelegram('{token}');

foreach ($telegram->getUpdates() as $update) {
    echo $update?->getMessage()?->getFrom()?->getUsername()."\n";
}
```
