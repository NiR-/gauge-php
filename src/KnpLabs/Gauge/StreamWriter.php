<?php

declare(strict_types=1);

namespace KnpLabs\Gauge;

use Gauge\Messages\Message;
use Google\Protobuf\Internal\OutputStream;
use React\Stream\WritableStreamInterface;

class StreamWriter
{
    /** @var WritableStreamInterface */
    private $stream;

    /**
     * @param WritableStreamInterface $stream
     */
    public function __construct(WritableStreamInterface $stream)
    {
        $this->stream = $stream;
    }

    /**
     * @param Message $message
     */
    public function write(Message $message)
    {
        $encoded = $message->encode();
        $output  = new OutputStream(strlen($encoded) + OutputStream::MAX_VARINT64_BYTES);
        $output->writeVarint64(strlen($encoded));
        $output->writeRaw($encoded, strlen($encoded));

        $this->stream->write($output->getData());
    }
}
