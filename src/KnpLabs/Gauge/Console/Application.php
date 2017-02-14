<?php

namespace KnpLabs\Gauge\Console;

use DI\ContainerBuilder;
use Gauge\Messages\Message;
use Google\Protobuf\Internal\InputStream;
use KnpLabs\Gauge\Step;
use KnpLabs\Gauge\StepRegistry;
use KnpLabs\Gauge\StreamWriter;
use React\Stream\DuplexStreamInterface;

class Application
{
    private $container;

    public function __construct()
    {
        $this->container = (new ContainerBuilder())
            ->addDefinitions(__DIR__ . '/container.php')
            ->build()
        ;

        $this->container->get(StepRegistry::class)->addStep(new Step(
            'Vowels in English language are {}.',
            function () { var_dump('yolo'); },
            __FILE__
        ));
    }

    public function init()
    {

    }

    public function start()
    {
        $loop      = \React\EventLoop\Factory::create();
        $connector = new \React\SocketClient\TcpConnector($loop);

        $connector->create('127.0.0.1', getenv('GAUGE_INTERNAL_PORT'))->then(function (DuplexStreamInterface $stream) {
            $this->container->set(StreamWriter::class, new StreamWriter($stream));

            $stream->on('data', function ($data) use ($stream) {
                $inputStream = new InputStream($data);

                do {
                    $message = new Message();
                    $message->parseFromStream($inputStream);

                    $this->container->get('request_handler.registry')->handle($message);
                } while ($inputStream->bytesUntilLimit() > 0);
            });
        });

        $loop->run();
    }
}
