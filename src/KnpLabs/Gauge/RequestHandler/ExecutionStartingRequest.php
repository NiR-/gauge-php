<?php

declare(strict_types=1);

namespace KnpLabs\Gauge\RequestHandler;

use Gauge\Messages\Message;
use Gauge\Messages\Message_MessageType;
use KnpLabs\Gauge\HookRegistry;
use KnpLabs\Gauge\RequestHandler;
use KnpLabs\Gauge\ResponseFactory\ExecutionStatusResponse;
use KnpLabs\Gauge\StreamWriter;

class ExecutionStartingRequest implements RequestHandler
{
    /** @var HookRegistry **/
    private $beforeSuiteHooks;

    /** @var ExecutionStatusResponse */
    private $responseFactory;

    /** @var StreamWriter */
    private $writer;

    /**
     * @param HookRegistry            $beforeSuiteHooks
     * @param ExecutionStatusResponse $responseFactory
     * @param StreamWriter            $writer
     */
    public function __construct(HookRegistry $beforeSuiteHooks, ExecutionStatusResponse $responseFactory, StreamWriter $writer)
    {
        $this->beforeSuiteHooks = $beforeSuiteHooks;
        $this->responseFactory  = $responseFactory;
        $this->writer           = $writer;
    }

    /**
     * {@inheritdoc}
     */
    public function handle(Message $message)
    {
        $request = $message->getExecutionStartingRequest();

        try {
            foreach ($this->beforeSuiteHooks as $hook) {
                call_user_func($hook, $request);
            }
        } catch (\Throwable $error) {
            $this->writer->write($this->responseFactory->failed($message, $error));
            throw $error;
        }

        $this->writer->write($this->responseFactory->successful($message));
    }

    /**
     * {@inheritdoc}
     */
    public function getSupportedMessageType(): int
    {
        return Message_MessageType::ExecutionStarting;
    }
}
