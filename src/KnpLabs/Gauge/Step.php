<?php

namespace KnpLabs\Gauge;

class Step
{
    /** @var string */
    private $name;

    /** @var callable */
    private $executor;

    /** @var string[] */
    private $files;

    /**
     * @param string   $name
     * @param callable $executor
     * @param string   $file
     */
    public function __construct(string $name, callable $executor, string $file)
    {
        $this->name     = $name;
        $this->executor = $executor;
        $this->files    = [$file];
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return callable
     */
    public function getExecutor(): callable
    {
        return $this->executor;
    }

    /**
     * @param string[] $files
     */
    public function addFileReferences(string ...$files)
    {
        array_push($this->files, ...$files);
    }

    /**
     * @return string[]
     */
    public function getFileReferences(): array
    {
        return $this->files;
    }

    /**
     * @return bool
     */
    public function isDuplicated(): bool
    {
        return count($this->files) > 1;
    }
}