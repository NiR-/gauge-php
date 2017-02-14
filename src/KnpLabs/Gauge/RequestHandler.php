<?php

namespace KnpLabs\Gauge;

use Gauge\Messages\Message;

interface RequestHandler
{
    /**
     * @param Message $message
     *
     * @return void
     */
    public function handle(Message $message);

    /**
     * @return int Message type, as defined in messages.proto
     */
    public function getSupportedMessageType(): int;
}
