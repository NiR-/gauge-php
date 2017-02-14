<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: spec.proto

namespace Gauge\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 *&#47; A proto object representing Table.
 * </pre>
 *
 * Protobuf type <code>gauge.messages.ProtoTable</code>
 */
class ProtoTable extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     *&#47; Contains the Headers for the table
     * </pre>
     *
     * <code>.gauge.messages.ProtoTableRow headers = 1;</code>
     */
    private $headers = null;
    /**
     * <pre>
     *&#47; Contains the Rows for the table
     * </pre>
     *
     * <code>repeated .gauge.messages.ProtoTableRow rows = 2;</code>
     */
    private $rows;

    public function __construct() {
        \GPBMetadata\Spec::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     *&#47; Contains the Headers for the table
     * </pre>
     *
     * <code>.gauge.messages.ProtoTableRow headers = 1;</code>
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * <pre>
     *&#47; Contains the Headers for the table
     * </pre>
     *
     * <code>.gauge.messages.ProtoTableRow headers = 1;</code>
     */
    public function setHeaders(&$var)
    {
        GPBUtil::checkMessage($var, \Gauge\Messages\ProtoTableRow::class);
        $this->headers = $var;
    }

    /**
     * <pre>
     *&#47; Contains the Rows for the table
     * </pre>
     *
     * <code>repeated .gauge.messages.ProtoTableRow rows = 2;</code>
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * <pre>
     *&#47; Contains the Rows for the table
     * </pre>
     *
     * <code>repeated .gauge.messages.ProtoTableRow rows = 2;</code>
     */
    public function setRows(&$var)
    {
        GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Gauge\Messages\ProtoTableRow::class);
        $this->rows = $var;
    }

}

