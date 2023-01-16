<?php

use GingTeam\Telegram\SerializerTrait;
use GingTeam\Telegram\Type\Response;

it('serializer test', function (string $data) {
    $class = new class() {
        use SerializerTrait;

        public function deserializer(string $data)
        {
            return $this->getSerializer()->deserialize($data, Response::class, 'json');
        }
    };

    /** @var Response */
    $response = $class->deserializer($data);

    expect($response)->toBeInstanceOf(Response::class);
    expect($response->getResult())->toBeArray();
})->with([
    '{"ok":true,"result":[{"update_id":940316569,"message":{"message_id":39103,"from":{"id":5805286644,"is_bot":false,"first_name":"Copper Deer","last_name":"Battery"},"chat":{"id":-1001551035196,"title":"#internal","type":"supergroup"},"date":1673753112,"text":"\ud83d\ude42\ud83e\udd79"}}]}',
]);
