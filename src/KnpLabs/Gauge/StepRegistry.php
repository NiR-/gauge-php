<?php

declare(strict_types=1);

namespace KnpLabs\Gauge;

class StepRegistry
{
    /** @var array|Step[] */
    private $steps;

    /**
     * @param Step $step
     */
    public function addStep(Step $step)
    {
        $name = $step->getName();

        if (isset($this->steps[$name])) {
            $this->steps[$name]->addFileReferences(...$step->getFileReferences());
            return;
        }

        $this->steps[$name] = $step;
    }

    /**
     * @param string $name
     *
     * @return bool
     */
    public function hasStep(string $name): bool
    {
        return isset($this->steps[$name]);
    }

    /**
     * @param string $name
     *
     * @return Step
     */
    public function getStep(string $name): Step
    {
        if (!isset($this->steps[$name])) {
            throw new \InvalidArgumentException(sprintf('There\'s no step "%s" registered.', $name));
        }

        return $this->steps[$name];
    }
}
