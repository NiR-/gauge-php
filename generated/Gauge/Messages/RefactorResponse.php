<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: messages.proto

namespace Gauge\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 *&#47; Response of a RefactorRequest
 * </pre>
 *
 * Protobuf type <code>gauge.messages.RefactorResponse</code>
 */
class RefactorResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     *&#47; Flag indicating the success of Refactor operation.
     * </pre>
     *
     * <code>bool success = 1;</code>
     */
    private $success = false;
    /**
     * <pre>
     *&#47; Error message, valid only if Refactor wasn't successful
     * </pre>
     *
     * <code>string error = 2;</code>
     */
    private $error = '';
    /**
     * <pre>
     *&#47; List of files that were affected because of the refactoring.
     * </pre>
     *
     * <code>repeated string filesChanged = 3;</code>
     */
    private $filesChanged;

    public function __construct() {
        \GPBMetadata\Messages::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     *&#47; Flag indicating the success of Refactor operation.
     * </pre>
     *
     * <code>bool success = 1;</code>
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * <pre>
     *&#47; Flag indicating the success of Refactor operation.
     * </pre>
     *
     * <code>bool success = 1;</code>
     */
    public function setSuccess($var)
    {
        GPBUtil::checkBool($var);
        $this->success = $var;
    }

    /**
     * <pre>
     *&#47; Error message, valid only if Refactor wasn't successful
     * </pre>
     *
     * <code>string error = 2;</code>
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * <pre>
     *&#47; Error message, valid only if Refactor wasn't successful
     * </pre>
     *
     * <code>string error = 2;</code>
     */
    public function setError($var)
    {
        GPBUtil::checkString($var, True);
        $this->error = $var;
    }

    /**
     * <pre>
     *&#47; List of files that were affected because of the refactoring.
     * </pre>
     *
     * <code>repeated string filesChanged = 3;</code>
     */
    public function getFilesChanged()
    {
        return $this->filesChanged;
    }

    /**
     * <pre>
     *&#47; List of files that were affected because of the refactoring.
     * </pre>
     *
     * <code>repeated string filesChanged = 3;</code>
     */
    public function setFilesChanged(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->filesChanged = $var;
    }

}
