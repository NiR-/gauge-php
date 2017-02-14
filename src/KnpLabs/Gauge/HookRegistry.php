<?php

namespace KnpLabs\Gauge;

class HookRegistry implements \Iterator
{
    private $hooks = [];

    public function register(callable $hook)
    {
        $this->hooks[] = $hook;
    }

    public function current()
    {
        return current($this->hooks);
    }

    public function next()
    {
        next($this->hooks);
    }

    public function valid()
    {
        return current($this->hooks) !== false;
    }

    public function key()
    {
        return key($this->hooks);
    }

    public function rewind()
    {
        reset($this->hooks);
    }
}
