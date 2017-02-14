<?php

namespace KnpLabs\Gauge\RequestHandler;

use Gauge\Messages\Message;
use Gauge\Messages\Message_MessageType;
use KnpLabs\Gauge\DataStore;
use KnpLabs\Gauge\RequestHandler;
use KnpLabs\Gauge\ResponseFactory\ExecutionStatusResponse;
use KnpLabs\Gauge\StreamWriter;
use React\Stream\Stream;

class SuiteDataStoreInit implements RequestHandler
{
    /** @var DataStore */
    private $suiteDataStore;

    /** @var ExecutionStatusResponse */
    private $messageFactory;

    /** @var StreamWriter */
    private $writer;

    /**
     * @param DataStore               $suiteDataStore
     * @param ExecutionStatusResponse $messageFactory
     * @param StreamWriter            $writer
     */
    public function __construct(DataStore $suiteDataStore, ExecutionStatusResponse $messageFactory, StreamWriter $writer)
    {
        $this->suiteDataStore = $suiteDataStore;
        $this->messageFactory = $messageFactory;
        $this->writer         = $writer;
    }

    public function handle(Message $message)
    {
        $this->suiteDataStore->clear();

//        var_dump('clear data store');
//        $this->writer->write($this->messageFactory->successful($message));
    }

    public function getSupportedMessageType(): int
    {
        return Message_MessageType::SuiteDataStoreInit;
    }
}
