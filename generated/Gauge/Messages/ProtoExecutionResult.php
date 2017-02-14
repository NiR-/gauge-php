<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: spec.proto

namespace Gauge\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 *&#47; A proto object representing the result of an execution
 * </pre>
 *
 * Protobuf type <code>gauge.messages.ProtoExecutionResult</code>
 */
class ProtoExecutionResult extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     *&#47; Flag to indicate failure
     * </pre>
     *
     * <code>bool failed = 1;</code>
     */
    private $failed = false;
    /**
     * <pre>
     *&#47; Flag to indicate if the error is recoverable from.
     * </pre>
     *
     * <code>bool recoverableError = 2;</code>
     */
    private $recoverableError = false;
    /**
     * <pre>
     *&#47; The actual error message.
     * </pre>
     *
     * <code>string errorMessage = 3;</code>
     */
    private $errorMessage = '';
    /**
     * <pre>
     *&#47; Stacktrace of the error
     * </pre>
     *
     * <code>string stackTrace = 4;</code>
     */
    private $stackTrace = '';
    /**
     * <pre>
     *&#47; Byte array containing screenshot taken at the time of failure.
     * </pre>
     *
     * <code>bytes screenShot = 5;</code>
     */
    private $screenShot = '';
    /**
     * <pre>
     *&#47; Holds the time taken for executing this scenario.
     * </pre>
     *
     * <code>int64 executionTime = 6;</code>
     */
    private $executionTime = 0;
    /**
     * <pre>
     *&#47; Additional information at exec time to be available on reports
     * </pre>
     *
     * <code>repeated string message = 7;</code>
     */
    private $message;
    /**
     * <pre>
     *&#47; Type of the Error. Valid values: ASSERTION, VERIFICATION. Default: ASSERTION
     * </pre>
     *
     * <code>.gauge.messages.ProtoExecutionResult.ErrorType errorType = 8;</code>
     */
    private $errorType = 0;

    public function __construct() {
        \GPBMetadata\Spec::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     *&#47; Flag to indicate failure
     * </pre>
     *
     * <code>bool failed = 1;</code>
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
     * <code>bool failed = 1;</code>
     */
    public function setFailed($var)
    {
        GPBUtil::checkBool($var);
        $this->failed = $var;
    }

    /**
     * <pre>
     *&#47; Flag to indicate if the error is recoverable from.
     * </pre>
     *
     * <code>bool recoverableError = 2;</code>
     */
    public function getRecoverableError()
    {
        return $this->recoverableError;
    }

    /**
     * <pre>
     *&#47; Flag to indicate if the error is recoverable from.
     * </pre>
     *
     * <code>bool recoverableError = 2;</code>
     */
    public function setRecoverableError($var)
    {
        GPBUtil::checkBool($var);
        $this->recoverableError = $var;
    }

    /**
     * <pre>
     *&#47; The actual error message.
     * </pre>
     *
     * <code>string errorMessage = 3;</code>
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * <pre>
     *&#47; The actual error message.
     * </pre>
     *
     * <code>string errorMessage = 3;</code>
     */
    public function setErrorMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->errorMessage = $var;
    }

    /**
     * <pre>
     *&#47; Stacktrace of the error
     * </pre>
     *
     * <code>string stackTrace = 4;</code>
     */
    public function getStackTrace()
    {
        return $this->stackTrace;
    }

    /**
     * <pre>
     *&#47; Stacktrace of the error
     * </pre>
     *
     * <code>string stackTrace = 4;</code>
     */
    public function setStackTrace($var)
    {
        GPBUtil::checkString($var, True);
        $this->stackTrace = $var;
    }

    /**
     * <pre>
     *&#47; Byte array containing screenshot taken at the time of failure.
     * </pre>
     *
     * <code>bytes screenShot = 5;</code>
     */
    public function getScreenShot()
    {
        return $this->screenShot;
    }

    /**
     * <pre>
     *&#47; Byte array containing screenshot taken at the time of failure.
     * </pre>
     *
     * <code>bytes screenShot = 5;</code>
     */
    public function setScreenShot($var)
    {
        GPBUtil::checkString($var, False);
        $this->screenShot = $var;
    }

    /**
     * <pre>
     *&#47; Holds the time taken for executing this scenario.
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
     *&#47; Holds the time taken for executing this scenario.
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
     *&#47; Additional information at exec time to be available on reports
     * </pre>
     *
     * <code>repeated string message = 7;</code>
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <pre>
     *&#47; Additional information at exec time to be available on reports
     * </pre>
     *
     * <code>repeated string message = 7;</code>
     */
    public function setMessage(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->message = $var;
    }

    /**
     * <pre>
     *&#47; Type of the Error. Valid values: ASSERTION, VERIFICATION. Default: ASSERTION
     * </pre>
     *
     * <code>.gauge.messages.ProtoExecutionResult.ErrorType errorType = 8;</code>
     */
    public function getErrorType()
    {
        return $this->errorType;
    }

    /**
     * <pre>
     *&#47; Type of the Error. Valid values: ASSERTION, VERIFICATION. Default: ASSERTION
     * </pre>
     *
     * <code>.gauge.messages.ProtoExecutionResult.ErrorType errorType = 8;</code>
     */
    public function setErrorType($var)
    {
        GPBUtil::checkEnum($var, \Gauge\Messages\ProtoExecutionResult_ErrorType::class);
        $this->errorType = $var;
    }

}

