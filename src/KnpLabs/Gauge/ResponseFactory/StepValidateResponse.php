<?php

declare(strict_types=1);

namespace KnpLabs\Gauge\ResponseFactory;

use Gauge\Messages\Message;
use Gauge\Messages\Message_MessageType;
use Gauge\Messages\StepValidateResponse as Response;
use Gauge\Messages\StepValidateResponse_ErrorType;

class StepValidateResponse
{
    /**
     * @param Message $request
     *
     * @return Message
     */
    public function valid(Message $request): Message
    {
        $stepValidate = new Response();
        $stepValidate->setIsValid(true);

        return $this->buildResponseMessage($request, $stepValidate);
    }

    /**
     * @param Message $request
     *
     * @return Message
     */
    public function notFound(Message $request): Message
    {
        $stepValidate = new Response();
        $stepValidate->setIsValid(false);
        $stepValidate->setErrorType(StepValidateResponse_ErrorType::STEP_IMPLEMENTATION_NOT_FOUND);
        $stepValidate->setErrorMessage('Invalid step.');

        return $this->buildResponseMessage($request, $stepValidate);
    }

    /**
     * @param Message $request
     * @param array   $files
     *
     * @return Message
     */
    public function duplicated(Message $request, array $files): Message
    {
        $stepValidate = new Response();
        $stepValidate->setIsValid(false);
        $stepValidate->setErrorType(StepValidateResponse_ErrorType::DUPLICATE_STEP_IMPLEMENTATION);
        $stepValidate->setErrorMessage(
            sprintf('Duplicated step implementation found in files: %s.', implode(', ', $files))
        );

        return $this->buildResponseMessage($request, $stepValidate);
    }

    /**
     * @param Message  $request
     * @param Response $stepValidate
     *
     * @return Message
     */
    private function buildResponseMessage(Message $request, Response $stepValidate): Message
    {
        var_dump('message id', $request->getMessageId());
        $response = new Message();
        $response->setMessageId($request->getMessageId());
        $response->setMessageType(Message_MessageType::StepValidateResponse);
        $response->setStepValidateResponse($stepValidate);

        return $response;
    }
}
