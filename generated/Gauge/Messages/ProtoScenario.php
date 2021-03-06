<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: spec.proto

namespace Gauge\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 *&#47; A proto object representing a Scenario
 * </pre>
 *
 * Protobuf type <code>gauge.messages.ProtoScenario</code>
 */
class ProtoScenario extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     *&#47; Heading of the given Scenario
     * </pre>
     *
     * <code>string scenarioHeading = 1;</code>
     */
    private $scenarioHeading = '';
    /**
     * <pre>
     *&#47; Flag to indicate if the Scenario execution failed
     * </pre>
     *
     * <code>bool failed = 2 [deprecated = true];</code>
     */
    private $failed = false;
    /**
     * <pre>
     *&#47; Collection of Context steps. The Context steps are executed before every run.
     * </pre>
     *
     * <code>repeated .gauge.messages.ProtoItem contexts = 3;</code>
     */
    private $contexts;
    /**
     * <pre>
     *&#47; Collection of Items under a scenario. These could be Steps, Comments, Tags, TableDrivenScenarios or Tables
     * </pre>
     *
     * <code>repeated .gauge.messages.ProtoItem scenarioItems = 4;</code>
     */
    private $scenarioItems;
    /**
     * <pre>
     *&#47; Contains a 'before' hook failure message. This happens when the `before_scenario` hook has an error.
     * </pre>
     *
     * <code>.gauge.messages.ProtoHookFailure preHookFailure = 5;</code>
     */
    private $preHookFailure = null;
    /**
     * <pre>
     *&#47; Contains a 'after' hook failure message. This happens when the `after_scenario` hook has an error.
     * </pre>
     *
     * <code>.gauge.messages.ProtoHookFailure postHookFailure = 6;</code>
     */
    private $postHookFailure = null;
    /**
     * <pre>
     *&#47; Contains a list of tags that are defined at the specification level. Scenario tags are not present here.
     * </pre>
     *
     * <code>repeated string tags = 7;</code>
     */
    private $tags;
    /**
     * <pre>
     *&#47; Holds the time taken for executing this scenario.
     * </pre>
     *
     * <code>int64 executionTime = 8;</code>
     */
    private $executionTime = 0;
    /**
     * <pre>
     *&#47; Flag to indicate if the Scenario execution is skipped
     * </pre>
     *
     * <code>bool skipped = 9 [deprecated = true];</code>
     */
    private $skipped = false;
    /**
     * <pre>
     *&#47; Holds the error messages for skipping scenario from execution
     * </pre>
     *
     * <code>repeated string skipErrors = 10;</code>
     */
    private $skipErrors;
    /**
     * <pre>
     *&#47; Holds the unique Identifier of a scenario.
     * </pre>
     *
     * <code>string ID = 11;</code>
     */
    private $ID = '';
    /**
     * <pre>
     *&#47; Collection of Teardown steps. The Teardown steps are executed after every run.
     * </pre>
     *
     * <code>repeated .gauge.messages.ProtoItem tearDownSteps = 12;</code>
     */
    private $tearDownSteps;
    /**
     * <pre>
     *&#47; Span(start, end) of scenario
     * </pre>
     *
     * <code>.gauge.messages.Span span = 13;</code>
     */
    private $span = null;
    /**
     * <pre>
     *&#47; Execution status for the scenario
     * </pre>
     *
     * <code>.gauge.messages.ExecutionStatus executionStatus = 14;</code>
     */
    private $executionStatus = 0;

    public function __construct() {
        \GPBMetadata\Spec::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     *&#47; Heading of the given Scenario
     * </pre>
     *
     * <code>string scenarioHeading = 1;</code>
     */
    public function getScenarioHeading()
    {
        return $this->scenarioHeading;
    }

    /**
     * <pre>
     *&#47; Heading of the given Scenario
     * </pre>
     *
     * <code>string scenarioHeading = 1;</code>
     */
    public function setScenarioHeading($var)
    {
        GPBUtil::checkString($var, True);
        $this->scenarioHeading = $var;
    }

    /**
     * <pre>
     *&#47; Flag to indicate if the Scenario execution failed
     * </pre>
     *
     * <code>bool failed = 2 [deprecated = true];</code>
     */
    public function getFailed()
    {
        return $this->failed;
    }

    /**
     * <pre>
     *&#47; Flag to indicate if the Scenario execution failed
     * </pre>
     *
     * <code>bool failed = 2 [deprecated = true];</code>
     */
    public function setFailed($var)
    {
        GPBUtil::checkBool($var);
        $this->failed = $var;
    }

    /**
     * <pre>
     *&#47; Collection of Context steps. The Context steps are executed before every run.
     * </pre>
     *
     * <code>repeated .gauge.messages.ProtoItem contexts = 3;</code>
     */
    public function getContexts()
    {
        return $this->contexts;
    }

    /**
     * <pre>
     *&#47; Collection of Context steps. The Context steps are executed before every run.
     * </pre>
     *
     * <code>repeated .gauge.messages.ProtoItem contexts = 3;</code>
     */
    public function setContexts(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Gauge\Messages\ProtoItem::class);
        $this->contexts = $var;
    }

    /**
     * <pre>
     *&#47; Collection of Items under a scenario. These could be Steps, Comments, Tags, TableDrivenScenarios or Tables
     * </pre>
     *
     * <code>repeated .gauge.messages.ProtoItem scenarioItems = 4;</code>
     */
    public function getScenarioItems()
    {
        return $this->scenarioItems;
    }

    /**
     * <pre>
     *&#47; Collection of Items under a scenario. These could be Steps, Comments, Tags, TableDrivenScenarios or Tables
     * </pre>
     *
     * <code>repeated .gauge.messages.ProtoItem scenarioItems = 4;</code>
     */
    public function setScenarioItems(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Gauge\Messages\ProtoItem::class);
        $this->scenarioItems = $var;
    }

    /**
     * <pre>
     *&#47; Contains a 'before' hook failure message. This happens when the `before_scenario` hook has an error.
     * </pre>
     *
     * <code>.gauge.messages.ProtoHookFailure preHookFailure = 5;</code>
     */
    public function getPreHookFailure()
    {
        return $this->preHookFailure;
    }

    /**
     * <pre>
     *&#47; Contains a 'before' hook failure message. This happens when the `before_scenario` hook has an error.
     * </pre>
     *
     * <code>.gauge.messages.ProtoHookFailure preHookFailure = 5;</code>
     */
    public function setPreHookFailure(&$var)
    {
        GPBUtil::checkMessage($var, \Gauge\Messages\ProtoHookFailure::class);
        $this->preHookFailure = $var;
    }

    /**
     * <pre>
     *&#47; Contains a 'after' hook failure message. This happens when the `after_scenario` hook has an error.
     * </pre>
     *
     * <code>.gauge.messages.ProtoHookFailure postHookFailure = 6;</code>
     */
    public function getPostHookFailure()
    {
        return $this->postHookFailure;
    }

    /**
     * <pre>
     *&#47; Contains a 'after' hook failure message. This happens when the `after_scenario` hook has an error.
     * </pre>
     *
     * <code>.gauge.messages.ProtoHookFailure postHookFailure = 6;</code>
     */
    public function setPostHookFailure(&$var)
    {
        GPBUtil::checkMessage($var, \Gauge\Messages\ProtoHookFailure::class);
        $this->postHookFailure = $var;
    }

    /**
     * <pre>
     *&#47; Contains a list of tags that are defined at the specification level. Scenario tags are not present here.
     * </pre>
     *
     * <code>repeated string tags = 7;</code>
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * <pre>
     *&#47; Contains a list of tags that are defined at the specification level. Scenario tags are not present here.
     * </pre>
     *
     * <code>repeated string tags = 7;</code>
     */
    public function setTags(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->tags = $var;
    }

    /**
     * <pre>
     *&#47; Holds the time taken for executing this scenario.
     * </pre>
     *
     * <code>int64 executionTime = 8;</code>
     */
    public function getExecutionTime()
    {
        return $this->executionTime;
    }

    /**
     * <pre>
     *&#47; Holds the time taken for executing this scenario.
     * </pre>
     *
     * <code>int64 executionTime = 8;</code>
     */
    public function setExecutionTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->executionTime = $var;
    }

    /**
     * <pre>
     *&#47; Flag to indicate if the Scenario execution is skipped
     * </pre>
     *
     * <code>bool skipped = 9 [deprecated = true];</code>
     */
    public function getSkipped()
    {
        return $this->skipped;
    }

    /**
     * <pre>
     *&#47; Flag to indicate if the Scenario execution is skipped
     * </pre>
     *
     * <code>bool skipped = 9 [deprecated = true];</code>
     */
    public function setSkipped($var)
    {
        GPBUtil::checkBool($var);
        $this->skipped = $var;
    }

    /**
     * <pre>
     *&#47; Holds the error messages for skipping scenario from execution
     * </pre>
     *
     * <code>repeated string skipErrors = 10;</code>
     */
    public function getSkipErrors()
    {
        return $this->skipErrors;
    }

    /**
     * <pre>
     *&#47; Holds the error messages for skipping scenario from execution
     * </pre>
     *
     * <code>repeated string skipErrors = 10;</code>
     */
    public function setSkipErrors(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->skipErrors = $var;
    }

    /**
     * <pre>
     *&#47; Holds the unique Identifier of a scenario.
     * </pre>
     *
     * <code>string ID = 11;</code>
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * <pre>
     *&#47; Holds the unique Identifier of a scenario.
     * </pre>
     *
     * <code>string ID = 11;</code>
     */
    public function setID($var)
    {
        GPBUtil::checkString($var, True);
        $this->ID = $var;
    }

    /**
     * <pre>
     *&#47; Collection of Teardown steps. The Teardown steps are executed after every run.
     * </pre>
     *
     * <code>repeated .gauge.messages.ProtoItem tearDownSteps = 12;</code>
     */
    public function getTearDownSteps()
    {
        return $this->tearDownSteps;
    }

    /**
     * <pre>
     *&#47; Collection of Teardown steps. The Teardown steps are executed after every run.
     * </pre>
     *
     * <code>repeated .gauge.messages.ProtoItem tearDownSteps = 12;</code>
     */
    public function setTearDownSteps(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Gauge\Messages\ProtoItem::class);
        $this->tearDownSteps = $var;
    }

    /**
     * <pre>
     *&#47; Span(start, end) of scenario
     * </pre>
     *
     * <code>.gauge.messages.Span span = 13;</code>
     */
    public function getSpan()
    {
        return $this->span;
    }

    /**
     * <pre>
     *&#47; Span(start, end) of scenario
     * </pre>
     *
     * <code>.gauge.messages.Span span = 13;</code>
     */
    public function setSpan(&$var)
    {
        GPBUtil::checkMessage($var, \Gauge\Messages\Span::class);
        $this->span = $var;
    }

    /**
     * <pre>
     *&#47; Execution status for the scenario
     * </pre>
     *
     * <code>.gauge.messages.ExecutionStatus executionStatus = 14;</code>
     */
    public function getExecutionStatus()
    {
        return $this->executionStatus;
    }

    /**
     * <pre>
     *&#47; Execution status for the scenario
     * </pre>
     *
     * <code>.gauge.messages.ExecutionStatus executionStatus = 14;</code>
     */
    public function setExecutionStatus($var)
    {
        GPBUtil::checkEnum($var, \Gauge\Messages\ExecutionStatus::class);
        $this->executionStatus = $var;
    }

}

