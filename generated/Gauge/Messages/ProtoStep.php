<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: spec.proto

namespace Gauge\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 *&#47; A proto object representing a Step
 * </pre>
 *
 * Protobuf type <code>gauge.messages.ProtoStep</code>
 */
class ProtoStep extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     *&#47; Holds the raw text of the Step as defined in the spec file. This contains the actual parameter values.
     * </pre>
     *
     * <code>string actualText = 1;</code>
     */
    private $actualText = '';
    /**
     * <pre>
     *&#47; Contains the parsed text of the Step. This will have placeholders for the parameters.
     * </pre>
     *
     * <code>string parsedText = 2;</code>
     */
    private $parsedText = '';
    /**
     * <pre>
     *&#47; Collection of a list of fragments for a Step. A fragment could be either text or parameter.
     * </pre>
     *
     * <code>repeated .gauge.messages.Fragment fragments = 3;</code>
     */
    private $fragments;
    /**
     * <pre>
     *&#47; Holds the result from the execution.
     * </pre>
     *
     * <code>.gauge.messages.ProtoStepExecutionResult stepExecutionResult = 4;</code>
     */
    private $stepExecutionResult = null;

    public function __construct() {
        \GPBMetadata\Spec::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     *&#47; Holds the raw text of the Step as defined in the spec file. This contains the actual parameter values.
     * </pre>
     *
     * <code>string actualText = 1;</code>
     */
    public function getActualText()
    {
        return $this->actualText;
    }

    /**
     * <pre>
     *&#47; Holds the raw text of the Step as defined in the spec file. This contains the actual parameter values.
     * </pre>
     *
     * <code>string actualText = 1;</code>
     */
    public function setActualText($var)
    {
        GPBUtil::checkString($var, True);
        $this->actualText = $var;
    }

    /**
     * <pre>
     *&#47; Contains the parsed text of the Step. This will have placeholders for the parameters.
     * </pre>
     *
     * <code>string parsedText = 2;</code>
     */
    public function getParsedText()
    {
        return $this->parsedText;
    }

    /**
     * <pre>
     *&#47; Contains the parsed text of the Step. This will have placeholders for the parameters.
     * </pre>
     *
     * <code>string parsedText = 2;</code>
     */
    public function setParsedText($var)
    {
        GPBUtil::checkString($var, True);
        $this->parsedText = $var;
    }

    /**
     * <pre>
     *&#47; Collection of a list of fragments for a Step. A fragment could be either text or parameter.
     * </pre>
     *
     * <code>repeated .gauge.messages.Fragment fragments = 3;</code>
     */
    public function getFragments()
    {
        return $this->fragments;
    }

    /**
     * <pre>
     *&#47; Collection of a list of fragments for a Step. A fragment could be either text or parameter.
     * </pre>
     *
     * <code>repeated .gauge.messages.Fragment fragments = 3;</code>
     */
    public function setFragments(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Gauge\Messages\Fragment::class);
        $this->fragments = $var;
    }

    /**
     * <pre>
     *&#47; Holds the result from the execution.
     * </pre>
     *
     * <code>.gauge.messages.ProtoStepExecutionResult stepExecutionResult = 4;</code>
     */
    public function getStepExecutionResult()
    {
        return $this->stepExecutionResult;
    }

    /**
     * <pre>
     *&#47; Holds the result from the execution.
     * </pre>
     *
     * <code>.gauge.messages.ProtoStepExecutionResult stepExecutionResult = 4;</code>
     */
    public function setStepExecutionResult(&$var)
    {
        GPBUtil::checkMessage($var, \Gauge\Messages\ProtoStepExecutionResult::class);
        $this->stepExecutionResult = $var;
    }

}
