<?php

namespace KnpLabs\Gauge\RequestHandler;

use Gauge\Messages\Message;
use Gauge\Messages\Message_MessageType;
use KnpLabs\Gauge\RequestHandler;
use KnpLabs\Gauge\ResponseFactory\StepValidateResponse;
use KnpLabs\Gauge\StepRegistry;
use KnpLabs\Gauge\StreamWriter;

class StepValidateRequest implements RequestHandler
{
    /** @var StepRegistry */
    private $stepRegistry;

    /** @var StepValidateResponse */
    private $responseFactory;

    /** @var StreamWriter */
    private $writer;

    /**
     * @param StepRegistry         $stepRegistry
     * @param StepValidateResponse $responseFactory
     * @param StreamWriter         $writer
     */
    public function __construct(StepRegistry $stepRegistry, StepValidateResponse $responseFactory, StreamWriter $writer)
    {
        $this->stepRegistry    = $stepRegistry;
        $this->responseFactory = $responseFactory;
        $this->writer          = $writer;
    }

    /**
     * {@inheritdoc}
     */
    public function handle(Message $message)
    {
        /** @var \Gauge\Messages\StepValidateRequest $request */
        $request  = $message->getStepValidateRequest();
        $stepText = $request->getStepText();

        if (!$this->stepRegistry->hasStep($stepText)) {
            $this->writer->write($this->responseFactory->notFound($message));
            return;
        }

        $step = $this->stepRegistry->getStep($stepText);

        if ($step->isDuplicated()) {
            $this->writer->write($this->responseFactory->duplicated($message, $step->getFileReferences()));
            return;
        }

        $this->writer->write($this->responseFactory->valid($message));
    }

    /**
     * {@inheritdoc}
     */
    public function getSupportedMessageType(): int
    {
        return Message_MessageType::StepValidateRequest;
    }
}
