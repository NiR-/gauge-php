<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: spec.proto

namespace Gauge\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 *&#47; A proto object representing the result of entire Suite execution.
 * </pre>
 *
 * Protobuf type <code>gauge.messages.ProtoSuiteResult</code>
 */
class ProtoSuiteResult extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     *&#47; Contains the result from the execution
     * </pre>
     *
     * <code>repeated .gauge.messages.ProtoSpecResult specResults = 1;</code>
     */
    private $specResults;
    /**
     * <pre>
     *&#47; Contains a 'before' hook failure message. This happens when the `before_suite` hook has an error
     * </pre>
     *
     * <code>.gauge.messages.ProtoHookFailure preHookFailure = 2;</code>
     */
    private $preHookFailure = null;
    /**
     * <pre>
     *&#47; Contains a 'after' hook failure message. This happens when the `after_suite` hook has an error
     * </pre>
     *
     * <code>.gauge.messages.ProtoHookFailure postHookFailure = 3;</code>
     */
    private $postHookFailure = null;
    /**
     * <pre>
     *&#47; Flag to indicate failure
     * </pre>
     *
     * <code>bool failed = 4;</code>
     */
    private $failed = false;
    /**
     * <pre>
     *&#47; Holds the count of number of Specifications that failed.
     * </pre>
     *
     * <code>int32 specsFailedCount = 5;</code>
     */
    private $specsFailedCount = 0;
    /**
     * <pre>
     *&#47; Holds the time taken for executing the whole suite.
     * </pre>
     *
     * <code>int64 executionTime = 6;</code>
     */
    private $executionTime = 0;
    /**
     * <pre>
     *&#47; Holds a metric indicating the success rate of the execution.
     * </pre>
     *
     * <code>float successRate = 7;</code>
     */
    private $successRate = 0.0;
    /**
     * <pre>
     *&#47; The environment against which execution was done
     * </pre>
     *
     * <code>string environment = 8;</code>
     */
    private $environment = '';
    /**
     * <pre>
     *&#47; Tag expression used for filtering specification
     * </pre>
     *
     * <code>string tags = 9;</code>
     */
    private $tags = '';
    /**
     * <pre>
     *&#47; Project name
     * </pre>
     *
     * <code>string projectName = 10;</code>
     */
    private $projectName = '';
    /**
     * <pre>
     *&#47; Timestamp of when execution started
     * </pre>
     *
     * <code>string timestamp = 11;</code>
     */
    private $timestamp = '';
    /**
     * <code>int32 specsSkippedCount = 12;</code>
     */
    private $specsSkippedCount = 0;

    public function __construct() {
        \GPBMetadata\Spec::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     *&#47; Contains the result from the execution
     * </pre>
     *
     * <code>repeated .gauge.messages.ProtoSpecResult specResults = 1;</code>
     */
    public function getSpecResults()
    {
        return $this->specResults;
    }

    /**
     * <pre>
     *&#47; Contains the result from the execution
     * </pre>
     *
     * <code>repeated .gauge.messages.ProtoSpecResult specResults = 1;</code>
     */
    public function setSpecResults(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Gauge\Messages\ProtoSpecResult::class);
        $this->specResults = $var;
    }

    /**
     * <pre>
     *&#47; Contains a 'before' hook failure message. This happens when the `before_suite` hook has an error
     * </pre>
     *
     * <code>.gauge.messages.ProtoHookFailure preHookFailure = 2;</code>
     */
    public function getPreHookFailure()
    {
        return $this->preHookFailure;
    }

    /**
     * <pre>
     *&#47; Contains a 'before' hook failure message. This happens when the `before_suite` hook has an error
     * </pre>
     *
     * <code>.gauge.messages.ProtoHookFailure preHookFailure = 2;</code>
     */
    public function setPreHookFailure(&$var)
    {
        GPBUtil::checkMessage($var, \Gauge\Messages\ProtoHookFailure::class);
        $this->preHookFailure = $var;
    }

    /**
     * <pre>
     *&#47; Contains a 'after' hook failure message. This happens when the `after_suite` hook has an error
     * </pre>
     *
     * <code>.gauge.messages.ProtoHookFailure postHookFailure = 3;</code>
     */
    public function getPostHookFailure()
    {
        return $this->postHookFailure;
    }

    /**
     * <pre>
     *&#47; Contains a 'after' hook failure message. This happens when the `after_suite` hook has an error
     * </pre>
     *
     * <code>.gauge.messages.ProtoHookFailure postHookFailure = 3;</code>
     */
    public function setPostHookFailure(&$var)
    {
        GPBUtil::checkMessage($var, \Gauge\Messages\ProtoHookFailure::class);
        $this->postHookFailure = $var;
    }

    /**
     * <pre>
     *&#47; Flag to indicate failure
     * </pre>
     *
     * <code>bool failed = 4;</code>
     */
    public function getFailed()
    {
        return $this->failed;
    }

    /**
     * <pre>
     *&#47; Flag to indicate failure
     * </pre>
     *
     * <code>bool failed = 4;</code>
     */
    public function setFailed($var)
    {
        GPBUtil::checkBool($var);
        $this->failed = $var;
    }

    /**
     * <pre>
     *&#47; Holds the count of number of Specifications that failed.
     * </pre>
     *
     * <code>int32 specsFailedCount = 5;</code>
     */
    public function getSpecsFailedCount()
    {
        return $this->specsFailedCount;
    }

    /**
     * <pre>
     *&#47; Holds the count of number of Specifications that failed.
     * </pre>
     *
     * <code>int32 specsFailedCount = 5;</code>
     */
    public function setSpecsFailedCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->specsFailedCount = $var;
    }

    /**
     * <pre>
     *&#47; Holds the time taken for executing the whole suite.
     * </pre>
     *
     * <code>int64 executionTime = 6;</code>
     */
    public function getExecutionTime()
    {
        return $this->executionTime;
    }

    /**
     * <pre>
     *&#47; Holds the time taken for executing the whole suite.
     * </pre>
     *
     * <code>int64 executionTime = 6;</code>
     */
    public function setExecutionTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->executionTime = $var;
    }

    /**
     * <pre>
     *&#47; Holds a metric indicating the success rate of the execution.
     * </pre>
     *
     * <code>float successRate = 7;</code>
     */
    public function getSuccessRate()
    {
        return $this->successRate;
    }

    /**
     * <pre>
     *&#47; Holds a metric indicating the success rate of the execution.
     * </pre>
     *
     * <code>float successRate = 7;</code>
     */
    public function setSuccessRate($var)
    {
        GPBUtil::checkFloat($var);
        $this->successRate = $var;
    }

    /**
     * <pre>
     *&#47; The environment against which execution was done
     * </pre>
     *
     * <code>string environment = 8;</code>
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * <pre>
     *&#47; The environment against which execution was done
     * </pre>
     *
     * <code>string environment = 8;</code>
     */
    public function setEnvironment($var)
    {
        GPBUtil::checkString($var, True);
        $this->environment = $var;
    }

    /**
     * <pre>
     *&#47; Tag expression used for filtering specification
     * </pre>
     *
     * <code>string tags = 9;</code>
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * <pre>
     *&#47; Tag expression used for filtering specification
     * </pre>
     *
     * <code>string tags = 9;</code>
     */
    public function setTags($var)
    {
        GPBUtil::checkString($var, True);
        $this->tags = $var;
    }

    /**
     * <pre>
     *&#47; Project name
     * </pre>
     *
     * <code>string projectName = 10;</code>
     */
    public function getProjectName()
    {
        return $this->projectName;
    }

    /**
     * <pre>
     *&#47; Project name
     * </pre>
     *
     * <code>string projectName = 10;</code>
     */
    public function setProjectName($var)
    {
        GPBUtil::checkString($var, True);
        $this->projectName = $var;
    }

    /**
     * <pre>
     *&#47; Timestamp of when execution started
     * </pre>
     *
     * <code>string timestamp = 11;</code>
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * <pre>
     *&#47; Timestamp of when execution started
     * </pre>
     *
     * <code>string timestamp = 11;</code>
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->timestamp = $var;
    }

    /**
     * <code>int32 specsSkippedCount = 12;</code>
     */
    public function getSpecsSkippedCount()
    {
        return $this->specsSkippedCount;
    }

    /**
     * <code>int32 specsSkippedCount = 12;</code>
     */
    public function setSpecsSkippedCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->specsSkippedCount = $var;
    }

}
