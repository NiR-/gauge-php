<?php

namespace KnpLabs\Gauge\RequestHandler;

use Gauge\Messages\Message;
use KnpLabs\Gauge\RequestHandler;
use Webmozart\Assert\Assert;

class Registry
{
    /** @var array|RequestHandler */
    private $handlers;

    /**
     * @param array $handlers
     */
    public function __construct(array $handlers)
    {
        Assert::allIsInstanceOf($handlers, RequestHandler::class);

        $this->handlers = array_combine(
            array_map(function (RequestHandler $handler) { return $handler->getSupportedMessageType(); }, $handlers),
            $handlers
        );
    }

    /**
     * @param Message $message
     *
     * @throws \InvalidArgumentException
     */
    public function handle(Message $message)
    {
        $messageType = $message->getMessageType();

        if (false === array_key_exists($messageType, $this->handlers)) {
            throw new \InvalidArgumentException(sprintf('Message type "%d" is not supported.', $messageType));
        }

        $handler = $this->handlers[$messageType];
        call_user_func([$handler, 'handle'], $message);
    }
}
