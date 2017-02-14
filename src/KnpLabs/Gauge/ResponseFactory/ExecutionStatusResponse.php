<?php

declare(strict_types=1);

namespace KnpLabs\Gauge\ResponseFactory;

use Gauge\Messages\Message;
use Gauge\Messages\Message_MessageType;
use Gauge\Messages\ExecutionStatusResponse as Response;
use Gauge\Messages\ProtoExecutionResult;
use Gauge\Messages\ProtoExecutionResult_ErrorType;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;

class ExecutionStatusResponse
{
    /**
     * @param Message $request
     *
     * @return Message
     */
    public function successful(Message $request): Message
    {
        $extraMessage = [];

        $executionResult = new ProtoExecutionResult();
        $executionResult->setFailed(false);
        $executionResult->setRecoverableError(false);
        $executionResult->setErrorMessage('');
        $executionResult->setStackTrace('');
        $executionResult->setScreenShot(null);
        $executionResult->setExecutionTime(0);
        $executionResult->setMessage(new RepeatedField(GPBType::STRING));
        $executionResult->setErrorType(ProtoExecutionResult_ErrorType::ASSERTION);

        return $this->buildMessage($request, $executionResult);
    }

    /**
     * @param Message    $request
     * @param \Throwable $error
     *
     * @return Message
     */
    public function failed(Message $request, \Throwable $error): Message
    {
        $executionResult = new ProtoExecutionResult();
//        $executionResult->setFailed(true);
//        $executionResult->setErrorMessage($error->getMessage());
//        $executionResult->setStackTrace($error->getTraceAsString());

        $executionResult->setFailed(false);
        $executionResult->setRecoverableError(false);
        $executionResult->setErrorMessage('');
        $executionResult->setStackTrace('');
        $executionResult->setScreenShot(null);
        $executionResult->setExecutionTime(0);
        $executionResult->setMessage(new RepeatedField(GPBType::STRING));
        $executionResult->setErrorType(ProtoExecutionResult_ErrorType::ASSERTION);

        return $this->buildMessage($request, $executionResult);
    }

    /**
     * @param Message              $request
     * @param ProtoExecutionResult $executionResult
     *
     * @return Message
     */
    private function buildMessage(Message $request, ProtoExecutionResult $executionResult): Message
    {
        $response = new Message();
        $response->setMessageId($request->getMessageId());
        $response->setMessageType(Message_MessageType::ExecutionStatusResponse);
        $response->setExecutionStatusResponse($executionStatus = new Response());
        $executionStatus->setExecutionResult($executionResult);

        return $response;
    }
}
