<?php

declare(strict_types=1);

namespace KnpLabs\Gauge;

use Webmozart\Assert\Assert;

class DataStore
{
    /** @var array */
    private $items = [];

    /**
     * @param string $name
     *
     * @return mixed
     */
    public function get(string $name)
    {
        Assert::keyExists($this->items, $name);

        return $this->items[$name];
    }

    /**
     * @param string $name
     *
     * @return bool
     */
    public function has(string $name): bool
    {
        return array_key_exists($name, $this->items);
    }

    /**
     * @param string $name
     * @param mixed  $value
     */
    public function set(string $name, $value)
    {
        $this->items[$name] = $value;
    }

    /**
     * Clears the DataStore
     * @return void
     */
    public function clear()
    {
        $this->items = [];
    }
}
