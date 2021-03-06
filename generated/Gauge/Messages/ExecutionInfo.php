<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: messages.proto

namespace Gauge\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 *&#47; Contains details of the execution. 
 * / Depending on the context (Step, Scenario, Spec or Suite), the respective fields are set.
 * </pre>
 *
 * Protobuf type <code>gauge.messages.ExecutionInfo</code>
 */
class ExecutionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     *&#47; Holds the information of the current Spec. Valid in context of Spec execution.
     * </pre>
     *
     * <code>.gauge.messages.SpecInfo currentSpec = 1;</code>
     */
    private $currentSpec = null;
    /**
     * <pre>
     *&#47; Holds the information of the current Scenario. Valid in context of Scenario execution.
     * </pre>
     *
     * <code>.gauge.messages.ScenarioInfo currentScenario = 2;</code>
     */
    private $currentScenario = null;
    /**
     * <pre>
     *&#47; Holds the information of the current Step. Valid in context of Step execution.
     * </pre>
     *
     * <code>.gauge.messages.StepInfo currentStep = 3;</code>
     */
    private $currentStep = null;
    /**
     * <pre>
     *&#47; Stacktrace of the execution. Valid only if there is an error in execution.
     * </pre>
     *
     * <code>string stacktrace = 4;</code>
     */
    private $stacktrace = '';

    public function __construct() {
        \GPBMetadata\Messages::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     *&#47; Holds the information of the current Spec. Valid in context of Spec execution.
     * </pre>
     *
     * <code>.gauge.messages.SpecInfo currentSpec = 1;</code>
     */
    public function getCurrentSpec()
    {
        return $this->currentSpec;
    }

    /**
     * <pre>
     *&#47; Holds the information of the current Spec. Valid in context of Spec execution.
     * </pre>
     *
     * <code>.gauge.messages.SpecInfo currentSpec = 1;</code>
     */
    public function setCurrentSpec(&$var)
    {
        GPBUtil::checkMessage($var, \Gauge\Messages\SpecInfo::class);
        $this->currentSpec = $var;
    }

    /**
     * <pre>
     *&#47; Holds the information of the current Scenario. Valid in context of Scenario execution.
     * </pre>
     *
     * <code>.gauge.messages.ScenarioInfo currentScenario = 2;</code>
     */
    public function getCurrentScenario()
    {
        return $this->currentScenario;
    }

    /**
     * <pre>
     *&#47; Holds the information of the current Scenario. Valid in context of Scenario execution.
     * </pre>
     *
     * <code>.gauge.messages.ScenarioInfo currentScenario = 2;</code>
     */
    public function setCurrentScenario(&$var)
    {
        GPBUtil::checkMessage($var, \Gauge\Messages\ScenarioInfo::class);
        $this->currentScenario = $var;
    }

    /**
     * <pre>
     *&#47; Holds the information of the current Step. Valid in context of Step execution.
     * </pre>
     *
     * <code>.gauge.messages.StepInfo currentStep = 3;</code>
     */
    public function getCurrentStep()
    {
        return $this->currentStep;
    }

    /**
     * <pre>
     *&#47; Holds the information of the current Step. Valid in context of Step execution.
     * </pre>
     *
     * <code>.gauge.messages.StepInfo currentStep = 3;</code>
     */
    public function setCurrentStep(&$var)
    {
        GPBUtil::checkMessage($var, \Gauge\Messages\StepInfo::class);
        $this->currentStep = $var;
    }

    /**
     * <pre>
     *&#47; Stacktrace of the execution. Valid only if there is an error in execution.
     * </pre>
     *
     * <code>string stacktrace = 4;</code>
     */
    public function getStacktrace()
    {
        return $this->stacktrace;
    }

    /**
     * <pre>
     *&#47; Stacktrace of the execution. Valid only if there is an error in execution.
     * </pre>
     *
     * <code>string stacktrace = 4;</code>
     */
    public function setStacktrace($var)
    {
        GPBUtil::checkString($var, True);
        $this->stacktrace = $var;
    }

}

