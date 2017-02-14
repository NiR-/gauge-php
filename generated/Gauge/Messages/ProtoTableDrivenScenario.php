<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: spec.proto

namespace Gauge\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 *&#47; A proto object representing a TableDrivenScenario
 * </pre>
 *
 * Protobuf type <code>gauge.messages.ProtoTableDrivenScenario</code>
 */
class ProtoTableDrivenScenario extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     *&#47; Scenario under Table driven execution
     * </pre>
     *
     * <code>.gauge.messages.ProtoScenario scenario = 1;</code>
     */
    private $scenario = null;
    /**
     * <pre>
     *&#47; Row Index of data table against which the current scenario is executed
     * </pre>
     *
     * <code>int32 tableRowIndex = 2;</code>
     */
    private $tableRowIndex = 0;

    public function __construct() {
        \GPBMetadata\Spec::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     *&#47; Scenario under Table driven execution
     * </pre>
     *
     * <code>.gauge.messages.ProtoScenario scenario = 1;</code>
     */
    public function getScenario()
    {
        return $this->scenario;
    }

    /**
     * <pre>
     *&#47; Scenario under Table driven execution
     * </pre>
     *
     * <code>.gauge.messages.ProtoScenario scenario = 1;</code>
     */
    public function setScenario(&$var)
    {
        GPBUtil::checkMessage($var, \Gauge\Messages\ProtoScenario::class);
        $this->scenario = $var;
    }

    /**
     * <pre>
     *&#47; Row Index of data table against which the current scenario is executed
     * </pre>
     *
     * <code>int32 tableRowIndex = 2;</code>
     */
    public function getTableRowIndex()
    {
        return $this->tableRowIndex;
    }

    /**
     * <pre>
     *&#47; Row Index of data table against which the current scenario is executed
     * </pre>
     *
     * <code>int32 tableRowIndex = 2;</code>
     */
    public function setTableRowIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->tableRowIndex = $var;
    }

}

